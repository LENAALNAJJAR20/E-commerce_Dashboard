<?php $__env->startSection('content'); ?>
    <section class="vh-100 mt-5 mb-5">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-8">
                    <h1  class="text-center mb-4" style="color: black">Add New Category</h1>
                    <form action="<?php echo e(route('categories.store')); ?>" method="POST" class="card shadow-sm"
                          style="border-radius: 15px;" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('post'); ?>
                        <div class="card-body">
                            <div class="form-group row align-items-center py-3">
                                <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control form-control-lg" id="name"
                                           placeholder="Enter category name"/>
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
                            </div>
                            <hr class="my-4">
                            <div class="form-group row align-items-center py-3">
                                <label for="status" class="col-md-3 col-form-label text-md-right">Status</label>
                                <div class="col-md-9">
                                    <select name="status" id="status" class="form-control form-control-lg">
                                        <option value="">Select status</option>
                                        <option value="available">Available</option>
                                        <option value="unavailable">Unavailable</option>
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
                            </div>
                            <hr class="my-4">
                            <div class="text-center py-4">
                                <button type="submit" class="btn  btn-lg"
                                        style="background-color:  #ffd480;color: black">Add Category
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenaJo\Desktop\Product_manage\e-commerce\resources\views/Category/create.blade.php ENDPATH**/ ?>