<?php
    $title = " Activites";
    ob_start();
?>
    <!-- Single Section -->
    <section style="background: #1C563D;">
        <div>
        <h2 style="tcolor: #fff;">Activites</h2>
        </div>
        <div class="section-inner">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-12">
                        <div id="post-content" class="gap row">
                            <div class="col-md-12">
                                 <ul class="direction-aware row">
                                    <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                        <a class="view-link" href="#" title="View Post">
                                            <img src="assets/images/img1.jpg" class="img-responsive" alt="">
                                            <div>
                                                <div class="portfolio-hover-content">
                                                    <i class="pe-7s-close fa-3x"></i>
                                                </div>
                                            </div>                                
                                        </a>
                                        <div class="item-caption">
                                            <h4>Travelling The Globe</h4> 
                                            <p class="post-excerpt">Breakfast agreeable incommode departure it an. By ignorant at on wondered relation.</p>
                                            <a class="pull-right btn btn-primary btn-outlined" href="#">Lire Article</a> 
                                        </div>
                                    </li>
                                    <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                        <a class="view-link" href="#" title="View Post">
                                            <img src="assets/images/actu5.jpg" class="img-responsive" alt="">
                                            <div>
                                                <div class="portfolio-hover-content">
                                                    <i class="pe-7s-close fa-3x"></i>
                                                </div>
                                            </div>                                
                                        </a>
                                        <div class="item-caption">
                                            <h4>This Band Rock</h4>
                                            <p class="post-excerpt">Breakfast agreeable incommode departure it an. By ignorant at on wondered relation.</p> 
                                            <a class="pull-right btn btn-primary btn-outlined" href="#">Lire Article</a> 
                                        </div>
                                    </li>
                                    <li class="col-md-4 portfolio-item da-item wow fadeInUp" data-mh="blog-posts">
                                        <a class="view-link" href="#" title="View Post">
                                            <img src="assets/images/actu4.jpg" class="img-responsive" alt="">
                                            <div>
                                                <div class="portfolio-hover-content">
                                                    <i class="pe-7s-close fa-3x"></i>
                                                </div>
                                            </div>                               
                                        </a>
                                        <div class="item-caption">
                                            <h4>Treasure Chest</h4>
                                            <p class="post-excerpt">Breakfast agreeable incommode departure it an. By ignorant at on wondered relation.</p>
                                            <a class="pull-right btn btn-primary btn-outlined" href="#">Lire Article</a> 
                                        </div>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                            
                        </div> 
                    </div>
                </div>                
            </div>
        </div>
    </section>

   <?php
    $content = ob_get_clean();
    require('template1.php');
  ?>