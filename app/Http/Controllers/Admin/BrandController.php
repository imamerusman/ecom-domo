<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Translator;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\Admin\MassDestroyBrandRequest;
use App\Http\Requests\Admin\StoreBrandRequest;
use App\Http\Requests\Admin\UpdateBrandRequest;
use App\Models\Brand;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class BrandController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('brand_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brands = Brand::with(['media'])->get();

        return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        abort_if(Gate::denies('brand_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.brands.create');
    }

    public function store(StoreBrandRequest $request)
    {
        $brand = Brand::create($request->all());

        if ($request->input('photo', false)) {
            $brand->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $brand->id]);
        }

        Translator::forgetCache(Brand::CACHE_KEY);

        return redirect()->route('admin.brands.index');
    }

    public function edit(Brand $brand)
    {
        abort_if(Gate::denies('brand_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.brands.edit', compact('brand'));
    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $brand->update($request->all());

        if ($request->input('photo', false)) {
            if (!$brand->photo || $request->input('photo') !== $brand->photo->file_name) {
                if ($brand->photo) {
                    $brand->photo->delete();
                }
                $brand->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($brand->photo) {
            $brand->photo->delete();
        }

        Translator::forgetCache(Brand::CACHE_KEY);

        return redirect()->route('admin.brands.index');
    }

    public function show(Brand $brand)
    {
        abort_if(Gate::denies('brand_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brand->load('brandProducts');

        return view('admin.brands.show', compact('brand'));
    }

    public function destroy(Brand $brand)
    {
        abort_if(Gate::denies('brand_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $brand->delete();

        Translator::forgetCache(Brand::CACHE_KEY);

        return back();
    }

    public function massDestroy(MassDestroyBrandRequest $request)
    {
        Brand::whereIn('id', request('ids'))->delete();

        Translator::forgetCache(Brand::CACHE_KEY);

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('brand_create') && Gate::denies('brand_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Brand();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}