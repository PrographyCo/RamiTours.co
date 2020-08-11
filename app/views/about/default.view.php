<div class="aboutus pb-4  pb-md-0">
    <div class="container-fluid ">

        <div class="row d-flex justify-content-center  align-items-center  p-0 m-0">
            <div class="col-12 col-lg-4">
                <div class="page-title about mb-3 ">
                    <h1><b>
                        <?= $about; ?>
                    </b></h1>
                </div>
                <div class="text pb-4 ">
                    <p class="pr-0 pr-sm-3 pr-md-4 pr-lg-0"><b>
                        <?= $aboutp; ?></b>
                    </p>
                </div>

            </div>



            <div class=" slider-about col-12 col-lg-8 p-0 mb-5 mb-md-0" >

                <!--                            <div class="fav-btn">-->
                <!--                                <span href="" class="favme dashicons dashicons-heart"><i class="fas fa-heart fa-2x"></i></span>-->
                <!--                            </div>-->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php
                    $l = ($lang == 'en')? 'e':'a';
                    foreach ($images as $image){
                    ?>
                        <div class="swiper-slide d-flex flex-column justify-content-end  align-content-end align-items-start ">
                            <a href="/about/data/<?= $image->id; ?>">
                                <div class="parallax-bg h-100" style="background-image:url(<?= $image->img; ?>)" data-swiper-parallax="-90%"></div>

                                <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0"><?php $var= $l.'name'; echo $image->$var;  ?></div>
                                <div class="subtitle" data-swiper-parallax="-200"><?php $var= $l.'details'; echo $image->$var;  ?></div>
                            </a>
                        </div>
                        <?php
                        }
                        ?>


                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination "></div>
                </div>




            </div>
        </div>
    </div>





</div>