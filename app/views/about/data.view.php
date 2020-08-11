<div class=" aboutus aboutus-explain ">

    <div class="container">

        <div class="row d-flex justify-content-center  align-items-center  pb-5 pb-md-0 m-0">
            <div class="col-12 box1 col-lg-5">
                <div class="row">
                    <div class="page-title  col ">
                        <h1>
                            <?= $about; ?>
                        </h1>
                    </div>
                    <div class="comment col">
                        <h5 class="" style="line-height: 2">
                            <?= $vc; ?>
                        </h5>
                    </div>

                </div>
                <div class="box-comment">
                    <div class="row p-3">
                        <?php
                            foreach ($comments as $comment){
                                ?>
                                <div class="col p-1 m-1" style="border: 2px solid #FFFFFF;border-radius: 5px; overflow-wrap:break-word; word-break:break-word; height:230px; overflow-y:hidden; ">
                                    <p>
                                       <?= $comment->comment; ?>
                                    </p>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>




                <div class="form  mb-md-0">
                    <form class="container w-100  " action="/about/add" method="post">

                        <div class="row">
                            <div class=" col-12 col-md-6 p-1">
                                <input maxlength="30" type="text" class="form-control form-control-lg  bg-transparent" id="name" placeholder="<?= $name; ?>" name="name" style="font-size: 90%;border-width: 2px; color: white; " required>

                                <input type="hidden" name="id" value="<?= $img ?>" />

                                <input maxlength="30" type="email" class="form-control form-control-lg bg-transparent mt-2 " id="email" placeholder="<?= $email; ?>" name="email" style="font-size: 90%;border-width: 2px; color: white;" required>
                            </div>



                            <div class=" col-12 col-md-6 p-1 mb-n2 mb-md-0 ">
                                <div class="form-group">
                                    <textarea maxlength="180" class="form-control form-control-lg bg-transparent" id="exampleFormControlTextarea1" placeholder="<?= $message; ?>" rows="3" style="color: white; font-size: 94%;border-width: 2px" name="comment" required></textarea>
                                </div>
                            </div>
                            <div class=" col-auto col-md-6 d-flex mt-md-1 p-0">
                                <pictute><img src="<?= IMG ?>error.svg" class="img-fluid" style="max-width: 21px" alt=""></pictute>
                                <span class="text-primary " style="font-size: 90% ;line-height: 2.3"><?= $require; ?></span>
                            </div>
                            <div class=" col-12 col-md-6 d-flex justify-content-end mb-4 mt-1 mt-md-0 p-1 ">
                                <button type="submit" class="btn btn-outline col-12 col-md-5 animated tada delay-2ms  " style="background-color: #9169DB">
                                    <a href="" class="text-white"><?= $send; ?></a></button>
                            </div>

                        </div>


                    </form> </div>




            </div>
            <div class=" about-img col-12 col-lg-7 p-4 p-lg-0 m-0">

                <div style="border-radius: 6px; border: .5px solid #919191; display: flex; justify-content: center;">
                    <pictute style="width: 100%;height: 100%;display: grid;justify-content: center;grid-template-columns: 100%;" >
                        <img style="width: 100%;" src="<?= $image->img; ?>" alt="<?= $image->ename ?>" title="<?= $image->ename ?>" class="img-fluid animated jackInTheBox delay-.2ms about-img">
                    </pictute>

                </div>
                <div class="fav-btn">
                    <span href="" class="favme dashicons dashicons-heart"><i class="fas fa-heart "></i></span>
                </div>


            </div>
        </div>

    </div>


    <!--        <div class=" copy m-auto text-center text-white pt-4 ">-->
    <!--            Copyright &copy; All rights reserved, <a href="https://try.prography.co/prography/ " class="text-white">Prography</a>-->
    <!--            <span id="year"></span>-->
    <!--            with Apex lions-->
    <!--        </div>-->

</div>