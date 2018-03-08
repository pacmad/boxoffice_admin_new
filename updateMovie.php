<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
	
	 
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css" >
//form
 <link rel="stylesheet" href="css/icomoon-social.css">
 <link rel="stylesheet" href="css/leaflet.css" />
 	<link rel="stylesheet" href="css/main.css">
//

<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js" ></script>
	
    <!-- Bootstrap core CSS -->
   <!-- <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <link href="dashboard/dashboard.css" rel="stylesheet">

   
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <?php
            include 'shared/menu.php';
      ?>
      </br>
      </br>
      </br>
      </br>
      </br>
      </br>
       <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="moviedb.php">Manage Movie<span class="sr-only">(current)</span></a></li>
            <li><a href="screenDb.php">Manage Screen</a></li>
            
            <li><a href="user/userDb.php">Manage User</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="theater/theaterDb.php">Manage Theater</a></li>
            <li><a href="show/showDb.php">Manage Show</a></li>
            <li><a href="language/languageDb.php">Manage Language</a></li>
            <li><a href="payment/paymentDb.php">Manage Payment</a></li>
            <li><a href="book/bookDb.php">Manage book</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            
            <?php
	 
    //if($_SERVER["REQUEST_METHOD"]=="POST")
    //{
        $con=new mysqli("localhost","root","","boxoffice");
        if($con->connect_error)
        {
            echo "something went wrong";
        }
		
	
      $_pk_Movie_id=$_GET["id"];
   
    
 //     echo $_pk_Movie_id;
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
         $sql="select * from movie_tbl where pk_Movie_id=".$_pk_Movie_id;
		//echo $sql;
		$result=$con->query($sql);
		$row=$result->fetch_assoc();
  $_Movie_name=$row["Movie_name"];
      $_Director=$row["Director"];
      $_Img_path=$row["Img_path"];
      $_Producer=$row["Producer"];
      $_Cast=$row["Cast"];
      $_Duration=$row["Duration"];
      $_Story=$row["Story"];
      $_Type=$row["Type"];
      $_fk_Language_id=$row["fk_Language_id"];
      $_Rating=$row["Rating"];
     
 	
?>
     
     
     
     
	
          </div>
      <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<form role="form" method="post" action="movieUpdate1.php">
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b> Movie ID</b></label>
									<input class="form-control" id="register-username"  type="text" name="txtpk_Movie_id"  value="<?php echo $_pk_Movie_id; ?>">
								</div>
                <div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b> Movie Name</b></label>
									<input class="form-control" id="register-username"  type="text" name="txtMovie_name"  value="<?php echo $_Movie_name; ?>">
								</div>
								<div class="form-group">
		        				 	<label for="register-password"><i class="icon-lock"></i> <b> Director Name</b></label>
									<input class="form-control" id="register-password" type="text" name="txtDirector"  value="<?php echo $_Director; ?>">
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Image Path</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtImg_path"  value="<?php echo $_Img_path; ?>">
								</div>
                	<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Producer Name </b></label>
									<input class="form-control" id="register-password2" type="text" name="txtProducer"  value="<?php echo $_Producer; ?>">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Cast </b></label>
									<input class="form-control" id="register-password2" type="text" name="txtCast"  value="<?php echo $_Cast; ?>">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Duration</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtDuration" value="<?php echo $_Duration; ?>">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Story</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtStory" value="<?php echo $_Story; ?>">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Type</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtType"  value="<?php echo $_Type; ?>">
                </div>
                <div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b> Language Name</b></label>
									<input class="form-control" id="register-username"  type="text" name="txtfk_Language_id"  value="<?php echo $_fk_Language_id; ?>">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b> Rating</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtRating" value="<?php echo $_Rating; ?>">
								</div>
								<div class="form-group">
									<button type="submit" name="btninsert" value="Update" class="btn pull-right">Update</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
	<!--				<div class="col-sm-6 col-sm-offset-1 social-login">
						<p>You can use your Facebook or Twitter for registration</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Use Facebook</a>
							<a href="#" class="btn-twitter-login">Use Twitter</a>
						</div>
					</div>-->
				</div>
			</div>
		</div>
  </body>
  </html>