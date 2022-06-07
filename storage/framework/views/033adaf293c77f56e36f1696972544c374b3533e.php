<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

   <?php echo $__env->make('partials/css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- HEADER MOBILE-->
        <?php echo $__env->make('partials/header_mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php echo $__env->make('partials/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php echo $__env->make('partials/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php echo $__env->make('partials/script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<!-- end document--><?php /**PATH D:\KK4 -A\modul\3-10-Aurellia\resources\views/layouts/app.blade.php ENDPATH**/ ?>