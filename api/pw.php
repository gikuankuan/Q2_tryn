<?php
include "../base.php";
$acc=$_GET['acc'];
$pw =$_GET['pw'];
$user = new DB('user');
$chk=$user->find(['acc'=>$acc,'pw'=>$pw]);

if(!empty($chk)){
    echo 1 ;
    $_SESSION['login']=$acc;
}else{
    echo 0;
}

?>