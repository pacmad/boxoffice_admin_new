<?php
    $id=$_GET["id"];
    require'../admin_class.php';
    $obj=new movie_booking();
    $result=$obj->deleteLanguage($id);
    if($result==true)
    {
        header('location:languageDb.php');
    }
    else
    {
        echo "Unsuccessful";
    }
?>
