<?php
    $id=$_GET["id"];
    require'admin_class.php';
    $obj=new movie_booking();
    $result=$obj->deleteScreen($id);
  
    if($result==true)
    {
        header('location:screenDb.php');
    }
    else
    {
        echo "Unsuccessful";
        echo $result;
    }
?>
