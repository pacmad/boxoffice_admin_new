<?php
session_start();
?>

<?php
$_mail=$_POST["pk_email_id"];
$_pass=$_POST["pass"];
if($_mail=="")
{
    echo '<script>';
    echo 'alert("Enter mail Id First")';
    echo '</script>';
}
elseif ($_pass=="") {
    echo '<script>';
    echo 'alert("Enter Passord First")';
    echo '</script>';
    
}
else
{
     
    require 'classdemo.php';
    $obj=new database();
    $result=$obj->login($_mail,$_pass);
    if($result->num_rows===1)
{
    $row=$result->fetch_assoc();
    echo "succ";
    /*if($row["flag_verify"]=="yes")
    {
    if($row["user_type"]==="user" )
    {
       $_SESSION["mail"]=$_mail;
       $_SESSION["pass"]=$_pass;
        header('location:loginmainpage.php');
    }
    else
    {
        $_SESSION["pk_email_id"]=$_mail;
    $_SESSION["Password"]=$_pass;   
        header('location:../boxoffice_admin/movieDb.php');
    }*/
    }
    else
    {
        
        echo '<script>';
        echo 'alert("First Verify Your Account")';
        echo '</script>';
    }
}/*
else
{
    echo '<script>';
    echo 'alert("incorrect Password Or Mail_ID")';
    echo '</script>';
}
}*/
?>