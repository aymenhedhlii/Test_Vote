<?php $__env->startSection('content'); ?>

    <div class="panel panel-default">
  
        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5"><?php echo e(!empty($title) ? $title : 'Question'); ?></h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="<?php echo e(route('questions.question.index')); ?>" class="btn btn-primary" title="Show All Question">
                    <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                </a>

                <a href="<?php echo e(route('questions.question.create')); ?>" class="btn btn-success" title="Create New Question">
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

            <form method="POST" action="<?php echo e(route('questions.question.update', $question->id)); ?>" id="edit_question_form" name="edit_question_form" accept-charset="UTF-8" class="form-horizontal">
            <?php echo e(csrf_field()); ?>

            <input name="_method" type="hidden" value="PUT">
            <?php echo $__env->make('questions.form', [
                                        'question' => $question,
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