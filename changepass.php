<?php
session_start();
//$eml=$_SESSION["txteml"];
?>
<!DOCTYPE HTML>
<html>
<head>

<script src="js/jquery-3.2.0.js" ></script>


<link rel="stylesheet" href="css/bootstrap.min.css" />

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" />

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js" ></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">


<!--//Metis Menu -->
</head> 
<style>
#back1
{
	
    background-image: lfinal2;
    background-repeat:  repeat;
    background-color: #cccccc;

}
</style>
<body  >
    <?php
	$eml=$_SESSION["pk_email_id"];

$_newpass=$_POST["txtnewpass"];
$_oldpass=$_POST["txtolpass"];
$_conpass=$_POST["txtnewpass1"];


if($_newpass==$_conpass)
{
    
    require 'user_email.php';
    $obj=new database();
$res=$obj->change($_oldpass,$_newpass,$eml);

if($res===true)
{
    echo "successfull";

}
else
{
    echo $res;

}
}
else
{
    echo "unsuccessfull";
}


?>

						
					</ul>
		<div id="back1">				
			
		<div  id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">Change Password</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Welcome boxoffice AdminPanel ! <br> Not a Member? <a href="signup.html">  Sign Up »</a> </h4>
					</div>
					<div class="login-body">
						<form action="changepass.php" method="POST" class="center">
							<input type="password" class="lock"  id="txtolpass" placeholder="Enter Your  Old Password" required="">
							<input type="password"  id="txtnewpass" class="lock" placeholder="Enter Your  New Password" required="">
							<input type="password"  id="txtnewpass1" class="lock" placeholder="Enter Your  New Password" required="">
                            <input type="submit" name="Sign In" value="Change Password">
							<div class="forgot-grid">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
								
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>
				
				
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2016 Novus Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>