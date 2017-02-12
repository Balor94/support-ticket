<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>You are logged in!</p>

                    <?php if(Auth::user()->is_admin): ?>
                        <p>
                            See all <a href="<?php echo e(url('admin/tickets')); ?>">tickets</a>
                        </p>
                    <?php else: ?>
                        <p>
                            See all your <a href="<?php echo e(url('my_tickets')); ?>">tickets</a> or <a href="<?php echo e(url('new_ticket')); ?>">open new ticket</a>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>