<?php
$conn=new mysqli("localhost","root","","boxoffice");
if($conn->connect_error)
{
    echo "connection failed";
}
$_Movie_name="";
 //     echo $_Movie_name;
      $_Director="";
      $_Img_path="";
      $_Producer="";
      $_Cast="";
      $_Duration="";
      $_Story="";
      $_Type="";
      $_fk_Language_id="";
      $_Rating="";
$_pk_Movie_id="";
$_pk_Movie_id=$_POST["txtpk_Movie_id"];
$_Movie_name=$_POST["txtMovie_name"];
      $_Director=$_POST["txtDirector"];
      $_Img_path=$_POST["txtImg_path"];
      $_Producer=$_POST["txtProducer"];
      $_Cast=$_POST["txtCast"];
      $_Duration=$_POST["txtDuration"];
      $_Story=$_POST["txtStory"];
      $_Type=$_POST["txtType"];
      $_fk_Language_id=$_POST["txtfk_Language_id"];
      $_Rating=$_POST["txtRating"];
$sql="update movie_tbl set Movie_name='". $_Movie_name  ."',Director='". $_Director  ."',Img_path='". $_Img_path  ."',Producer='". $_Producer ."',Cast='". $_Cast  ."',Duration='". $_Duration  ."',Story='". $_Story  ."',Type='". $_Type  ."',fk_Language_id='". $_fk_Language_id  ."',Rating='". $_Rating  ."' where pk_Movie_id='".   $_pk_Movie_id."' ";
echo $sql;
if($conn->query($sql)===true){
    
    header('location:movieDb.php');
    //echo "update language_tbl set Language_name='". $_Language_name  ."' where pk_Language_id='".   $_pk_Language_id."' ";
}
else
{

    echo "unsccessfull";
}

?> 