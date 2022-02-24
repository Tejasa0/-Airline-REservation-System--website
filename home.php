<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to Airline Booking
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<style>
			fieldset{
				width:700px;
				height:100px;
				margin:300px 200px 0px 600px;
				text-align:center;
				color:white;

			}
			</style>
	</head>
	<body> 
		<h1 id="title">
		AIRLINE BOOKING
		</h1>
		<div>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"booking.php\">Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login.php\">Book Tickets</a>";
						}
					?>
				</li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer.php\">Login</a>";
						}
						else
						{
							echo "<a href=\"login.php\">Login</a>";
						}
					?>
				</li>
			</ul>
			<div class="container">
			<div class="welcome_text">WELCOME TO AIRLINE BOOKING</div>
		</div>
		</div>
		
	</body>
</html>