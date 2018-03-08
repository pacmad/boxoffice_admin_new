<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<<<<<<< HEAD
<meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
=======
<title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | Tables :: w3layouts</title>
>>>>>>> 30c5717c65ba2d7ee3c5fc80f1ef922cdd4a90f0
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
<style>
.cls{
	width:700px;
}
</style>

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
        include 'shared/menu.php';

    ?>
	<?php

	 
	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
  $name=$_POST['name']; 
	  //connect  to the database 
	  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error()); 
  //-select  the database to use 
  $mydb=mysql_select_db("boxoffice"); 
 //-query  the database table 
	  $sql="SELECT  pk_Movie_id, Movie_name, Director FROM movie_tbl WHERE Movie_name LIKE '%" . $name .  "%' OR Director LIKE '%" . $name ."%'"; 
	  //-run  the query against the mysql query function 
	  $result1=mysql_query($sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result1)){ 
	          $FirstName  =$row['Movie_name']; 
	          $LastName=$row['Director']; 
	          $ID=$row['pk_Movie_id']; 
	  //-display the result of the array 
	 echo' <table class="table table-hover">'; 
                        echo'<thead>';
                            echo'<tr>'; 
                                 
                                     echo '<th>Movie name</th>';
                                    // <th>Director</th>
                                    //  <th>Image</th>
                                    // <th>Producer</th>
                        echo ' </tr> ';
                       echo '  </thead>'; 
						  echo '<tr>';
             //   echo "<td>"   .$FirstName . " ". $LastName ." </a></td>";
	  //echo "<ul>\n"; 
	//echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n"; 
	//  echo "</ul>"; 
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
  } 
	 
	?> 

		<!-- main content start-->
      <?php
        require 'admin_class.php';
        $obj=new movie_booking();
        $result=$obj->getAllMovie();
    ?>
		<div id="page-wrapper">
			<div class="main-page">
	<div align="right">	
  <button type="button" class="btn btn-primary">
  <a style="color:white" href="addMovie.php"><span>Add Movie</span></a>
  </button>
  <button type="button" class="btn btn-primary">Delete All</button>
  <button type="button" class="btn btn-primary" onclick="window.print()">Print</button>
  </div>

				<div class="tables">
					
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						 <form  method="post"   id="searchform"> 
	      <input  type="text" name="name" class="cls"> 
	      <input  type="submit" name="submit"   value="Search">
						<table class="table table-hover"> 
                        <thead> 
                            <tr> 

                                 
                                     <th>Movie name</th>
                                    <th>Director</th>
                                     <th>Image</th>
                                    <th>Producer</th>
                                   <!-- <th>Cast</th>
                                    <th>Duration</th>
                                    <th>Strory</th>
                                    <th>Type</th>
                                    <th>Language</th>
                                    <th>Rating</th>
									-->
                                    <th>Operation</th>
                  
                             </tr> 
                         </thead> 
                         <tbody> 
            <?php
			
	 
	  if(isset($_POST['submit'])){ 
	 // if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
  $name=$_POST['name']; 
	  //connect  to the database 
	  $db=mysql_connect  ("localhost", "root",  "") or die ('I cannot connect to the database  because: ' . mysql_error()); 
  //-select  the database to use 
  $mydb=mysql_select_db("boxoffice"); 
 //-query  the database table 
	  $sql="SELECT  pk_Movie_id, Movie_name, Director,Img_path,Producer FROM movie_tbl WHERE Movie_name LIKE '%" . $name .  "%' OR Director LIKE '%" . $name ."%' OR Img_path LIKE '%" . $name ."%' OR Producer LIKE '%" . $name ."%'"; 
	  //-run  the query against the mysql query function 
	  $result1=mysql_query($sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result1)){ 
	          $FirstName  =$row['Movie_name']; 
	          $LastName=$row['Director']; 
			   $img_path=$row['Img_path'];
			   $producer=$row['Producer'];
			    
	          $ID=$row['pk_Movie_id']; 
	  //-display the result of the array 
	 echo' <table class="table table-hover">'; 
                        echo'<thead>';
                            echo'<tr>'; 
                                 
                                    // echo '<th>Movie name</th>';
                                    //echo '<th>Director</th>';
                                    //  <th>Image</th>
                                    // <th>Producer</th>
                        echo ' </tr> ';
                       echo '  </thead>'; 
						  echo '<tr>';
    //       echo "<td>"."<a  href=\"search.php?id=$ID\">"   .$FirstName . " </a></td>";
	//  echo "<ul>\n"; 
	echo  '<td><b>'  .$FirstName .'</b></td>'; 
	echo  '<td><b>'  .$LastName .'</b></td>'; 
	 echo '<td><b>'?> <img src="<?php echo $img_path?>" height="150" width="150"><?php echo '</b></td>';
	echo  '<td><b>'  .$producer .' </b></td>';

	//echo  '<td>'  .$img_path .'</td>';  
	
	
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  } 
	  } 
	  
	 
	 

              while($row=$result->fetch_assoc())
              {
               echo '<tr>';
			   
			 //  echo "<li>" "  .$FirstName . " " . $LastName .  "</a></li>\n"; 
                echo '<td>'. $row["Movie_name"] .'</td>';
                  echo '<td>'. $row["Director"] .'</td>';
                  echo '<td>'?> <img src="<?php echo $row["Img_path"];?>" height="150" width="150"><?php echo '</td>';
                  echo '<td>'. $row["Producer"] .'</td>';
                  
      //            echo '<td>'. $row["Cast"] .'</td>';
        //           echo '<td>'. $row["Duration"] .'</td>';
          ////          echo '<td>'. $row["Story"] .'</td>';
              //       echo '<td>'. $row["Type"] .'</td>';
                     // echo '<td>'. $row["Type"] .'</td>';
                      
                     // echo '<td>'. $row["Rating"] .'</td>';
                         echo '<td>';?><a style="color:blue"<?php echo 'href="moviedelete.php?id='. $row["pk_Movie_id"].'"><span class="glyphicon glyphicon-trash"></span></a> | <a href="movieupdate.php?id='. $row["pk_Movie_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
				   echo '<td> <p><a href="readmore.php?id='. $row["pk_Movie_id"] .'" class="btn btn-info" role="button" >Read More</a></p><td>';
               echo '</tr>';
              }
            ?>
                             </tbody> 
                             </table>
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