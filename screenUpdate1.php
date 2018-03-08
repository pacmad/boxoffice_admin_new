<?php
$conn=new mysqli("localhost","root","","boxoffice");
if($conn->connect_error)
{
    echo "connection failed";
}
  $_pk_Screen_id="";
      $_capacity="";
    $_pk_Screen_id=$_POST["txtpk_screen_id"];
$_capacity=$_POST["txtcapacity"];
      
$sql="update screen_tbl set capacity='". $_capacity."' where pk_Screen_id='".   $_pk_Screen_id."' ";
echo $sql;
if($conn->query($sql)===true){
    
    header('location:scdb.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 