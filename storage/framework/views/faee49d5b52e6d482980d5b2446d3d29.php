<?php $__env->startSection('content'); ?>
    <section class="intro mt-5 mb-5">
        <h1 class="text-center  mb-4" style="color: black">Order Overview</h1>
        <div class="bg-image">
            <div class="mask d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6 col-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #ffd480 ">Order ID: <?php echo e($item->id); ?></h5>
                                        <p class="card-text"><strong>User Name:</strong> <?php echo e($item->user->name); ?></p>
                                        <p class="card-text"><strong>Product Name:</strong> <?php echo e($item->product->name); ?></p>
                                        <p class="card-text"><strong>Order Date:</strong> <?php echo e($item->OrderDate); ?></p>
                                        <p class="card-text"><strong>Total Price:</strong> <?php echo e($item->TotalPrice); ?> $</p>
                                        <?php if($item->TotalPrice > 50): ?>
                                            <p style="color: #ffd480 "><strong>Message:</strong> Free shipping on this
                                                order!</p>
                                        <?php endif; ?>
                                        <p class="card-text"><small>Created
                                                At: <?php echo e($item->created_at->format('Y-m-d H:i')); ?></small></p>
                                        <p class="card-text"><small>Updated
                                                At: <?php echo e($item->updated_at->format('Y-m-d H:i')); ?></small></p>
                                        <p class="card-text"><strong>Delivery
                                                Status:</strong> <?php echo e($item->delivery_status); ?></p>
                                        <?php if($item->delivery_status !== 'Delivered'): ?>
                                            <p style="color: #e8ce7d "><strong>Note:</strong> Your order will take 4
                                                days to deliver.</p>
                                        <?php else: ?>
                                            <p style="color: #ffd480 "><strong>Feedback:</strong> We hope you enjoyed
                                                your order! Please provide your feedback.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('Components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenaJo\Desktop\Product_manage\e-commerce\resources\views/Order/index.blade.php ENDPATH**/ ?>