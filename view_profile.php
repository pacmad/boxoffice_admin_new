<?php
session_start();

?>
<?php

$_pk_email_id=$_SESSION["pk_email_id"];
$conn=new mysqli("localhost","root","","boxoffice");
    $sql="select * from customer_tbl where pk_email_id='". $_pk_email_id ."'";
    $result=$conn->query($sql);
 

		while($row=$result->fetch_assoc())
		{
 echo '<div class="row">';
    echo '<div class="span3" >';
   echo '<center><img src="'.$row["User_img"].'" style="height:400px;width:450px;" class="img-thumbnail"></center><br><br><br>';
    echo '</div>';
    echo '<div class="span6">';
     echo '<h2>Name : '.$row["User_name"].'</h2><br>';
       echo '<h2>First_name : '.$row["Fname"].'</h2><br>';
    echo '<h2>Last name : '.$row["Lname"].'</h2><br>';
    echo '<h2>Gender : '.$row["Gender"].'</h2><br>';
    echo '<h2>Address : '.$row["Address"].'</h2><br>';
     echo '<h2>Pincode : '.$row["Pincode"].'</h2><br>';
    echo '<h2>Address : '.$row["Mobile_no"].'</h2><br>';
    echo '<h2>Birth Date : '.$row["Bdate"].'</h2><br>';
    
   
     echo '</div>';
      echo '</div>';
		}
		?>		
			  </ul>

        <center><a href="profileupdate.php"><input type="button" value="update profile" class="btn btn-danger btn-lg"></a>&nbsp&nbsp&nbsp<a href="changepass.php"><input type="button" value="Change Password" class="btn btn-success btn-lg"></a></center>
				</div>
</body>
</html>