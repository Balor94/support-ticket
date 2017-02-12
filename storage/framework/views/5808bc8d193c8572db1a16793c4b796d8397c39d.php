<?php $__env->startSection('title', 'My Tickets'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket"> My Tickets</i>
                </div>

                <div class="panel-body">
                    <?php if($tickets->isEmpty()): ?>
                        <p>You have not created any tickets.</p>
                    <?php else: ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Last Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($category->id === $ticket->category_id): ?>
                                            <?php echo e($category->name); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(url('tickets/'. $ticket->ticket_id)); ?>">
                                            #<?php echo e($ticket->ticket_id); ?> - <?php echo e($ticket->title); ?>

                                        </a>
                                    </td>
                                    <td>
                                    <?php if($ticket->status === 'Open'): ?>
                                        <span class="label label-success"><?php echo e($ticket->status); ?></span>
                                    <?php else: ?>
                                        <span class="label label-danger"><?php echo e($ticket->status); ?></span>
                                    <?php endif; ?>
                                    </td>
                                    <td><?php echo e($ticket->updated_at); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <?php echo e($tickets->render()); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>