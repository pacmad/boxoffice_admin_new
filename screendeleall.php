<?php

$x=implode(",",$_POST["chk"]);
require 'admin_class.php';
    $obj=new movie_booking();
$result=$obj->screendeleteall($x);
header('location:screenDb.php');
?>