<div class="contactus ">
    <div class="container animated zoomIn delay-2ms ">


        <div class="page-title  mb-3 text-center">
            <h1>
                <?= $cont; ?>
            </h1>
        </div>
        <div class="form">
            <form class="container w-75  " action="/about/add" method="post">

                <div class="row">
                    <div class="col-12">
                        <input type="text" maxlength="30" class="form-control form-control-lg  bg-transparent" id="name" placeholder="<?= $name; ?>" name="name" style="color:white; font-size: 90%;border-width: 2px " required>
                    </div>
                    <div class="col-12 ">
                        <input type="email" maxlength="30" class="form-control form-control-lg bg-transparent mt-2 " id="email" placeholder="<?= $email; ?>" name="email" style=" color:white; font-size: 90%;border-width: 2px" required>
                    </div>



                    <div class="col-12 mt-2 mb-n2 mb-md-0 ">
                        <div class="form-group">
                            <textarea maxlength="180" class="form-control form-control-lg bg-transparent" id="exampleFormControlTextarea1" name="comment" placeholder="<?= $message; ?>" rows="3" style=" color:white; font-size: 94%;border-width: 2px" required></textarea>
                        </div>
                    </div>
                    <div class=" col-auto col-md-6 d-flex mt-md-1">
                        <pictute><img src="<?= IMG ?>error.svg" class="img-fluid" style="max-width: 21px" alt="required"></pictute>
                        <span class="text-primary " style="font-size: 90% ;line-height: 2"><?= $require; ?></span>
                    </div>
                    <div class=" col-12 col-md-6 d-flex justify-content-end mb-3 mt-1 mt-md-0  ">
                        <button type="submit" class="btn btn-outline col-12 col-md-4  " style="background-color: #9169DB">
                            <a href="" class="text-white"><?= $send; ?></a></button>
                    </div>

                </div>


            </form> </div>
        <div class="for-media pb-5">
            <h4 class="text-center mb-3"><?= $media; ?></h4>
            <div class="row  ">
                <div class="Whats pb-3  col-12 col-md-6 col-lg-4">
                    <div class=" media-data-1 row  d-flex justify-content-center justify-content-md-center mb-4  ">
                        <div class="icon pl-4 pr-4">
                            <span class="back-ground"></span>
                            <a href="https://api.whatsapp.com/send?phone=<?= $phone->link; ?>" class="whatsapp px-4"><i class="fab fa-whatsapp "></i></a>
                        </div>
                        <div class="media-data pt-lg-2 ">
                            <div class=media-name>
                                <?= $whats ?>
                            </div>
                            <div class="media-no">
                                <strong><?= $phone->link; ?></strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" face pb-5 col-12  col-md-6 col-lg-4">
                    <div class=" media-data-2 row d-flex justify-content-center justify-content-md-center">
                        <div class="icon pl-4 pr-4 ">
                            <span class="back-ground"></span>
                            <a href="https://<?= $face_link->link; ?>" class="facebook px-4  "><i class="fab fa-facebook-f "></i></a>
                        </div>
                        <div class="media-data pt-lg-2 ">
                            <div class=media-name>
                                <?= $face; ?>
                            </div>
                            <div class="media-no">
                                Rami Tours & Transportation
                            </div>
                        </div>
                    </div>
                </div>


                <div class=" face pb-5 col-12 col-lg-4">
                    <div class=" media-data-2 row d-flex justify-content-center justify-content-md-center  mr-5 mr-lg-4">
                        <div class="icon pl-4 pr-4 ">
                            <span class="back-ground"></span>
                            <a href="https://www.tripadvisor.com/Attraction_Review-g293983-d17626299-Reviews-Rami_Tours_Fun-Jerusalem_Jerusalem_District.html" class="facebook px-4  ">
                                <i class="fab fa-tripadvisor ml-n1"></i></a>
                        </div>
                        <div class="media-data pt-lg-2">
                            <div class=media-name>
                                Tripadviser
                            </div>
                            <div class="media-no">
                                Rami Tours
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>