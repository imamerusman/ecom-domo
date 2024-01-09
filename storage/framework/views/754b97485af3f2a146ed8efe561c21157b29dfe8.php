<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.create')); ?> <?php echo e(trans('cruds.block.title_singular')); ?>

    </div>

    <div class="card-body">
        <form method="POST" action="<?php echo e(route("admin.blocks.store")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('admin.blocks.partials._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/italyskincare.com/resources/views/admin/blocks/create.blade.php ENDPATH**/ ?>