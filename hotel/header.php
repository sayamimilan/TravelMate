<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> 
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">  -->

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="//jqueryui.com/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script defer src="assets/js/js/all.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- font awesome -->
  <link href="assets/css/css/all.css" rel="stylesheet">
  <!--Import Google Icon Font-->
  <link type="text/css" href="assets/css/materialicons.css" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
  
 

</head>
<body>

<header>
	<nav class="nav-wrapper grey darken-3">
		<div class="container">
			<a href="#" class="brand-logo">TravelMate</a>
			<a href="#" class="sidenav-trigger" data-target="mobile-menu">
				<i class="material-icons">menu</i>
			</a>

			<ul class="right hide-on-med-and-down">
				<?php if(!isset($_SESSION['is_logged_in'])){ 
					$_SESSION['is_logged_in']="0";
				} 
				?>
				<!-- Checking if user is logged in -->	
				<?php if($_SESSION['is_logged_in']=="true"){ ?>	
				<!-- Checking if user is admin -->
				<?php
					if($_SESSION['id']=='1'){
				?>										
						<li><a href="#" data-target="dropdown1" class="dropdown-trigger">Admin Panel<i class="material-icons right">arrow_drop_down</i></a></li>
						<ul id="dropdown1" class="dropdown-content">
							<li><a href="all-hotel.php">Edit/Delete</a></li>
							<li><a href="add-new-hotel.php">Add Hotels</a></li>
							<li><a href="hotel_list.php">Hotel Lists</a></li>
							<li><a href="message.php">Messages</a></li>
							<li><a href="users.php">Users</a></li>
						</ul>					
				<?php } ?>	
					<li><a href="logout.php">Logout</a></li>
				<?php } else{ ?>	
					<li><a href="register.php">Register</a></li>			
					<li><a href="login.php">Login</a></li>
				<?php } ?>				
				<li><a href="hotels.php">Hotels</a></li>		
				<li><a href="index.php">Home</a></li>									
				<!-- <li><a href="#">Contact</a></li>-->
			</ul>
			<ul class="sidenav grey lighten-2" id="mobile-menu">
				<?php if(!isset($_SESSION['is_logged_in'])){ 
					$_SESSION['is_logged_in']="0";
				} 
				?>
				<!-- Checking if user is logged in -->	
				<?php if($_SESSION['is_logged_in']=="true"){ ?>	
				<!-- Checking if user is admin -->
				<?php
					if($_SESSION['id']=='1'){
				?>										
						<li><a href="#" data-target="dropdown2" class="dropdown-trigger">Admin Panel<i class="material-icons right">arrow_drop_down</i></a></li>
						<ul id="dropdown2" class="dropdown-content">
							<li><a href="all-hotel.php">Edit/Delete</a></li>
							<li><a href="add-new-hotel.php">Add Hotels</a></li>
							<li><a href="hotel_list.php">Hotel Lists</a></li>
							<li><a href="message.php">Messages</a></li>
							<li><a href="users.php">Users</a></li>
						</ul>					
				<?php } ?>	
					<li><a href="logout.php">Logout</a></li>
				<?php } else{ ?>	
					<li><a href="register.php">Register</a></li>			
					<li><a href="login.php">Login</a></li>
				<?php } ?>				
				<li><a href="hotels.php">Hotels</a></li>		
				<li><a href="index.php">Home</a></li>									
				<!-- <li><a href="#">Contact</a></li>-->
			</ul>
		</div>
	</nav>
</header>

<!-- ____________________________________________ -->

<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
	$('.dropdown-trigger').dropdown();
  });
</script>

