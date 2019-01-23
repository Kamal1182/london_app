<?php $__env->startSection('content'); ?>
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Clients</h4>
        <div class="medium-2  columns"><a class="button hollow success" href="<?php echo e(route('new_client')); ?>">ADD NEW CLIENT</a></div>

        
        <table class="stack">
          <thead>
            <tr>
              <th width="200">Name</th>
              <th width="200">Email</th>
              <th width="200">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($client->title); ?>. <?php echo e($client->name); ?> <?php echo e($client->last_name); ?></td>
                <td><?php echo e($client->email); ?></td>
                <td>
                  <a class="hollow button" href="<?php echo e(route('show_client', ['client_id' => $client->id ])); ?>">EDIT</a>
                  <a class="hollow button warning" href="<?php echo e(route('check_room', ['client_id' => $client->id ])); ?>">BOOK A ROOM</a>
                </td>
              </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              
                      </tbody>
        </table>

        
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>