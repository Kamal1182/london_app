<?php $__env->startSection('content'); ?>
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>New Client</h4>
        <form action="/clients/new" method="post">
          <div class="medium-4  columns">
            <label>Title</label>
            <select name="form[title]">
            <?php $__currentLoopData = $titles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($title); ?>" ><?php echo e($title); ?>.</option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
          </div>
          <div class="medium-4  columns">
            <label>Name</label>
            <input name="form[name]" type="text">
          </div>
          <div class="medium-4  columns">
            <label>Last Name</label>
            <input name="form[lastName]" type="text">
          </div>
          <div class="medium-8  columns">
            <label>Address</label>
            <input name="form[address]" type="text">
          </div>
          <div class="medium-4  columns">
            <label>zip_code</label>
            <input name="form[zipCode]" type="text">
          </div>
          <div class="medium-4  columns">
            <label>City</label>
            <input name="form[city]" type="text">
          </div>
          <div class="medium-4  columns">
            <label>State</label>
            <input name="form[state]" type="text">
          </div>
          <div class="medium-12  columns">
            <label>Email</label>
            <input name="form[email]" type="text">
          </div>
          <div class="medium-12  columns">
            <input value="SAVE" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>