<?php $__env->startSection('content'); ?>
<div class="container"> 
     <div class="login-box animated fadeInDown">
       <div class="login-body" >

                 <div class="login-title"><center> </div>

                     <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>


                 <div class="col-md-12">
             <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-12 control-label" placeholder="E-Mail"/>
                             </div>

                         <input id="email" type="email" class="form-control" name="email" placeholder="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                      
                <div class="col-md-12">
                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-12 control-label" placeholder="Password"/>
                                  
                        <input id="password" type="password" class="form-control" name="password" placeholder="mot de passe" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                 <div class="form-group">
                              <div class="col-md-8">
                                <div class="checkbox">
                                
                     <label style="color:#A9A9A9";> 
                     <input  type="checkbox" name="remember" <?php if(Cookie::get('name') != false): ?> <?php echo e(old('remember') ? 'checked' : ''); ?>  <?php endif; ?>> Se souvenir de moi 
                          </label>
                           
                     </div>
                     </div>
                    </div>
               
                        <div class="form-group">
                           <div class="col-md-12">
                                <button  type="submit" class="col-md-12 btn btn-primary">

                                  <strong><font color="#CCEEFF" >Connexion</strong>
                                  
                                </button>

                               <div class="col-md-18">
                                <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    mot de passe oublié?
                                </a>
                                 </div> 
                                  <div class="m-t-20">
                                  
                                 </div>
                                 <br><br>
                        
                                 <button style="color:#5A5E6B";><a href="<?php echo e(route('register')); ?>">Créer un nouveau compte</a></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.logi', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>