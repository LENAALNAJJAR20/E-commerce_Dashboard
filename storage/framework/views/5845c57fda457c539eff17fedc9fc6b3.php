<?php $__env->startSection('content'); ?>
    <section class="reply mt-5 mb-5">
        <h1 class="text-center  mb-4" style="color: black">Reply to Message</h1>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <form action="<?php echo e(route('messages.reply', $message->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="reply">Your Reply</label>
                                    <textarea class="form-control" id="reply" name="reply" rows="4" required></textarea>
                                </div>
                                <button type="submit" class="btn  mt-3"
                                        style="background-color:  #ffd480;color: black">Send Reply
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Components.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lenaJo\Desktop\Product_manage\e-commerce\resources\views/Message/reply.blade.php ENDPATH**/ ?>