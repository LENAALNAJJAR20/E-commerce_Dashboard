<?php $__env->startSection('content'); ?>
    <section class="send-message mt-5 mb-5">
        <h1 class="text-center mb-4" style="color: black">Send Message to <?php echo e($user->name); ?></h1>
        <div class="container">
            <form method="POST" action="<?php echo e(route('users.sendMessage', $user->id)); ?>">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn"  style="background-color:  #ffd480;color: black">Send Message</button>
            </form>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenaJo\Desktop\Product_manage\e-commerce\resources\views/users/send_message.blade.php ENDPATH**/ ?>