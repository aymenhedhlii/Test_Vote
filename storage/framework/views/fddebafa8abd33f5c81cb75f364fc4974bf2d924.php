<?php $__env->startSection('content'); ?>
    <div class="login-box animated fadeInDown">
        
             <div class="login-body">
            <div class="login-title"><center> </div>

<div class="row">

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                          

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" placeholder="nom" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                         

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" placeholder="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                         

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" placeholder="mot de passe" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                          

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirmation mot de passe" required>
                            </div>
                        </div>

                        <div class="form-group">
                             <div class="col-md-12">
                                <button type="submit" class="col-md-12 btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.logi', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>