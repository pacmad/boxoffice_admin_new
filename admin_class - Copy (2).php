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
        $sql="select m.*,l.* from movie_tbl m,language_tbl l where m.fk_Language_id=l.pk_Language_id";
        $result=$con->query($sql);
        return $result;
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
     public function deleteShow($id)
    {
        $con=movie_booking::connect();
        $result=$con->query("delete from show_tbl where pk_Show_id=".$id);       
        return $result;
    }
 

}