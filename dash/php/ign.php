<?php

require_once 'connect.php';

$ign = strip_tags(addslashes($_POST['ign']));
$id = strip_tags(addslashes($_POST['id']));
$img = strip_tags(addslashes($_POST['img']));

$msg = ($ign == 'n')? 'Ignored':'Shown';

$res = count($con->query('SELECT * FROM comments WHERE star="y" AND img="'.$img.'"')->fetchAll());

if ($res < 2){
    if($con->exec('UPDATE comments SET star="'.$ign.'" WHERE id="'.$id.'"')){
        echo 'This Comment Will Be '.$msg;
    }else{
        echo 'Sorry ... Error Accured';
    }
}else{
    if ($ign == 'n'){
        if($con->exec('UPDATE comments SET star="'.$ign.'" WHERE id="'.$id.'"')){
            echo 'This Comment Will Be '.$msg;
        }else{
            echo 'Sorry ... Error Accured';
        }
    }else{
        echo 'There is 2 comments selected';
    }
}