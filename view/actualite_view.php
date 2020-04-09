<?php
    $title = " Actualités";
    ob_start();
?>
    <section id="testimonies" class="divider-wrapper opaqued" data-parallax="scroll" data-image-src="" data-speed="0.7">
        <div class="section-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center wow fadeInDown">
                        <h2 class="section-heading"><strong>Actualites</strong> </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                    <ul class="direction-aware owl-carousel wow fadeInUp" data-items="1" data-items-tablet="[768,1]"  data-items-mobile="[479,1]">
                        <li>
                            <div class="col-xs-2">
                                <img src="assets/images/img1.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-10 item-caption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente</p>
                                <span><strong>Edward Frankfurt</strong></span>
                            </div>
                        </li>
                        <li>
                            <div class="col-xs-2">
                                <img src="assets/images/actu4.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-10 item-caption">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente</p>
                                <span><strong>Charles Davies</strong></span>
                            </div>
                        </li>
                        <li>
                            <div class="col-xs-2">
                                <img src="assets/images/actu5.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-10 item-caption">
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente</p>
                                <span><strong>Charles Davies</strong></span>
                            </div>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
<?php
    $content = ob_get_clean();
    require('template1.php');
  ?>
