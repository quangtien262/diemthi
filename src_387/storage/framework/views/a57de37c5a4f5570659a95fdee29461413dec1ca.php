<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title><?php echo e(isset($config->seo_title) ? $config->seo_title : 'Báo giao thông'); ?></title>
    <meta name="description" content="<?php echo e(isset($config->seo_description) ? $config->seo_description : 'Báo giao thông'); ?>">
    <meta name="keyword" content="<?php echo e(isset($config->seo_keyword) ? $config->seo_keyword : 'Báo giao thông'); ?>">

    <?php echo $__env->make('frontend.element.layout.stylesheet', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('frontend.element.layout.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>

<body cz-shortcut-listen="true">

    <!-- Fixed navbar -->
    <?php echo $__env->make('frontend.element.layout.header2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
        <!--start slide-->
        <div class='main_content'>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <div style="margin-top: 70px;background:#f2f2f2;" class="footer">
        <?php echo $__env->make('frontend.element.layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
    </div>
</body>

</html>