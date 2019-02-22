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
                <h4 class="mt-5 mb-5">Reponses</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="<?php echo e(route('reponses.reponse.create')); ?>" class="btn btn-success" title="Create New Reponse">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        <?php if(count($reponses) == 0): ?>
            <div class="panel-body text-center">
                <h4>No Reponses Available!</h4>
            </div>
        <?php else: ?>
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Reponse</th>
                         
                            <th>Question</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $reponses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reponse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($reponse->reponse); ?></td>
                         
                            <td><?php echo e(optional($reponse->question)->enonce); ?></td>

                            <td>

                                <form method="POST" action="<?php echo route('reponses.reponse.destroy', $reponse->id); ?>" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                <?php echo e(csrf_field()); ?>


                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="<?php echo e(route('reponses.reponse.show', $reponse->id )); ?>" class="btn btn-info" title="Show Reponse">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="<?php echo e(route('reponses.reponse.edit', $reponse->id )); ?>" class="btn btn-primary" title="Edit Reponse">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Reponse" onclick="return confirm(&quot;Delete Reponse?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
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
            <?php echo $reponses->render(); ?>

        </div>
        
        <?php endif; ?>
    
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.defaults', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>