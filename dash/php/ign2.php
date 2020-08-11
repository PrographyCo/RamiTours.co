<?php

require_once 'connect.php';

$ign = strip_tags(addslashes($_POST['ign']));
$id = strip_tags(addslashes($_POST['id']));

$msg = ($ign == 'n')? 'Seller':'Admin';

    if($con->exec('UPDATE admins SET adm="'.$ign.'" WHERE id="'.$id.'"')){
        echo 'This Employee Will Be '.$msg;
    }else{
        echo 'Sorry ... Error Accured';
    }