<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dashboard</title>
    <?php include 'blocks/layouts/head-resources.php' ?>
    <?php require_once 'php/connect.php';?>

    <?php
        if (isset($_SESSION['qeema_admin']) && $_SESSION['qeema_admin'] !== '' && $_SESSION['qeema_admin'] !== 'none'){
    ?>
    <?php
    if ($data !== false){
        switch ($data){
            case 2:
                $reply = strip_tags(addslashes($_POST['reply']));
                $i = strip_tags(addslashes($_POST['i']));
                $id = strip_tags(addslashes($_POST['id']));
                $email = strtolower(strip_tags(addslashes($_POST['email'])));

                $row = sel('extra','id LIKE "%@%"');
                $mail = $row[0]['id'];
                $pass = dec($row[0]['link'],$key);

                $face = sel('extra','id="facebook"')[0];
                $what = sel('extra','id="whatsapp"')[0];

                $upd = $con->exec('UPDATE comments SET repl="y" WHERE id="'.$id.'"');

                var_dump($upd);

                require_once 'phpmailer.php';

                header('Location: ?page=2&i='.$i.'&msg='.$msg);
                break;
            case 3:
                $name = strip_tags(addslashes($_POST['name']));
                $details = strip_tags(addslashes($_POST['details']));
                $src = strip_tags(addslashes($_POST['src']));
                $id = strip_tags(addslashes($_POST['id']));

                if ($con->exec('UPDATE images SET ename="'.$name.'", edetails="'.$details.'" WHERE id="'.$id.'"')){
                    $msg = 'Name Updated Successfully';
                }

                if (isset($_FILES['image']['tmp_name']) && $_FILES['image']['tmp_name'] !== ''){
                    $img = $_FILES['image']['tmp_name'];
                    if (move_uploaded_file($img,$src)){
                        $msg .= "<br /> Image Uploaded Successfully";
                    }else{
                        $msg .= "<br /> Image Didn't Upload Successfully";
                    }
                }

                header('Location: ?page=3&msg='.$msg);
                break;

            case 4:
                if (isset($_POST['src']))
                {
                    $name = strip_tags(addslashes($_POST['name']));
                    $pass = enc(strip_tags(addslashes($_POST['password'])),$key);

                    switch ($_POST['src']){
                        case 'upd':
                            $id = strip_tags(addslashes($_POST['id']));

                            $exec = 'UPDATE admins SET email="'.$name.'" , password="'.$pass.'" WHERE id="'.$id.'"';
                            $txt = 'Updated';
                            break;
                        case 'add':
                            $adm = ($_POST['adm'] == 'y')? 'y':'n';

                            $exec = 'INSERT INTO admins (email,password,adm) VALUES("'.$name.'","'.$pass.'","'.$adm.'")';
                            $txt = 'Added';
                            break;
                    }


                    if ($con->exec($exec)){
                        $msg .= 'Admin '.$txt.' Successfully';
                    }else{
                        $msg .= 'Sorry ... Error In Our Side';
                    }
                }

                header('Location: ?page=4&msg='.$msg);
                break;
            case 5:
                $email = strip_tags(addslashes($_POST['email']));
                $pass = enc(strip_tags(addslashes($_POST['pass'])),$key);

                $msg = "Sorry .. There's a Problem Updating Your Data";
                if($con->exec('UPDATE extra SET id="'.$email.'", Link="'.$pass.'" WHERE id LIKE "%@%"')){
                    $msg = 'Yor Data Has Been Updated SuccessFully';
                }

                header('Location: ?page=5&msg='.$msg);
                break;

            case 7:
                $serv = addslashes($_POST['serv']);

                $con->exec('UPDATE extra SET link="'.$serv.'" WHERE id="serv"');

                $msg = 'Service Text Updated Successfully';

                header('Location: ?page=7&msg='.$msg);
                break;

            case 8:
                $image = $_FILES['image']['tmp_name'];
                $src = $_POST['src'];
                $msg = 'Sorry ... We Could Not Change Image';

                if(move_uploaded_file($image,$src)){
                    $msg = 'Image Uploaded Successfully';
                }

                header('Location: ?page=8&msg='.$msg);
                break;
        }
    }
    ?>
</head>
<body>
<?php include 'blocks/layouts/header.php'?>
<?php include 'blocks/main/mobile-menu.php'?>

<div class="row no-gutters">

<?php include 'blocks/main/nav.php'; ?>

<?php

    if($page != 1 && $page <= 8)
    {
        include "page-$page.php";
    }else{
        include "page-1.php";
    }

?>

</div>

        <?php include 'blocks/layouts/footer.php' ?>

        <?php include 'blocks/layouts/foot-resources.php' ?>

<?php
    }else{
        ?>
</head>
    <body>
        <div style="position:fixed; top: 0; left: 0; width: 100%; height: 100%; background: url(assets/images/bg.jpg);">
            <form action="?data=6" method="post" style="    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;">
                <fieldset style="display: flex;
    border: 2px #FF8C07 solid;
    padding: 50px;">
                    <legend style="display: grid;
    justify-content: center;
    align-items: center;"><img src="assets/images/logo.svg" alt="logo" /></legend>
                    <input type="email" name="email" placeholder="Enter Your Name" style="margin: 15px;" required />
                    <input type="password" name="pass" placeholder="Enter Your Password" style="margin: 15px;" required />
                    <input type="submit" value="Sign In" style="    margin: 15px;
    width: 85%;
    background: #FF8C07;
    color: white;" />
                </fieldset>
            </form>
        </div>
    </body>
</html>
<?php
    }
?>
</body>

</html>