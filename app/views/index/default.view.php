
<div class="home">
    <div class="swiper-container ">

        <div class="swiper-wrapper ">

            <?php
                for ($i=1;$i<=3;$i++){
                    ?>
                    <div class="swiper-slide  d-flex flex-column justify-content-center  align-items-center ">
                        <div class="parallax-bg h-100" style="  background-image:linear-gradient(#00000052, #00000048, #000000ab),
    url('<?php $var = 's'.$i.'img'; echo $$var; ?>');" data-swiper-parallax="-90%"></div>
                        <div class="title animated bounceInLeft delay-2ms" data-swiper-parallax="-300"><h1><?php $var = 's'.$i.'h1'; echo $$var; ?></h1> </div>
                        <div class="subtitle animated pulse delay-2ms" data-swiper-parallax="-200"><?php $var = 's'.$i.'p'; echo $$var; ?></div>
                    </div>
            <?php
                }
            ?>

        </div>

        <!-- Add Navigation -->
        <div class="swiper-button-prev swiper-button-white"> <i class="fas fa-arrow-right  "></i></div>
        <div class="swiper-button-next swiper-button-white"> <i class="fas fa-arrow-left "></i></div>
    </div>

    <div class="social row  ">
        <ul class="list-unstyled   text-center mb-0">
            <li>  <a href="https://api.whatsapp.com/send?phone=<?= $phone->link; ?>" class="instagram px-4"><i class="fab fa-whatsapp"></i></a></li>
            <li>  <a href="https://<?= $face->link; ?>" class="facebook px-4"><i class="fab fa-facebook-f "></i></a></li>
        </ul>
    </div>

</div>




