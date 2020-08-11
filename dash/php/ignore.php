<?php

require_once 'connect.php';

$ign = strip_tags(addslashes($_POST['ign']));
$id = strip_tags(addslashes($_POST['id']));

$msg = ($ign == 'y')? 'Not Allowed':'Allowed';

    if($con->exec('UPDATE admins SET ign="'.$ign.'" WHERE id="'.$id.'"')){
        echo 'This Employee Will Be '.$msg.' To Be here again';
    }else{
        echo 'Sorry ... Error Accured';
    }