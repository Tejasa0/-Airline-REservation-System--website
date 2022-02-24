<html>
	<head>
		<title>
			Welcome to Airline Booking
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<style>
			h5{
				margin-top:-1px;
				margin-bottom:-1px;
				font-size:21px;
			}
			fieldset{
				margin-left:200px;
				width:300px;
				text-align:center;
			}
		</style>
	</head>
	<body> 
		<h1 id="title">
		AIRLINE BOOKING
		</h1>
		<div>
			<ul>
				<li><a href="customer.php">Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer.php\">Home</a>";
						}
						else
						{
							echo "<a href=\"customer.php\">Dashboard</a>";
						}
					?>
				</li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer.php\">Logout</a>";
						}
						else
						{
							echo "<a href=\"logout_conn.php\">Logout</a>";
						}
					?>
				</li>
			</ul>
		</div>
        <form class="perform" action="update_conn.php" method="POST">
            Select New Date Of Departure : 
        <input type='date' name="dedate1" value='dedate1' required>
        <input type="submit" name="Update" value="Update"></form>
</body>
</html>
