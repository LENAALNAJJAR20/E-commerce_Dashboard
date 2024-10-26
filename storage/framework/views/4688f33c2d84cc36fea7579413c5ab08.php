<?php $__env->startSection('content'); ?>
    <section class="intro mt-5 mb-5">
        <h1 class="text-center mb-4" style="color:black ">Cart Overview</h1>
        <div class="bg-image">
            <div class="mask d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true"
                                         style="position: relative;">
                                        <table class="table mb-0">
                                            <thead class="text-white" style="background-color: #2976e3;">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">User Name</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Created At</th>
                                                <th scope="col">Updated At</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr class="hover-effect">
                                                    <td><?php echo e($item->id); ?></td>
                                                    <td><?php echo e($item->user->name); ?></td>
                                                    <td><?php echo e($item->product->name); ?></td>
                                                    <td><?php echo e($item->status); ?></td>
                                                    <td><?php echo e($item->created_at->format('Y-m-d H:i')); ?></td>
                                                    <td><?php echo e($item->updated_at->format('Y-m-d H:i')); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('Components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenaJo\Desktop\Product_manage\e-commerce\resources\views/Cart/index.blade.php ENDPATH**/ ?>