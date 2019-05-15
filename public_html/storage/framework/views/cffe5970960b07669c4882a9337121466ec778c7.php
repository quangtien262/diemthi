<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Admin</title>

    <!-- Styles -->
    <?php echo $__env->make('backend.element.stylesheet', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="theme-1">

    
    <div class="layout-container">
      <!-- top navbar-->
      <header class="header-container">
         
        <?php echo $__env->make('backend.element.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </header>
      <!-- sidebar-->
        <?php echo $__env->make('backend.element.menuLeft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="sidebar-layout-obfuscator"></div>
      <!-- Main section-->
      <main class="main-container">
        <!-- Page content-->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- Page footer-->
        <footer><span>2017 - HT app.</span></footer>
      </main>
    </div>
    <!-- Search template-->
    <div class="modal modal-top fade modal-search" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="pull-left">
              <button class="btn btn-flat" type="button" data-dismiss="modal"><em class="ion-arrow-left-c icon-24"></em></button>
            </div>
            <div class="pull-right">
              <button class="btn btn-flat" type="button"><em class="ion-android-microphone icon-24"></em></button>
            </div>
            <form class="oh" action="#">
              <div class="mda-form-control pt0">
                <input class="form-control header-input-search" type="text" placeholder="Search.." data-localize="header.SEARCH">
                <div class="mda-form-control-line"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Search template-->
    <!-- Settings template-->
    <?php echo $__env->make('backend.element.setting', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Modal -->
        <div class="modal fade bs-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-content02 popup-content"></div>
            </div>
        </div>
    <!--end Modal -->
    <!-- Scripts -->
    <?php echo $__env->make('backend.element.script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
