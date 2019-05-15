

<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section>
  <div class="container-fluid">
    <!-- DATATABLE DEMO 2-->
    <div class="card">
      <div class="card-heading">Home</div>
      <div class="card-body">

      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>