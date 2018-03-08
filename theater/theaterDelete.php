<?php
    $id=$_GET["id"];
    require'../admin_class.php';
    $obj=new movie_booking();
    
    $result=$obj->deleteTheater($id);
    if($result==true)
    {
        header('location:theaterDb.php');
    }
    else
    {
        echo "Unsuccessful";
    }
?>
