<?php
$conn=new mysqli("localhost","root","","boxoffice");
if($conn->connect_error)
{
    echo "connection failed";
}
$_Language_name="";
 $_pk_Language_id="";
  $_pk_Language_id=$_POST["txtLanguage_id"];
$_Language_name=$_POST["txtLanguage_name"];
$sql="update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
//require '../admin_class.php';
  //    $obj=new movie_booking();
//$result=$obj->updatelanguage($_Language_name);



echo $sql;
 //echo $sql;
if($conn->query($sql)===true){
    
    header('location:languageDb.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{
echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
    echo "unsccessfull";
}

?> 