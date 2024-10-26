<div class="clear-both"></div>

<?php if(!empty(session('success'))): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('error'))): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('payment error'))): ?>
    <div class="alert alert-danger " role="alert">
        <?php echo e(session('payment error')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('warning'))): ?>
    <div class="alert alert-warning " role="alert">
        <?php echo e(session('warning')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('info'))): ?>
    <div class="alert alert-info" role="alert">
        <?php echo e(session('info')); ?> <!-- Corrected from 'into' to 'info' -->
    </div>
<?php endif; ?>

<?php if(!empty(session('secondary'))): ?>
    <div class="alert alert-secondary " role="alert">
        <?php echo e(session('secondary')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('primary'))): ?>
    <div class="alert alert-primary " role="alert">
        <?php echo e(session('primary')); ?>

    </div>
<?php endif; ?>

<?php if(!empty(session('light'))): ?>
    <div class="alert alert-light " role="alert">
        <?php echo e(session('light')); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\lenaJo\Desktop\Product_manage\e-commerce\resources\views/message.blade.php ENDPATH**/ ?>