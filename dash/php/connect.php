<?php

session_start();

include "encrypt.php";

if (isset($_SESSION['qeema_admin']) && $_SESSION['qeema_admin'] == 'admin'){
    $page = (isset($_GET['page']))? strip_tags(addslashes($_GET['page'])) : 1;
}else{
    $page = (isset($_GET['page']) && $_GET['page'] != 4 && $_GET['page'] != 5 && $_GET['page'] != 7 )? strip_tags(addslashes($_GET['page'])) : 1;
}

$i = (isset($_GET['i']))? strip_tags(addslashes($_GET['i'])) : 1;
$m = (isset($_GET['m']))? strip_tags(addslashes($_GET['m'])) : 1;
$data = (isset($_GET['data']))? strip_tags(addslashes($_GET['data'])) : false;
$msg = (isset($_GET['msg']))? strip_tags(addslashes($_GET['msg'])) : '';


$host = 'business29.web-hosting.com';
$dbname = 'progwlfo_ramitours_2164956';
$user = 'progwlfo_ramitours';
$pass = 'RAmiTourS31.156PQ';

$con = new PDO('mysql://hostname='.$host.';charset=utf8;dbname='.$dbname.';',$user,$pass);

function sel($table, $cond = '1=1'){
    global $con;

    $sel = $con->query('SELECT * FROM '.$table.' WHERE '.$cond);
    return $sel->fetchAll(PDO::FETCH_ASSOC);
}

if (isset($data) && $data == 6){

    $email = strip_tags(addslashes($_POST['email']));
    $pass = strip_tags(addslashes($_POST['pass']));

    $rows = sel('extra','id LIKE "%@%"');
    if ($email == $rows[0]['id']){
        if ($pass == dec($rows[0]['link'],$key)){
            $_SESSION['qeema_admin'] = 'admin';
            $_SESSION['boos'] = 'y';
            
            $_SESSION['id'] = 0;
            header('Location: ?page=1');
        }
    }else{
        $rows = sel('admins','1=1');
        foreach ($rows as $row){
            if ($email == $row['email']){
                if ($pass == dec($row['password'],$key)){
                    if ($row['adm'] == "y"){
                        $_SESSION['qeema_admin'] = 'admin';
                        $_SESSION['boos'] = 'n';
                        
                        $_SESSION['id'] = $row['id'];
                    }else{
                        $_SESSION['qeema_admin'] = 'seller';
                        $_SESSION['boos'] = 'n';
                        
                        $_SESSION['id'] = 0;
                    }
//                    header('Location: ?');
                }
            }
        }
    }
}

if (isset($data) && $data == 15){
    $_SESSION['qeema_admin'] = '';
}