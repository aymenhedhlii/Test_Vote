
<div class="form-group <?php echo e($errors->has('reponse') ? 'has-error' : ''); ?>">
    <label for="reponse" class="col-md-2 control-label">Reponse</label>
    <div class="col-md-10">
        <input class="form-control" name="reponse" type="text" id="reponse" value="<?php echo e(old('reponse', optional($reponse)->reponse)); ?>" minlength="1" maxlength="191" required="true" placeholder="Enter reponse here..." autocomplete="off">
        <?php echo $errors->first('reponse', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group <?php echo e($errors->has('correct') ? 'has-error' : ''); ?>">
   
</div>

<div class="form-group <?php echo e($errors->has('question_id') ? 'has-error' : ''); ?>">
    <label for="question_id" class="col-md-2 control-label">Question</label>
    <div class="col-md-10">
        <select class="form-control select" id="question_id" name="question_id" required="true">
        	    <option value="" style="display: none;" <?php echo e(old('question_id', optional($reponse)->question_id ?: '') == '' ? 'selected' : ''); ?> disabled selected>Select question</option>
        	<?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    <option value="<?php echo e($key); ?>" <?php echo e(old('question_id', optional($reponse)->question_id) == $id ? 'selected' : ''); ?>>
			    	<?php echo e($question); ?>

			    </option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        
        <?php echo $errors->first('question_id', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

