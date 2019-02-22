<div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">Vote</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                  
                  
                                                                
                   <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Echantillon</span></a>
                        <ul>

                    <?php if(auth()->user()->isAdmin == 0): ?> 
                            <li><a href=""><span class="fa fa-file-text"></span>DEMANDE D'ECHANTILLON</a></li>
                             <li><a href=""><span class="fa fa-align-justify"></span>LISTE DES DEMANDES</a></li>
                           
                                
                                   <li><a href=""><span class="fa fa-align-justify"></span>LISTES DES DISTRIBUTIONS</a></li>

                                   <li><a href=""><span class="fa fa-file-text"></span>STOCK BUREAU</a></li>


                                

                                 <li class="xn-openable">
                                 <a href="#" ><span class="fa fa-magic"></span>DISTRIBUTION</a>
                               <ul>

                                  <li><a href="">Listes des distributions<br>par region</a></li>
                                  <li><a href="">Listes des distributions<br>par quotas</a></li>
                                   
                            <li><a href="">Listes des distributions<br>par delegue</a></li>
                            <li><a href="">distributions par <br>superviseur</a></li>
                                  </ul>

                            </li>
                 


                    <?php elseif(auth()->user()->isAdmin == 1): ?>
                     <li><a href=""><span class="fa fa-file-text"></span>DEMANDE D'ECHANTILLON</a></li>
                     <li><a href=""><span class="fa fa-align-justify"></span>LISTE DES DEMANDES</a></li>
                      <li><a href=""><span class="fa fa-align-justify"></span>LISTE D'ARRIVAGE</a></li>
                        <li><a href=""><span class="fa fa-align-justify"></span>LISTES DES DISTRIBUTIONS</a></li>
                          <li><a href=""><span class="fa fa-file-text"></span>STOCK BUREAU</a></li>

                           <li class="xn-openable">
                          <a href="#" ><span class="fa fa-magic"></span>DISTRIBUTION</a>
                
                             <ul>

                               <li><a href="">Listes des distributions<br>par region</a></li>
                                 <li><a href="">Listes des distributions<br>par quotas</a></li>
                             
                            <li><a href="">Listes des distributions<br>par delegue</a></li>
                            <li><a href="">distributions par <br>superviseur</a></li>
                             </ul>

                            </li>

                   <li><a href=""><span class="fa fa-file-text"></span>DISTRIBUTION RESERVE</a></li>
                            <li><a href=""><span class="fa fa-align-justify"></span>LISTES DISTRIBUTIONS RESERVES</a></li>
                   

                    
                    

                   

                           

                    <?php endif; ?>

                        </ul>
                    </li>

                   </div>