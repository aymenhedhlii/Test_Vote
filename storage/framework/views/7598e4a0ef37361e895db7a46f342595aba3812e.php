  <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out" name="logout"></span></a>                        
                    </li> 

  




 <?php if(auth()->user()->isAdmin == 1){?>
<div class="panel-body">
<a href="<?php echo e(url('admin/routes')); ?>"><li class="form-control" name="Admin"> <b> Admin </b></li></a>  
</div><?php } elseif(auth()->user()->isAdmin == 0){?>
  <div class="panel-body">
<a href="<?php echo e(url('admin/routes')); ?>"><li class="form-control" name="internaute"><b> User </b> </li></a>  
</div><?php }?>
                    

                   


                    <ul id="menu_horizontal">
<li> <?php if(auth()->user()->isAdmin == 1): ?> <a  onclick="window.location.href='/questions/create'">Ajouter nouvelle question</a>
      <li> <a  onclick="window.location.href='/questions'">Liste des questions</a></li>  
     
       <li> <a onclick="window.location.href='/reponses/create'">Ajouter reponse</a></li>
           <?php else: ?>
  <li> <a onclick="window.location.href='/reponse_abonnes/create'">repondre</a></li>
          <li><a onclick="window.location.href='/reponse_abonnes'">liste de reponses</a></li>
        <?php endif; ?>



</ul>

 </ul>
 <br><br><br><br><br><br><br>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
               
               
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
               
                <!-- END PAGE CONTENT WRAPPER -->                                
                      