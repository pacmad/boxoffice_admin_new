
<?php

            $_pk_theater_id="";
            $_theater_name="";
            $_theater_add="";
            $_No_of_screen="";

            $_pk_theater_id=$_POST["txtpk_theater_id"];
            $_theater_name=$_POST["txttheater_name"];
            $_theater_add=$_POST["txttheater_add"];
            
            $_No_of_screen=$_POST["txtNo_of_screen"];
          
            require '../admin_class.php';
            $obj=new movie_booking();
            $result=$obj->updateTheater1($_pk_theater_id,$_theater_name,$_theater_add,$_No_of_screen);
               
            if($result===true)
            {
                    echo "Record Successfully inserted";
                    header('location:theaterDb.php');
            }
             else
             {
                    echo "Unsuccessful";
             }
?>