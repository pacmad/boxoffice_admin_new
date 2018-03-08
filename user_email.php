<?php

class database
{
    private static $conn=NULL;
    private static function connection()
    {
        self::$conn=mysqli_connect("localhost","root","","boxoffice");
        return self::$conn;
    }
    private static function disconnect()
    {
        self::$conn=mysqli_close();
        self::$conn=null;
    }
      public function change($_oldpass,$_newpass,$_eml)
    {
        $conn=database::connection();
        $sql="select * from user where eml='".$_eml."' and password='".$_oldpass."' ";
        $res=$conn->query($sql);
        if($res->num_rows==1)
        {
            $sql="update user set password='".$_newpass."' where eml='".$_eml."' ";
            $res=$conn->query($sql);
              return $res;
        }
        else
        {
            echo "username and password is incorrect";
        }

    }
   
     public function forgetpassword($_eml)
    {
        $conn=database::connection();    
        
   
   
    $sql="select * from customer_tbl where pk_email_id='".$_eml."'";
    $res=$conn->query($sql);

    
    if($res->num_rows==1)
    {
        $row=$res->fetch_assoc();
        $password=$row["Password"];
        $flag=1;
        return $password;
        echo $password;
    }
    else
    {
        return "your account is invalid";
    }
}
}
?>