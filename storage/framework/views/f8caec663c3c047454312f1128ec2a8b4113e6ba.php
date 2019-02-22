<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Vote Test</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo e(asset('css/theme-default.css')); ?>"/>
                                    
    </head>

 <body>




  
<?php echo $__env->make('layouts.partials.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

 

 <?php echo $__env->yieldContent('content'); ?>    
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                   <?php echo $__env->make('layouts.partials.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo e(asset('audio/alert.mp3')); ?>" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo e(asset('audio/fail.mp3')); ?>" preload="auto"></audio>

   
<script type="text/javascript" src="<?php echo e(asset('js/plugins/jquery/jquery.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/jquery/jquery-ui.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/bootstrap/bootstrap.min.js')); ?>"></script>        
           
        <script type='text/javascript' src="<?php echo e(asset('js/plugins/icheck/icheck.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')); ?>"></script>
           <script type="text/javascript" src="<?php echo e(asset('js/plugins/scrolltotop/scrolltopcontrol.js')); ?>"></script>

 <script type="text/javascript" src="<?php echo e(asset('js/plugins/morris/raphael-min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/morris/morris.min.js')); ?>"></script>       
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/rickshaw/d3.v3.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/rickshaw/rickshaw.min.js')); ?>"></script>
        <script type='text/javascript' src="<?php echo e(asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
        <script type='text/javascript' src="<?php echo e(asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>                
        <script type='text/javascript' src="<?php echo e(asset('js/plugins/bootstrap/bootstrap-datepicker.js')); ?>"></script>                
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/owl/owl.carousel.min.js')); ?>"></script>  
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/moment.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/daterangepicker/daterangepicker.js')); ?>"></script> 


 
 
    <script type="text/javascript" src="<?php echo e(asset('js/plugins/bootstrap/bootstrap-file-input.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/bootstrap/bootstrap-select.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/tagsinput/jquery.tagsinput.min.js')); ?>"></script>
     

        


    <script type="text/javascript" src="<?php echo e(asset('js/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/plugins/tableexport/tableExport.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/plugins/tableexport/jquery.base64.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/plugins/tableexport/html2canvas.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/plugins/tableexport/jspdf/libs/sprintf.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/plugins/tableexport/jspdf/jspdf.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/plugins/tableexport/jspdf/libs/base64.js')); ?>"></script>  


   

<script type="text/javascript" src="<?php echo e(asset('js/settings.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/plugins.js')); ?>"></script>        
<script type="text/javascript" src="<?php echo e(asset('js/actions.js')); ?>"></script>   
<script type="text/javascript" src="<?php echo e(asset('js/demo_dashboard.js')); ?>"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






