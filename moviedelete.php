<?php
    $id=$_GET["id"];
    require'admin_class.php';
    $obj=new movie_booking();
    $result=$obj->deleteMovie($id);
    if($result==true)
    {
        header('location:moviedb.php');
    }
    else
    {
        echo "Unsuccessful";
    }
?>
