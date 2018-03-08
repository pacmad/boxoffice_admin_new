
					<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
<head>
<style>
.r1
{
	
	
   
    width: 140%;
}
.divcls
{
	
	padding:2%;
	 height: 10%;
    width: 85%;
}
</style>
<title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
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
<body class="cbp-spmenu-push">
	<div class="main-content">
	<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						
						<li>
							<a href="theaterDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Theater<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="theater/theaterDb.php">Display Theater</a>
								</li>
                                <li>
									<a href="theater/addTheater.php">Add Theater</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                        	<li>
							<a href="movieDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Movie<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                            <li>
									<a href="movieDb.php">Display Movie</a>
								</li>
								<li>
									<a href="addMovie.php">Add Movie</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                        	<li>
							<a href="show/showDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Show<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="show/showDb.php">Display Show</a>
								</li>
                                <li>
									<a href="show/showAdd.php">Add Show</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                        <li>
							<a href="screenDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Screen<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                                <li>
									<a href="screenDb.php">Display Screen</a>
								</li>
								<li>
									<a href="screenAdd.php">Add Screen</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                                               <li>
							<a href="language/languageDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Language<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                                 <li>
									<a href="language/languageDb.php">Display Language</a>
								</li>
								<li>
									<a href="language/languageAdd.php">Add Language</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                        <li>
							<a href="book/bookDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Book<span class="fa arrow"></span></a>
						</li>
                        <li>
							<a href="payment/paymentDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Payment<span class="fa arrow"></span></a>
						</li>
                        <li>
							<a href="user/userDb.php"><i class="fa fa-cogs nav_icon"></i>Manage User<span class="fa arrow"></span></a>
						</li>
						
						<li>
							<a href="#"><i class="fa fa-file-text-o nav_icon"></i>Pages<span class="nav-badge-btm">02</span><span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="login.html">Login</a>
								</li>
								<li>
									<a href="blank-page.html">Blank Page</a>
								</li>
							</ul>
							<!-- //nav-second-level -->
						</li>
						
					</ul>
					<div class="clearfix"> </div>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
        	  <?php
        include 'menu1.php';

    ?>
		<!-- //header-ends -->
		<!-- main content start-->
		
		<div  id="page-wrapper" class="r1">
			<div class="main-page divcls">
			
				
						<?php

$_pk_email_id=$_SESSION["pk_email_id"];
$conn=new mysqli("localhost","root","","boxoffice");
    $sql="select * from customer_tbl where pk_email_id='". $_pk_email_id ."'";
    $result=$conn->query($sql);


		while($row=$result->fetch_assoc())
		{

echo '<div class="r1">';
 echo '	<div class="elements  row r1">';
 echo '<div class="col-md-4 profile widget-shadow divcls">';
					echo '	<h4 class="title3">'.'Profile'.'</h4>';
					echo '	<div class="profile-top">';
					
    echo '<div class="span3" >';
   echo '<center><img src="'.$row["User_img"].'" style="height:150px;width:150px;" class="img-thumbnail"></center><br><br><br>';
    echo '</div>';
    							
							echo '<h4> '.$row["User_name"].'</h4><br>';
						 echo '<h5> '.$row["Fname"]." ".$row["Lname"].'</h5><br>';
   echo ' </div>';
   
						echo '<div class="profile-text">';
							echo '<div class="profile-row">';
							echo '	<div class="profile-left">';
								echo '	<i class="fa fa-envelope profile-icon"></i>';
							echo '	</div>';
							echo '	<div class="profile-right">';
							
								 echo '<h4> '.$row["pk_email_id"].'</h4><br>';
									echo '	<p>Email</p>';
									echo '</div> ';
									echo '<div class="clearfix"> </div>';	
								echo '</div>';
							echo '	<div class="profile-row row-middle">';
								echo '	<div class="profile-left">';
								echo '		<i class="fa fa-mobile profile-icon"></i>';
								echo '	</div>';
								echo '	<div class="profile-right">';
									echo '<h4> '.$row["Mobile_no"].'</h4><br>';
									echo '	<p>Contact Number</p>';
									echo '</div> ';
									echo '<div class="clearfix"> </div>	';
								echo '</div>';
								echo '<div class="profile-row">';
									echo '<div class="profile-left">';
										echo '<i class="fa fa-facebook profile-icon"></i>';
									echo '</div>';
								echo '	<div class="profile-right">';
										echo '<h4>facebook.com/user</h4>';
										echo '<p>Facebook</p>';
									echo '</div> ';
									echo '<div class="clearfix"> </div>	';
								echo '</div>';
							echo '</div>';
							echo '<div class="profile-btm">';
			
						
						}
						?>	
						
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>