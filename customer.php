<?php
	session_start();
?>
<html>
	<head>
		<title>
			
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 127px
			}
			input[type=date] {
				border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 5.5px 44.5px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 75.5px;
			}
		</style>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body>
		<h1 id="title">
		AIRLINE BOOKING
		</h1>
		<div>
			<ul>
				
				<li><a href="customer.php">Home</a></li>
				<li><a href="customer.php">Dashboard</a></li>
				<li><a href="logout_conn.php">Logout</a></li>
			</ul>
		</div>
		<?php
			echo "<marquee><h3>Welcome To AIRLINE BOOKING Portal </h3></marquee>";
			require_once('Database Connection file/mysqli_connect.php');
		?>
		<div id="bf">
		<table cellpadding="5">
			<tr>
				<td class="admin_func"><button id="btn"><a href="booking.php">Book Flight Tickets</a>
		</button></td>
			</tr>
			<tr>
				<td class="admin_func"><button id="btn"><a href="view_booked_tickets.php">View Booked Tickets</a>
		</button></td>
			</tr>
			<tr>
				<td class="admin_func"><button id="btn"><a href="cancel_booked_tickets.php">Cancel Booked Tickets</a>
		</button></td>
			</tr>
			<tr>
				<td class="admin_func"><button id="btn"><a href="update.php">Update Date of Departure</a>
		</button></td>
			</tr>
		</table>
		</div>
	
	</body>
</html>