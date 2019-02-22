<?php $__env->startSection('content'); ?>

    <?php if(Session::has('success_message')): ?>
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            <?php echo session('success_message'); ?>


            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    <?php endif; ?>

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Questions</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="<?php echo e(route('questions.question.create')); ?>" class="btn btn-success" title="Create New Question">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true">create question</span>
                </a>
            </div>

        </div>
        
        <?php if(count($questions) == 0): ?>
            <div class="panel-body text-center">
                <h4>No Questions Available!</h4>
            </div>
        <?php else: ?>
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Enonce</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($question->enonce); ?></td>

                      
                       <td>

                                <form method="POST" action="<?php echo route('questions.question.destroy', $question->id); ?>" accept-charset="UTF-8">


                                <input name="_method" value="DELETE" type="hidden">
                                <?php echo e(csrf_field()); ?>

                                  
                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="<?php echo e(route('questions.question.show', $question->id )); ?>" class="btn btn-info" title="Show Question">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true">show</span>
                                        </a>
                                        <a href="<?php echo e(route('questions.question.edit', $question->id )); ?>" class="btn btn-primary" title="Edit Question">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true">edit</span>
                                        </a>
 
                                        <button type="submit" class="btn btn-danger" title="Delete Question" onclick="return confirm(&quot;Delete Question?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true">delete</span>
                                        </button>
                                    </div>
                                 
                                </form>
                                
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            <?php echo $questions->render(); ?>

        </div>
        
        <?php endif; ?>
    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.defaults', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>