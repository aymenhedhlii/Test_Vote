<?php $__env->startSection('content'); ?>

    <div class="panel panel-default">
  
        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5"><?php echo e(!empty($title) ? $title : 'Reponse Abonnes'); ?></h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="<?php echo e(route('reponse_abonnes.reponse_abonnes.index')); ?>" class="btn btn-primary" title="Show All Reponse Abonnes">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="<?php echo e(route('reponse_abonnes.reponse_abonnes.create')); ?>" class="btn btn-success" title="Create New Reponse Abonnes">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>

            </div>
        </div>

        <div class="panel-body">

            <?php if($errors->any()): ?>
                <ul class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('reponse_abonnes.reponse_abonnes.update', $reponseAbonnes->id)); ?>" id="edit_reponse_abonnes_form" name="edit_reponse_abonnes_form" accept-charset="UTF-8" class="form-horizontal">
            <?php echo e(csrf_field()); ?>

            <input name="_method" type="hidden" value="PUT">
            <?php echo $__env->make('reponse_abonnes.form', [
                                        'reponseAbonnes' => $reponseAbonnes,
                                      ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.defaults', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>