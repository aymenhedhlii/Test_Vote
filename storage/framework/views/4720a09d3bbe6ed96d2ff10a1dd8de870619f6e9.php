
<div class="form-group <?php echo e($errors->has('enonce') ? 'has-error' : ''); ?>">
    <label for="enonce" class="col-md-2 control-label">Enonce</label>
    <div class="col-md-10">
        <input class="form-control" name="enonce" type="text" id="enonce" value="<?php echo e(old('enonce', optional($question)->enonce)); ?>" minlength="1" maxlength="191" required="true" placeholder="Enter enonce here...">
        <?php echo $errors->first('enonce', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

