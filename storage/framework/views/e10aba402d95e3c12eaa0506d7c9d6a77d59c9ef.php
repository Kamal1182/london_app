<?php $__env->startSection('content'); ?>
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Clients/Booking</h4>
        <div class="medium-2  columns">BOOKING FOR:</div>
        <div class="medium-2  columns"><b>
        <?php echo e($client->title); ?> 
        <?php echo e($client->name); ?> 
        <?php echo e($client->last_name); ?>

        </b></div>
        <form action="" method="post">
        <?php echo e(csrf_field()); ?>

          <div class="medium-1  columns">FROM:</div>
          <div class="medium-2  columns"><input name="dateFrom" value="<?php echo e($dateFrom); ?>" type="text" class="datepicker" /></div>
          <div class="medium-1  columns">TO:</div>
          <div class="medium-2  columns"><input name="dateTo" value="<?php echo e($dateTo); ?>" type="text" class="datepicker" /></div>
          <div class="medium-2  columns"><input class="button" type="submit" value="SEARCH" /></div>
        </form>

        <table class="stack">
          <thead>
            <tr>
              <th width="200">Room</th>
              <th width="200">Availability</th>
              <th width="200">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php if (! ( empty( $dateFrom ) || empty( $dateTo ) )): ?>
          <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
              <td><?php echo e($room->name); ?></td>
              <td>
                <div class="callout success">
                    <h7>Available</h7>
                </div>
              </td>
              <td>
                <a class="hollow button warning" 
                  href="<?php echo e(route('book_room',
                      ['client_id' => $client->id,
                        'room_id' => $room->id,
                        'date_in' => $dateFrom,
                        'date_out' => $dateTo
                      ]
                    )); ?>">BOOK NOW</a>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
                    </tbody>
        </table>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>