<?php
$conn=new mysqli("localhost","root","","boxoffice");
if($conn->connect_error)
{
    echo "connection failed";
}
$_fk_Movie_id="";
      $_fk_theater_id="";
      $_Start_time="";
      $_Date="";
      $_Price="";
      $_fk_Screen_id="";
      $_pk_Show_id="";
$_pk_Show_id=$_POST["txtshow_id"];
$_fk_Movie_id=$_POST["txtmovie_id"];
      $_fk_theater_id=$_POST["txttheatre_id"];
      $_Start_time=$_POST["txtstart_time"];
      $_Date=$_POST["txtdate"];
      $_Price=$_POST["txtprice"];
      $_fk_Screen_id=$_POST["txtscreen_id"];
      $sql="update show_tbl set fk_Movie_id='". $_fk_Movie_id  ."',fk_theater_id='". $_fk_theater_id  ."',Start_time='". $_Start_time  ."',Date='". $_Date ."',Price='". $_Price  ."' where pk_Show_id='".   $_pk_Show_id."' ";
echo $sql;
if($conn->query($sql)===true){
    
    header('location:showDb.php');
   
}
else
{

    echo "unsccessfull";
}

?> 
