

<?php $__env->startSection('container'); ?>
    <h1> Halaman About </h1>
    <h3> <?php echo e($nama); ?> </h3>
    <p> <?php echo e($email); ?> </p>
    <img src="images/<?php echo e($gambar); ?>" alt="<?php echo e($nama); ?>" width="200px">
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KK4 -A\modul\3-10-Aurellia\resources\views/about.blade.php ENDPATH**/ ?>