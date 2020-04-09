<?php
    $title = " Présentation";
    ob_start();
?>
    <section>
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading"><strong>Présentation</strong> </h2>
                    </div>
                    <div class="col-md-12 wow fadeInLeft" data-wow-delay="0s">
                        <div id="news-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">                  
                                <div class="item active" style="height: 500px;">
                                    <img class="img-responsive" src="assets/img/team/1.jpg">
                                    <div class="carousel-caption">
                                        <p>AA Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        <a class="btn btn-primary pull-right" href="#">Lire plus</a>
                                    </div>
                                </div><!-- End Item -->
                         
                                 <div class="item" style="height: 500px;">
                                    <img class="img-responsive" src="assets/img/team/2.jpg">
                                    <div class="carousel-caption">
                                        <p>BB Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        <a class="btn btn-primary pull-right" href="#">Lire plus</a>
                                    </div>
                                </div><!-- End Item -->
                                
                                <div class="item" style="height: 500px;">
                                    <img class="img-responsive" src="assets/img/team/3.jpg">
                                   <div class="carousel-caption">
                                        <p>CC Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        <a class="btn btn-primary pull-right" href="#">Lire plus</a>
                                    </div>
                                </div><!-- End Item -->
                                
                                <div class="item" style="height: 500px;">
                                    <img class="img-responsive" src="assets/img/team/1.jpg">
                                    <div class="carousel-caption">
                                        <p>DD Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        <a class="btn btn-primary pull-right" href="#">Lire plus</a>
                                    </div>
                                </div><!-- End Item -->

                                <div class="item" style="height: 500px;">
                                    <img class="img-responsive" src="assets/img/team/2.jpg">
                                    <div class="carousel-caption">
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                        <a class="btn btn-primary pull-right" href="#">Lire plus</a>
                                    </div>
                                </div><!-- End Item -->
                                        
                              </div><!-- End Carousel Inner -->


                            <ul class="list-group col-sm-4">
                              <li data-target="#news-carousel" data-slide-to="0" class="list-group-item active"><h4>Listen To This New Band</h4></li>
                              <li data-target="#news-carousel" data-slide-to="1" class="list-group-item"><h4>An Awesome Review</h4></li>
                              <li data-target="#news-carousel" data-slide-to="2" class="list-group-item"><h4>Celbrity Interview</h4></li>
                              <li data-target="#news-carousel" data-slide-to="3" class="list-group-item"><h4>We Travel To New York</h4></li>
                              <li data-target="#news-carousel" data-slide-to="4" class="list-group-item"><h4>Check Out The Latest App</h4></li>
                            </ul>

                              <!-- Controls -->
                              <div class="carousel-controls">
                                  <a class="left carousel-control" href="#news-carousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                  </a>
                                  <a class="right carousel-control" href="#news-carousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                  </a>
                              </div>

                            </div><!-- End Carousel -->
                    </div>

                    
                </div>                
            </div>
        </div>
    </section>
<?php
    $content = ob_get_clean();
    require('template1.php');
  ?>