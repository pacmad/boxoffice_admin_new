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
      <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
       $con = new mysqli("localhost","root","","boxoffice");
        if($con->connect_error)
        {
            echo "something went wrong";
        }
      $_pk_Movie_id=$_POST["txtpk_Movie_id"];
      echo $_pk_Movie_id;
      $_Movie_name=$_POST["txtMovie_name"];
      echo $_Movie_name;
      $_Director=$_POST["txtDirector"];
      $_Img_path=$_POST["txtImg_path"];
      $_Producer=$_POST["txtProducer"];
      $_Cast=$_POST["txtCast"];
      $_Duration=$_POST["txtDuration"];
      $_Story=$_POST["txtStory"];
      $_Type=$_POST["txtType"];
      $_fk_Language_id=$_POST["txtfk_Language_id"];
      $_Rating=$_POST["txtRating"];            
      
      require 'admin_class.php';
      $obj=new movie_booking();
      $res=$obj->addMovie($_pk_Movie_id,$_Movie_name,$_Director,$_Img_path,$_Producer,$_Cast,$_Duration,$_Story,$_Type,$_fk_Language_id,$_Rating );
      echo $res;
      
      if($res===true)
      {
          header('location:moviedb.php');
      }
      else
      {
          echo "Unsuccessful";
          
      }
    }
      ?>
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
            
            
          </div>
      <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<form role="form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Enter Movie ID</b></label>
									<input class="form-control" id="register-username"  type="text" name="txtpk_Movie_id" placeholder="Enter Movie ID">
								</div>
                <div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Enter Movie Name</b></label>
									<input class="form-control" id="register-username"  type="text" name="txtMovie_name" placeholder="Enter Movie Name">
								</div>
								<div class="form-group">
		        				 	<label for="register-password"><i class="icon-lock"></i> <b>Enter Director Name</b></label>
									<input class="form-control" id="register-password" type="text" name="txtDirector" placeholder="Enter Director Name">
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b>Enter Image Path</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtImg_path" placeholder="Enter Image Path">
								</div>
                	<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b>Enter Producer Name </b></label>
									<input class="form-control" id="register-password2" type="text" name="txtProducer" placeholder="Enter Producer Name ">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b>Enter Cast </b></label>
									<input class="form-control" id="register-password2" type="text" name="txtCast" placeholder="Enter Cast ">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b>Enter Duration</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtDuration" placeholder="Enter Duration ">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b>Enter Story</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtStory" placeholder="Enter Story ">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b>Enter Type</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtType" placeholder="Enter Type ">
                </div>
                <div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Enter Language Name</b></label>
									<input class="form-control" id="register-username"  type="text" name="txtfk_Language_id" placeholder="Enter Language Name">
								</div>
                <div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b>Enter Rating</b></label>
									<input class="form-control" id="register-password2" type="text" name="txtRating" placeholder="Enter Rating">
								</div>
								<div class="form-group">
									<button type="submit" name="btninsert" value="Add" class="btn pull-right">Insert</button>
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