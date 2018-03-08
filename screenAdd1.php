    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
       $con = new mysqli("localhost","root","","boxoffice");
        if($con->connect_error)
        {
            echo "something went wrong";
        }
      $_pk_Screen_id=$_POST["txtpk_Screen_id"];
     
      $_capacity=$_POST["txtcapacity"];
    
            
      
      require 'admin_class.php';
      $obj=new movie_booking();
      $res=$obj->addScreen($_pk_Screen_id,$_capacity);
      echo $res;
      
      if($res===true)
      {
          header('location:screenDb.php');
      }
      else
      {
          echo "Unsuccessful";
          
      }
    }
      ?>