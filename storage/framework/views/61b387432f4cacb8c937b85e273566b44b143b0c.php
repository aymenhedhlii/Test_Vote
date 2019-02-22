

                    <div class="mb-footer">
                       <div class="pull-right">
                            <a method="POST" class="btn btn-success btn-lg" href="<?php echo e(route('logout')); ?>"
   onclick="event.preventDefault();        document.getElementById('logout-form').submit();">Yes</a>


                          
    <button class="btn btn-default btn-lg mb-control-close">No</button>

<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" >
    <?php echo e(csrf_field()); ?>

</form>
 </div>
   </div>