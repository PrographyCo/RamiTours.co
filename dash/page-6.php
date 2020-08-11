<?php

$search = strip_tags(addslashes($_GET['search']));

$usr = $con->prepare ('SELECT * FROM users WHERE email LIKE "%'.$search.'%" OR name LIKE "%'.$search.'%"');
$usr->execute();

$client = $con->prepare ('SELECT * FROM admins WHERE email LIKE "%'.$search.'%"');
$client->execute();

?>

<div class="col pr-2  ml-4 " style="padding-top: 5% ;">
    <div class="d-flex head-page-4">
        <div class="col">
            <h3 class="mt-3 pb-0 mb-0">Search Results</h3>
        </div>
    </div>


    <hr class="mt-0">
    <div class="containerr p-2" >
        <div class="col-auto  mx-auto mr-1  " >

            <table class="table ">

                <tbody class="mx-auto">
                <?php
                $massn = 0;
                
                $users = $usr->fetchAll(PDO::FETCH_ASSOC);

                foreach ($users as $user){

                    $mass = $con->prepare('SELECT * FROM comments WHERE userId="'.$user['id'].'"');
                    $mass->execute();

                    if ($mass->rowCount() !== 0){
                        $x = 1;
                        while ($row = $mass->fetch(PDO::FETCH_ASSOC)){
                            $user = sel('users','id = "'.$row['userId'].'"');
                            $checked2 = ($row['star'] !== 'y')? '' : 'checked';

                            echo '
                        <tr >

                        <td scope="col" class="text-primary font-weight-bold"> Name</td>
                        <td scope="col">'.$user[0]['name'].'</td>
                        <td scope="col" class="text-primary font-weight-bold">Comment</td>
                        <td scope="col" >'.$row['comment'].'</td>
                        <td scope="col" class="text-primary font-weight-bold">Email</td>
                        <td scope="col" class="email_'.$x.'">'.$user[0]['email'].'</td>
                        <td scope="col-3"  ><input type="checkbox" onchange="return ign('.$row['id'].')" '.$checked2.' id="check'.$row['id'].'" /></td>

                        <td scope="col-3 bg-white " class="btn-replay" >
                            <button type="button" class="btn btn-light col-12 bg-white  shadow-sm" name="'.$x.'">
                                <a href="#">Replay</a></button>

                        </td>
                    </tr>';

                            $massn++;
                            $x++;
                        }

                    }
                }

                if ($client->rowCount() !== 0){
                    while ($row = $client->fetch(PDO::FETCH_ASSOC)){
                        $adm = ($row['adm'] == 'y')? 'checked':'';
                        echo '
                               <tr >

                                    <td scope="col-3" class="text-primary font-weight-bold" > Name</td>
                                    <td scope="col-3" id="name_'.$row['id'].'">'.$row['email'].'</td>
                                    <td scope="col" class="text-primary font-weight-bold " >Password</td>
                                    <td scope="col-3" id="pass_'.$row['id'].'">'.dec($row['password'],$key).'</td>
                                    <td scope="col-3"><input type="checkbox" onchange="return ign2('.$row['id'].')" '.$adm.' id="check2_'.$row['id'].'" /></td>
                                    <td scope="col-3" class="btn-clients" >
                                        <button type="button" class="btn btn-light  col-12 col-md-10 bg-white text-primary shadow-sm"  name="'.$row['id'].'">
                                            <a href="#">Edit</a></button>

                                    </td>
                                </tr>';
                    }
                }

                ?>

                </tbody>
            </table>
        </div>

    </div>


</div>

<?php
    if ($massn !== 0){
        echo '<form action="?data=2" method="post" style="z-index:8;" class="btn-replay" enctype="multipart/form-data">
                <div class="replay bg-white d-flex mx-auto justify-content-center align-content-center flex-column p-4 mb-2 shadow-lg" style="border-radius: 10px" >
        <div class=" p-1" style="background-color: #F7F8F9; border-radius: 4px">
            <textarea name="reply" class="w-100 bg-transparent border-0 " id="" cols="" rows="8" placeholder="Write Your Reply Here" required></textarea>
            <input type="hidden" name="email" value="" />
            <input type="hidden" name="i" value="<?= $i; ?>" />
        </div>
    <div class="  d-flex justify-content-center mt-1 w-100   btn-blue shadow-sm mt-1 ">
        <input type="submit" class="  w-100 btn btn-light  text-white bg-primary" value="Replay">
    </div>
</div>
    </form>';
    }

    if ($client->rowCount() !== 0){
        echo '<div class="square-clients bg-white d-flex mx-auto justify-content-center align-content-center flex-column p-4 mb-2 shadow-lg" style="z-index:8;">
<form action="?data=4" method="post" style=" width: 200% !important;
    left: -50%;
    position: relative;" >

    <div class="row">
        <div class=" col-1 mr-5  text-primary font-weight-bold"> Name</div>

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
            <button type="submit" class=" w-100  btn btn-light   bg-white " onclick="$(\'body\').toggleClass(\'square-clients-active\');">
                Cancel</button>
    </div>
</div>';
    }
?>