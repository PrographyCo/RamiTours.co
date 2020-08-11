    <div class="col pr-2  ml-4 " style="padding-top: 5% ;z-index:2;">
        <div class="d-flex head-page-4">
        <div class="col">
        <h3 class="mt-3 pb-0 mb-0">Admins</h3>
        </div>
        <div class="   mt-2   col-md-5 text-right   ">


            <button class=" w-25  btn btn-light" onclick="return Add()" style="z-index: 99999; cursor: pointer;">Add</button>
        </div>

    </div>


        <hr class="mt-0">
        <div class="containerr p-2" >
            <div class="col-auto  mx-auto mr-1  " >

                            <table class="table ">

                                <tbody class="mx-auto">
                                <?php
                                $limit = (($m - 1 ) * 9) ;
                                
                                $id = $_SESSION['id'];

                                $comd = $con->query('SELECT * FROM admins WHERE id != "'.$id.'" ORDER BY id DESC LIMIT '.$limit.',9')->fetchAll(PDO::FETCH_ASSOC);

                                $n = ((count($con->query('SELECT * FROM admins ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC)) % 9) == 0)? 0 : 1;
                                $pages = intdiv(count($con->query('SELECT * FROM admins ORDER BY id DESC')->fetchAll(PDO::FETCH_ASSOC)) , 9) + $n;

                                if ($m != 1){ $prev = $m-1; }else{ $prev = 1; $pclass= 'disabled'; }
                                if ($m == $pages){$nclass= 'disabled'; }
                                $next = $m+1;

                                $x = 1;

                                foreach ($comd as $row)
                                {
                                    $adm = ($row['adm'] == 'y')? 'checked':'';
                                    $adm2 = ($row['ign'] == 'y')? 'checked':'';

                                    echo '
                               <tr >

                                    <td scope="col-3" class="text-primary font-weight-bold" >E-mail</td>
                                    <td scope="col-3" id="name_'.$row['id'].'">'.$row['email'].'</td>
                                    <td scope="col" class="text-primary font-weight-bold " >Password</td>
                                    <td scope="col-3" id="pass_'.$row['id'].'">'.dec($row['password'],$key).'</td>
                                    <td scope="col" class="text-primary font-weight-bold " >admin</td>
                                    <td scope="col-3"><input type="checkbox" onchange="return ign2('.$row['id'].')" '.$adm.' id="check2_'.$row['id'].'" title="If you want this person to be an admin"  '.(($row['ign'] == 'y')? 'disabled':'').' /></td>
                                    <td scope="col" class="text-primary font-weight-bold " >ignore</td>
                                    <td scope="col-3"><input type="checkbox" onchange="return ignore('.$row['id'].')" '.$adm2.' id="check3_'.$row['id'].'" title="If you want this person to be an deleted" /></td>
                                    <td scope="col-3" class="btn-clients" >
                                        <button type="button" class="btn btn-light  col-12 col-md-10 bg-white text-primary shadow-sm"  name="'.$row['id'].'" '.(($row['ign'] == 'y')? 'disabled':'').'>
                                            <a href="#">Edit</a></button>

                                    </td>
                                </tr>';
                                    $x++;
                                }
                                ?>

                                </tbody>
                            </table>
                        </div>

                </div>
        <div class="counter">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item mx-1 <?= (isset($pclass))? $pclass : ''; ?>"><a class="page-link" href="<?= '?page='.$page.'&i='.$i.'&m='.$prev; ?>" <?= (isset($pclass))? 'tabindex="-1"':''; ?>><i class="fas fa-arrow-left "></i></a></li>
                    <li class="page-item mx-1"><a class="page-link <?= ($m == 1)? 'is-active-li':''; ?>" href="<?= '?page='.$page.'&i='.$i.'&m=1'; ?>">1</a></li>
                    <li class="page-item mx-1"><a class="page-link <?= ($m == 2)? 'is-active-li':''; ?>" href="<?= '?page='.$page.'&i='.$i.'&m=2'; ?>">2</a></li>
                    <li class="page-item mx-1"><a class="page-link <?= ($m == 3)? 'is-active-li':''; ?>" href="<?= '?page='.$page.'&i='.$i.'&m=3'; ?>">3</a></li>
                    <li class="page-item mx-1 <?= (isset($nclass))? $nclass : ''; ?>"><a class="page-link" href="<?= '?page='.$page.'&i='.$i.'&m='.$next; ?>" <?= (isset($nclass))? 'tabindex="-1"':''; ?>><i class="fas fa-arrow-right "></i></a></li>
                </ul>
            </nav>
        </div>


            </div>



        </div>


<div class="square-clients bg-white d-flex mx-auto justify-content-center align-content-center flex-column p-4 mb-2 shadow-lg" style="z-index:8;">
<form action="?data=4" method="post" style=" width: 200% !important;
    left: -50%;
    position: relative;" >

    <div class="row">
        <div class=" col-1 mr-5  text-primary font-weight-bold">Email</div>

        <div class=" col-10"> <input type="email" class="form-control p-0 border-0 ml-2" name="name" placeholder="" required></div>
        <input type="hidden" value="" name="id" />
        <input type="hidden" value="upd" name="src" />

      </div>
    <div class="row  ">
        <div class=" col-1 mr-5  text-primary font-weight-bold"> Password</div>

        <div class=" col-10"> <input type="text" class="form-control p-0 border-0 ml-2" name="password" placeholder="" required></div>
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


<div class="add" style="    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: none;
    justify-content: center;
    align-items: center;
    z-index:8;">

    <div style="    width: 100%;
    height: 50%;
    background: white;
    border-radius: 6px;
    min-width: 1000px; padding-top: 9%;">
        <form enctype="multipart/form-data" action="?data=4" method="post" style="display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;">

            <div class="row" style="width: 90%;">
                <label for="name" class=" col-1  text-primary font-weight-bold">Email</label>
                <input type="email" name="name" placeholder="Enter The Email" class="form-control p-0 border-0 col-10 ml-5 mb-5" required/>
            </div>
            <div class="row" style="width: 90%;">
                <label for="password" class=" col-1  text-primary font-weight-bold">Password</label>
                <input type="text" name="password" placeholder="Enter The Password" class="form-control p-0 border-0 col-10 ml-5 mb-5" required/>
            </div>
            <div class="row" style="width: 90%;" title="If He's an admin then he can add/remove admins and can see and edit the super aadmin details">
                <label for="password" class=" col-10  text-primary font-weight-bold">You Want Him As An Admin</label>
                <div class=" col-2">
                    <input type="radio" name="adm" value="y" required/>yes
                    <input type="radio" name="adm" value="n" required/>no
                </div>
            </div>
            <div class=" row d-flex justify-content-center mt-1 " style="width: 90%;">

                <div class="   mt-1  col">
                    <input type="submit" class=" w-100 btn btn-light  text-white bg-primary" value="Save">
                </div>

            </div>

            <input type="hidden" name="src" value="add" />
        </form>
        <div class="     mt-1 col " style="width: 90% !important;
    left: 5%;">
            <button type="submit" class=" w-100  btn btn-light   bg-white " onclick="document.querySelector('.add').style.display = 'none';">
                Cancel</button>
        </div>
    </div>
</div>