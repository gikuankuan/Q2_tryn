<?php
include "../base.php";
$acc=$_GET['acc'];
$user = new DB('user');
$chk=$user->find(['acc'=>$acc]);

if(!empty($chk)){
    echo 1 ;
}else{
    echo 0;
}

?>