<?php
	session_start();
	include("functions/functions.php");	
?>
<html>
	<head>
		<title>Online Shop</title>
		
	<link rel="stylesheet"href="styles/style.css" media="all"/>
		
	</head>
	<body>

	
		<div class="main_wrapper">
		

		
		<div class="header_wrapper">
			<a href="index.php"><img id="logo" src = "images/logoo.png"/></a>
			<img id="banner" src = "images/bann.png"/>
			
			</div>

			
	
	
				<div class="menubar">
				
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All products</a></li>
				<!-- <li><a href="customer/my_account.php">My Account</a></li> -->
				<li><a href="customer_login.php">Sign up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>

			<div id="form">
				<form method="get" action="results.php">
					<input type="text" name="user_query" placeholder="Search a product"  onkeyup="Request(this.value)" />
					<input type ="submit" name="search" value="Search"/>				
					<br>
					<div id="contentHolder"></div>
				</form>
			</div>
				
		</div>
