
<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="../js/metisMenu.min.js"></script>
<script src="../js/custom.js"></script>
<link href="../css/custom.css" rel="stylesheet">


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
								<li>
									<a href="theater/updateTheater.php">Update Theater</a>
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
								<li>
									<a href="updateMovie.php">Update Movie</a>
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
								<li>
									<a href="show/updateShow.php">Update Show</a>
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
								<li>
									<a href="screenUpdate.php">Update Screen</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
                                               <li>
							<a href="languageDb.php"><i class="fa fa-cogs nav_icon"></i>Manage Language<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
                                 <li>
									<a href="languageDb.php">Display Language</a>
								</li>
								<li>
									<a href="languageAdd.php">Add Language</a>
								</li>
								<li>
									<a href="languageUpdate.php">Update Language</a>
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
									<a href="signup.html">SignUp</a>
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
include '../shared/menu.php';
?>
    </br>
    </br>
    </br>
    </br>
		<!-- main content start-->
     <?php
	 
    //if($_SERVER["REQUEST_METHOD"]=="POST")
    //{
        $con=new mysqli("localhost","root","","boxoffice");
        if($con->connect_error)
        {
            echo "something went wrong";
        }
		
	
      $_Language_name="";
	   $_pk_Language_id=$_GET["id"];
      $sql="select * from language_tbl where pk_Language_id=".$_pk_Language_id;
		//echo $sql;
		$result=$con->query($sql);
		$row=$result->fetch_assoc();
 
 		$_Language_name=$row["Language_name"];
	//}
?>
     
     
     
     
		<div id="page-wrapper">
			<div class="main-page">
	<form role="form" method="post" action="languageUpdate1.php">
									<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Language Id</b></label>
									<input class="form-control" id="register-username"  type="text" name="txtLanguage_id" value="<?php echo $_pk_Language_id; ?>">
								</div>
							
                				<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Enter Language</b></label>
									<input class="form-control" id="register-username"  type="text" name="txtLanguage_name" value="<?php echo $_Language_name; ?>">
								</div>
								
								<div class="form-group">
									<button type="submit" name="btnupdate" value="Add" class="btn pull-right">Update</button>
									<div class="clearfix"></div>
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
		<script src="../js/classie.js"></script>
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
	<script src="../js/jquery.nicescroll.js"></script>
	<script src="../js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.js"> </script>
</body>
</html>