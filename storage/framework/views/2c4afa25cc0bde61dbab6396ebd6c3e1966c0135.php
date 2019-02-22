

        <input type="hidden" class="form-control" id="user_id" name="user_id" value="<?php echo e(auth()->user()->id); ?>">
    

<div class="form-group">
    <label for="question_id" class="col-md-2 control-label">Question : </label>
    <div class="col-md-10">
       <h3>
        <?php if(count($questions)>0): ?>
        	<?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    	<?php echo e($question); ?>

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <input type="hidden" name="question_id" value="<?php echo e($key); ?>">
        </h3>
        <ul>
        <?php $__currentLoopData = $reponses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $reponse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li> <input type="radio" name="reponse_id" value="<?php echo e($reponse['id']); ?>">       
            <?php echo e($reponse['reponse']); ?>

        </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <?php echo e("terminé"); ?>

            <?php endif; ?>
            
        </ul>
    </div>
</div>

