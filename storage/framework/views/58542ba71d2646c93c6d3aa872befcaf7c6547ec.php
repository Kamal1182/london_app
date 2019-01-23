<?php $__env->startSection('content'); ?>
    <div class="row">
      <div class="medium-6 large-5 columns">
        <form method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <input type="file" name="image_upload" />
            <small class="error"><?php echo e($errors->first('image_upload')); ?></small>
            <input type="submit" value="UPLOAD" class="button success hollow" />
        </form>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>