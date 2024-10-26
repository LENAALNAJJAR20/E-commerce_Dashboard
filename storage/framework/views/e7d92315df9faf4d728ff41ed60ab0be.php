<?php $__env->startSection('content'); ?>
    <section class="mt-5 mb-5">
        <div class="container h-auto">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-9">
                    <h1 class="text-center text-black mb-4" style="font-size: 2.5rem; color: #333;">Edit Product</h1>
                    <form action="<?php echo e(route('products.update', $product->id)); ?>" method="POST" class="card shadow-lg"
                          style="border-radius: 15px; background-color: #ffffff;" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('patch'); ?>
                        <div class="card-body p-4">
                            <div class="mb-3">
                                <label for="image" class="form-label" style="font-weight: 600;">Upload Image</label>
                                <input type="file" accept="image/*" name="image" id="image" class="form-control"/>
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="text-danger"><?php echo e($message); ?></div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label for="name" class="form-label" style="font-weight: 600;">Product Name</label>
                                <input type="text" name="name" class="form-control"
                                       value="<?php echo e(old('name', $product->name)); ?>"/>
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label"
                                       style="font-weight: 600;">Description</label>
                                <textarea name="description" class="form-control"
                                          rows="4"><?php echo e(old('description', $product->description)); ?></textarea>
                                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="category_id" class="form-label" style="font-weight: 600;">Category</label>
                                <select name="category_id" id="category_id" class="form-select">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            value="<?php echo e($category['id']); ?>" <?php echo e($product->category_id == $category['id'] ? 'selected' : ''); ?>>
                                            <?php echo e($category['name']); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label" style="font-weight: 600;">Price</label>
                                <input type="text" name="price" class="form-control"
                                       value="<?php echo e(old('price', $product->price)); ?>"/>
                                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label" style="font-weight: 600;">Quantity</label>
                                <input type="text" name="quantity" class="form-control"
                                       value="<?php echo e(old('quantity', $product->quantity)); ?>"/>
                                <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label" style="font-weight: 600;">Status</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="">Select status</option>
                                    <option
                                        value="available" <?php echo e(old('status', $product->status) == 'available' ? 'selected' : ''); ?>>
                                        Available
                                    </option>
                                    <option
                                        value="unavailable" <?php echo e(old('status', $product->status) == 'unavailable' ? 'selected' : ''); ?>>
                                        Unavailable
                                    </option>
                                </select>
                                <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"><?php echo e($message); ?></span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg"
                                        style="background-color:  #ffd480;color: black">Update
                                    Product
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenaJo\Desktop\Product_manage\e-commerce\resources\views/Product/edit.blade.php ENDPATH**/ ?>