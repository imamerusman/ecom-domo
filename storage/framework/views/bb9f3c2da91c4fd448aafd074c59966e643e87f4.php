<?php $__env->startSection('content'); ?>

    <!-- .page-wrapper -->
    <div class="page-wrapper r1-container">

        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="r1-account-decorative-line"></div>
        <!-- .r1-main -->
        <main class="r1-main">
            <section class="r1-section-products categories divider">
                <div class="r1-title-wrapper">
                    <h2 class="r1-title"><?php echo e(Trans::__('categories')); ?></h2>
                </div>

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="products-category">
                        <div class="r1-title-wrapper">
                            <h4 class="r1-subtitle"><span><?php echo e($category->name); ?></span></h4>
                        </div>

                        <?php echo $__env->make('partials._products', ['products' => $category->products()->inRandomOrder()->limit(4)->get(), 'hideFilter' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="r1-section-products__load">
                            <a href="<?php echo e(route('category', $category->slug)); ?>" class="r1-button"><?php echo e(Trans::do('Show All')); ?></a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </section>

            <?php echo $__env->make('partials.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </main>
        <!-- \.r1-main -->

    </div>
    <!-- \.page-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/italyskincare.com/resources/views/categories/index.blade.php ENDPATH**/ ?>