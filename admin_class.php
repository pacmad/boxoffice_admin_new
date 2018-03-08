<?php
class movie_booking
{
    private static $con = null;
    public static function connect()
    {
        self::$con=mysqli_connect("localhost","root","","boxoffice");
        return self::$con;
    }

     public static function disconnect()
    {
        self::$con=mysqli_disconnect();
        self::$con=null;
    }
    public function getAllMovie()
    {
        $con=movie_booking::connect();
      //$sql="select * movie_tbl"; 
        $sql="select m.*,l.* from movie_tbl m,language_tbl l where m.fk_Language_id=l.pk_Language_id";
        $result=$con->query($sql);
        return $result;
    }
     
   
    public function  moviedeleteall($x)
   
    {
         $con=movie_booking::connect();
        $sql="delete from movie_tbl where  pk_Movie_id In ($x)";
        
         $res=$con->query($sql);
         return $res;
    }
     public function deleteMovie($id)
    {
        $con=movie_booking::connect();
         $sql="select * from movie_tbl where pk_Movie_id='". $id ."'";
       
        $res=$con->query($sql);
        $row=$res->fetch_assoc();
        if($row["Img_path"]!="")
        {
            unlink($row["Img_path"]);
        }

        $result=$con->query("delete from movie_tbl where pk_Movie_id=".$id);       
        return $result;
         

    }
    public function addMovie($_pk_Movie_id,$_Movie_name,$_Director,$_Img_path,$_Producer,$_Cast,$_Duration,$_Story,$_Type,$_fk_Language_id,$_Rating)
    {
        $con=movie_booking::connect();
        $result=$con->query("insert into movie_tbl values('". $_pk_Movie_id ."','". $_Movie_name ."','". $_Director ."','". $_Img_path ."','". $_Producer ."','". $_Cast ."','". $_Duration ."','". $_Story ."','". $_Type ."','". $_fk_Language_id ."','". $_Rating ."')");
       
        return $result;
        
    } 
     public function getAllScreen()
    {
        $con=movie_booking::connect();
        $sql="select * from screen_tbl";
        $result=$con->query($sql);
        return $result;
    }
   public function deleteScreen($id)
    {
        $con=movie_booking::connect();
        $result=$con->query("delete from screen_tbl where pk_Screen_id=".$id);       
        return $result;
    }
    
    public function  screendeleteall($x)
   
    {
         $con=movie_booking::connect();
        $sql="delete from screen_tbl where  pk_Screen_id In ($x)";
        
         $res=$con->query($sql);
         return $res;
    }
       public function addScreen($_pk_Screen_id,$_capacity)
    {
        $con=movie_booking::connect();
        $result=$con->query("insert into screen_tbl values('". $_pk_Screen_id ."','". $_capacity ."')");
       
        return $result;
        
    } 
     public function getAllLanguage()
    {
        $con=movie_booking::connect();
        $sql="select * from language_tbl";
        $result=$con->query($sql);
        return $result;
    }
    public function landeleteall($x)
    {
         $con=movie_booking::connect();
        $sql="delete from language_tbl where pk_Language_id In ($x)";
        
         $res=$con->query($sql);
         return $res;
    }
       public function addLanguage($_pk_Language_id,$_Language_name)
    {
        $con=movie_booking::connect();
        $result=$con->query("insert into language_tbl values('". $_pk_Language_id ."','". $_Language_name ."')");
       
        return $result;
        
    } 
   public function deleteLanguage($id)
    {
        $con=movie_booking::connect();
        $result=$con->query("delete from language_tbl where pk_Language_id=".$id);       
        return $result;
    }
     public function getAllTheater()
    {
        $con=movie_booking::connect();
        $sql="select * from theater_tbl";
        $result=$con->query($sql);
        return $result;
    }
       public function addTheater($_pk_theater_id,$_theater_name,$_theater_add,$_No_of_screen)
    {
        $con=movie_booking::connect();
        $result=$con->query("insert into theater_tbl values('". $_pk_theater_id ."','". $_theater_name ."','". $_theater_add ."','". $_No_of_screen ."')");
       
        return $result;
        
    } 
    
   public function thedeleteall($x)
   
    {
         $con=movie_booking::connect();
        $sql="delete from theater_tbl where pk_theater_id In ($x)";
        
         $res=$con->query($sql);
         return $res;
    }
  
   public function deleteTheater($id)
    {
        $con=movie_booking::connect();
        $result=$con->query("delete from theater_tbl where pk_theater_id=".$id);       
        return $result;
    }
    public function updateTheater($_pk_theater_id)
    {
         $con=movie_booking::connect();
         $result=$con->query("select * from theater_tbl where pk_theater_id=".$_pk_theater_id);
         return $result;

    }
    public function updateTheater1($_pk_theater_id,$_theater_name,$_theater_add,$_No_of_screen)
    {
             $con=movie_booking::connect();
             $result=$con->query("update theater_tbl set theater_name='". $_theater_name ."',theater_add='". $_theater_add ."',No_of_screen='". $_No_of_screen ."' where pk_theater_id='". $_pk_theater_id ."'");

             return $result;
             echo $result;
    }
      public function getAllShow()
    {
        $con=movie_booking::connect();
        $sql="select show_tbl .*, movie_tbl.*, theater_tbl.*, screen_tbl.*  FROM (((show_tbl JOIN movie_tbl ON show_tbl.fk_Movie_id=movie_tbl.pk_Movie_id) JOIN	theater_tbl ON show_tbl.fk_theater_id=theater_tbl.pk_theater_id) JOIN screen_tbl ON show_tbl.fk_Screen_id=screen_tbl.pk_Screen_id)";
        $result=$con->query($sql);
        return $result;
    }
    public function addshow($_Movie_name,$_Img_pat,$_theater_name,$_theater_add,$_Start_time,$_Date,$_Price,$_fk_Screen_id)
    {
       $con=movie_booking::connect();
        $result=$con->query("insert into show_tbl values('". $_Movie_name ."','". $_Img_pat ."','". $_theater_name ."',,'". $_theater_add ."','". $_Start_time ."','". $_Date ."','". $_Price ."','". $_fk_Screen_id ."'");
       
        return $result;
         
    } 
     public function deleteShow($id)
    {
        $con=movie_booking::connect();
        $result=$con->query("delete from show_tbl where pk_Show_id=".$id);       
        return $result;
    }
    public function  showdeleteall($x)
   0
    {
         $con=movie_booking::connect();
        $sql="delete from  show_tbl where pk_Show_id In ($x)";
        
         $res=$con->query($sql);
         return $res;
    }
	public function getAllbook()
    {
        $con=movie_booking::connect();
        $sql="select * from book_tbl";
      //  $sql="select book_tbl .*, show_tbl.*, movie_tbl.*, theater_tbl.*  FROM (((show_tbl JOIN movie_tbl ON show_tbl.fk_Movie_id=movie_tbl.pk_Movie_id) JOIN	theater_tbl ON show_tbl.fk_theater_id=theater_tbl.pk_theater_id) JOIN screen_tbl ON show_tbl.fk_Screen_id=screen_tbl.pk_Screen_id)";
        $result=$con->query($sql);
        return $result;
    }
     public function getAllpayment()
    {
        $con=movie_booking::connect();
        $sql="select * from payment_tbl";
      
        $result=$con->query($sql);
        return $result;
    }
    public function getAlluser()
    {
        $con=movie_booking::connect();
        $sql="select * from customer_tbl";
      
        $result=$con->query($sql);
        return $result;
    }
    
 

 
}
    class user_login
{
    private static $conn=null;
    
    public static function connect()
    {
        self::$conn=mysqli_connect('localhost','root','','boxoffice');
        return self::$conn;
    }
     /*   public function getuser($id,$ps)
    {
                $conn=user_login::connect();
                $sql="select * from customer_tbl where pk_email_id= '". $id ."' and Password= '". $_ps ."' ";
                $res=$conn->query($sql);
                return $res;
                login1::disconnect();
    }*/
    public function getuser()
    {
        $conn=user_login::connect();
        $id=$_SESSION["userid"];
        $conn=new mysqli('localhost','root','','project_db');
        $sql="select * from customer_tbl where pk_email_id='".$id."'";
        $res=$conn->query($sql);
        return $res;
        user_login::disconnect();
    }
    
}
   
