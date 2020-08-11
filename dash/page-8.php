    <div class="col pr-2  ml-4 " style="padding-top: 5% ;">
        <h3 class="mt-3 pb-0 mb-0">Homepage</h3>
        <hr class="mt-0">
        <div class="containerr p-2" >
            <div class="col-auto  mx-auto mr-1  " >

                <div class="row mt-2 " >
                    <div class=" col col-md-1 text-primary font-weight-bold">First Page</div>
                    <div class=" col col-md-2"></div>
                    <div class=" col col-md-1 text-primary font-weight-bold"></div>
                    <div class=" col col-md-2"></div>
                    <input type="hidden" name="imgSrc_1" value="/assets/images/s6.jpg" />
                    <div class=" col col-md-2 text-center text-primary font-weight-bold"></div>
                    <div class="col col-md"></div>
                    <div class=" col col-md-2 text-right mt-1">
                        <button type="button" class="btn btn-light col-12 col-md-8 bg-white text-primary shadow-sm edit" name="1">
                            <a href="#">Edit</a></button>
                    </div>
                </div>
                <div class="row mt-2 " >
                    <div class=" col col-md-1 text-primary font-weight-bold">Second Page</div>
                    <div class=" col col-md-2"></div>
                    <div class=" col col-md-1 text-primary font-weight-bold"></div>
                    <div class=" col col-md-2"></div>
                    <input type="hidden" name="imgSrc_2" value="/assets/images/s2.jpg" />
                    <div class=" col col-md-2 text-center text-primary font-weight-bold"></div>
                    <div class="col col-md"></div>
                    <div class=" col col-md-2 text-right mt-1">
                        <button type="button" class="btn btn-light col-12 col-md-8 bg-white text-primary shadow-sm edit" name="2">
                            <a href="#">Edit</a></button>
                    </div>
                </div>
                <div class="row mt-2 " >
                    <div class=" col col-md-1 text-primary font-weight-bold">Third Page</div>
                    <div class=" col col-md-2"></div>
                    <div class=" col col-md-1 text-primary font-weight-bold"></div>
                    <div class=" col col-md-2"></div>
                    <input type="hidden" name="imgSrc_3" value="/assets/images/s3.jpg" />
                    <div class=" col col-md-2 text-center text-primary font-weight-bold"></div>
                    <div class="col col-md"></div>
                    <div class=" col col-md-2 text-right mt-1">
                        <button type="button" class="btn btn-light col-12 col-md-8 bg-white text-primary shadow-sm edit" name="3">
                            <a href="#">Edit</a></button>
                    </div>
                </div>

            </div>

                </div>


            </div>



        </div>


<div class="square bg-white d-flex mx-auto justify-content-center align-content-center flex-column p-4 mb-2 shadow-lg" style="z-index:8;">
    <form action="?data=8" method="post" enctype="multipart/form-data" style="min-width: 800px;
    display: flex;
    flex-direction: column;">

    <div class="row mt-1 ">
        <div class=" col-1  text-primary font-weight-bold"></div>
        <div class=" col mt-n2"></div>
        <div class=" col  text-right text-primary font-weight-bold"></div>
        <div class="col  text-center  mt-n2 "></div>
        <input type="hidden" name="id" value="" />
        <input type="hidden" name="src" value="" />
        <div class=" col  text-right text-primary font-weight-bold"></div>
        <div class=" col col-md-2 mt-n1 text-right "></div>
    </div>
    <div class=" img-true mx-auto  pt-2 pb-2   ">
        <div class="img-client">
            <img src="assets/images/proto.svg" alt="" class="img-fluid  " id="dest_img" style="max-height: 420px ; max-width: 100% ">
            <input type="file" name="image" class="custom-file-input  input-img" id="validatedCustomFile" accept=".jpg" style="cursor:pointer; min-height: 100%; max-width: 100%;">
        </div>
    </div>



    <div class=" row d-flex justify-content-center mt-1 ">


        <div class="   mt-1  col ">
                <input type="submit" class=" w-100 btn btn-light  text-white bg-primary" value="Save">
        </div>

    </div>
    </form>
    <div class="     mt-1 col ">
        <button class=" w-100  btn btn-light   bg-white " onclick="$('body').toggleClass('square-active')">Cancel</button>
    </div>
    </div>