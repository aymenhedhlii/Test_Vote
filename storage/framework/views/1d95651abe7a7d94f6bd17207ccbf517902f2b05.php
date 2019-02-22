<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Vote Sondage</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
     
        <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon" />
        <!-- END META SECTION -->
          
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo e(asset('css/theme-default.css')); ?>"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
                 <?php echo $__env->yieldContent('content'); ?> 

            
        </div>

        
    </body>
</html>



