<div class="col pr-2  ml-4 " style="padding-top: 5% ;">
    <div class="d-flex head-page-4">
        <div class="col">
            <h3 class="mt-3 pb-0 mb-0">Emailing</h3>
        </div>
    </div>


    <hr class="mt-0">
    <div class="containerr p-2" >
        <div class="col-auto  mx-auto mr-1  " >

            <table class="table ">

                <tbody class="mx-auto">
                <?php
                $row = sel('extra','id LIKE "%@%"');

                    echo '
                               <tr >

                                    <td scope="col-3" class="text-primary font-weight-bold" >Email</td>
                                    <td scope="col-3">'.$row[0]['id'].'</td>
                                    <td scope="col" class="text-primary font-weight-bold " >Password
                                        <div class="form-check form-check-inline" style="margin-left: 10px ">
                                            ........
                                        </div>
                                    </td>
                                    <td scope="col-3"  ></td>
                                    <td scope="col-3" class="btn-clients" >
                                        <button type="button" class="btn btn-light  col-12 col-md-10 bg-white text-primary shadow-sm" >
                                            <a href="#">Edit</a></button>
                                    </td>
                                </tr>';

                ?>

                </tbody>
            </table>
        </div>

    </div>


</div>



<div class="square-clients bg-white d-flex mx-auto justify-content-center align-content-center flex-column p-4 mb-2 shadow-lg" style="z-index:8;">
    <form action="?data=5" method="post" style="width: 100%;
    min-width: 850px;
    display: grid;
    align-items: center;">
        <div class="row  ">
            <div class=" col-3  text-primary font-weight-bold">Email</div>

            <div class=" col-8 ml-1 mt-n2"> <input type="text" class="form-control p-0 border-0 " name="email" value="<?= $row[0]['id'] ?>"></div>

        </div>

        <div class="row  ">
            <div class=" col-3  text-primary font-weight-bold">Password</div>

            <div class=" col-8 ml-1 mt-n2"> <input type="text" class="form-control p-0 border-0 " name="pass" value="<?= dec($row[0]['link'],$key) ?>"></div>

        </div>



        <div class=" row d-flex justify-content-center mt-1 ">

            <div class="   mt-1  col">
                <input type="submit" class=" w-100 btn btn-light  text-white bg-primary" value="Save">
            </div>

        </div>
    </form>
    <div class="     mt-1 col ">
        <button type="submit" class=" w-100  btn btn-light   bg-white " onclick="$('body').toggleClass('square-clients-active');">
            Cancel</button>
    </div>
</div>