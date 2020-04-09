<?php
    $title = " Legumes";
    ob_start();
?>
    <section id="filterable-portfolio" style="background: #1C563D;">
        <h2 style="text-align: center; color: #fff;">Production de semence de légumes</h2>
        <div class="section-inner">
            <div class="container">
                <div class="row wow fadeInUp">
                     <ul class="portfolio-filter gap text-center list-inline wow fadeInDown">
                        <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">Tous</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".apps">Mils </a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".design">Sorghos</a></li>
                        <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".photography">Maïs</a></li>
                    </ul><!--/#portfolio-filter-->

                    <ul class="portfolio-items col-3 isotope direction-aware">
                        <li class="col-md-4 portfolio-item da-item apps isotope-item">
                            <a class="lb-link" href="assets/images/prod1.jpg" title="View Image">
                                <img src="assets/images/prod1.jpg" class="img-responsive" alt="">
                                <div>
                                    <div class="portfolio-hover-content">
                                        <i class="pe-7s-close fa-3x"></i>
                                    </div>
                                </div>                                
                            </a>
                            <div class="item-caption">
                                <h4>Le mil </h4>
                                <p class="text-muted">Le mil </p>
                            </div>
                        </li>
                        <li class="col-md-4 portfolio-item da-item design isotope-item">
                            <a class="lb-link" href="assets/images/prod1.jpg" title="View Image">
                                <img src="assets/images/prod1.jpg" class="img-responsive" alt="">
                                <div>
                                    <div class="portfolio-hover-content">
                                        <i class="pe-7s-close fa-3x"></i>
                                    </div>
                                </div>                                
                            </a>
                            <div class="item-caption">
                                <h4>Le sorgho</h4>
                                <p class="text-muted">Le sorgho</p>
                            </div>
                        </li>
                        <li class="col-md-4 portfolio-item da-item photography isotope-item">
                            <a class="lb-link" href="assets/images/prod1.jpg" title="View Image">
                                <img src="assets/images/prod1.jpg" class="img-responsive" alt="">
                                <div>
                                    <div class="portfolio-hover-content">
                                        <i class="pe-7s-close fa-3x"></i>
                                    </div>
                                </div>                                
                            </a>
                            <div class="item-caption">
                                <h4>Le maïs</h4>
                                <p class="text-muted">Le maïs</p>
                            </div>
                        </li>
                    
                    </ul>
                </div>
            </div>
        </div>
    </section>
 <?php
    $content = ob_get_clean();
    require('template1.php');
  ?>