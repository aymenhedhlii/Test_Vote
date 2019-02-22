<?php $__env->startSection('content'); ?>

    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            
            <span class="pull-left">
                <h4 class="mt-5 mb-5">Create New Question</h4>
            </span>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="<?php echo e(route('questions.question.index')); ?>" class="btn btn-primary" title="Show All Question">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true">Listes Questions</span>
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

            <form method="POST" action="<?php echo e(route('questions.question.store')); ?>" accept-charset="UTF-8" id="create_question_form" name="create_question_form" class="form-horizontal">
            <?php echo e(csrf_field()); ?>

            <?php echo $__env->make('questions.form', [
                                        'question' => null,
                                      ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Ajouter question">
                        <input class="btn btn-primary" type="button" value="Liste des questions" onclick="window.location.href='/questions'">                    
                    </div>
                </div>

            </form>

        </div>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.defaults', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>