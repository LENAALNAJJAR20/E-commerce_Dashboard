<?php $__env->startSection('content'); ?>
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4 d-flex justify-content-center align-items-center">
            <div class="col-sm-8 ">
                <div id="dash" class=" rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-user fa-3x "></i>
                    <div class="ms-3">
                        <p class="mb-2">Admins Registered </p>
                        <h6 class="mb-0"><?php echo e($todayUsersCount); ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div id="dash" class=" rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-users fa-3x"></i>
                    <div class="ms-3">
                        <p class="mb-2">Admins Registered today</p>
                        <h6 class="mb-0"><?php echo e($totalUsersCount); ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div id="dash" class=" rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-users fa-3x"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Users</p>
                        <h6 class="mb-0"><?php echo e($totalUsersCount); ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div id="dash" class=" rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-th fa-3x" aria-hidden="true"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Category</p>
                        <h6 class="mb-0"><?php echo e(($totalCategory)); ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div id="dash" class=" rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fab fa-product-hunt fa-3x"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Product</p>
                        <h6 class="mb-0"><?php echo e($totalProduct); ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div id="dash" class=" rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-comment fa-3x" aria-hidden="true"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Message</p>
                        <h6 class="mb-0"><?php echo e($totalMessage); ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 ">
                <div id="dash" class=" rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-shopping-basket fa-3x" aria-hidden="true"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Order</p>
                        <h6 class="mb-0"><?php echo e($totalOrder); ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div id="dash" class=" rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-dollar-sign fa-3x "></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Price</p>
                        <h6 class="mb-0"><?php echo e(($totalPriceOrder)); ?></h6>
                    </div>
                </div>
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenaJo\Desktop\Product_manage\e-commerce\resources\views/index.blade.php ENDPATH**/ ?>