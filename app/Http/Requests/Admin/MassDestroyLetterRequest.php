<?php

namespace App\Http\Requests\Admin;

use App\Models\Letter;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyLetterRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('letter_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:letters,id',
        ];
    }
}