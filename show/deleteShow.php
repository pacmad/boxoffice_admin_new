<?php
    $id=$_GET["id"];
    require'../admin_class.php';
    $obj=new movie_booking();
    $result=$obj->deleteShow($id);
    if($result==true)
    {
        header('location:showDb.php');
    }
    else
    {
        echo "Unsuccessful";
    }
?>
