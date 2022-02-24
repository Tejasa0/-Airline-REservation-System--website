<?php
	session_start();
?>
<html>
	<head>
		<title>
			Available Flights
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
		<div id="bf">
		<form class="perform" action="booking_conn.php" method="post">
			
			<h2>BOOK YOUR FLIGHT</h2>
			<table cellpadding="5">
				<tr>
					<td class="table1">Enter the starting loaction</td>
					<td class="table1">Enter the Destination</td>
				</tr>
				<tr>
					<td class="table1">
						<input list="origins" name="startpo" placeholder="From" required>
  						<datalist id="origins">
						  <option value="Chandwad">
  						  	<option value="Nashik">
  						  	<option value="Jalgaon">
  						  	<option value="Pune">
  						  	<option value="Aurangabad">
  						</datalist>
					</td>
					<td class="table1">
						<input list="destinations" name="endpo" placeholder="To" required>
  						<datalist id="destinations">
  						  	<option value="Chandwad">
  						  	<option value="Nashik">
  						  	<option value="Jalgaon">
  						  	<option value="Pune">
  						  	<option value="Aurangabad">
  						</datalist>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="table1">Date of Departure</td>
					<td class="table1">Enter the No. of Passengers</td>
				</tr>
				<tr>
					<td class="table1"><input type="date" name="dedate" required></td>
					<td class="table1"><input type="number" name="pass" placeholder="1...2...3" required></td>
				</tr>
			</table>
			<table cellpadding="5">
				<tr>
					<td class="table1">Select Flight</td>
					<td class="table1">Select the class</td>
				</tr>
				<tr>
					<td class="table1">
						<input list="flights" name="flightname" placeholder="" required>
  						<datalist id="flights">
						  <option value="AIR INDIA">
  						  	<option value="INDIGO">
  						  	<option value="Vistara">
  						  	<option value="Spice Jet">
  						</datalist>
					</td>
					<td class="table1">
						<input list="classes" name="class" placeholder="" required>
  						<datalist id="classes">
  						  	<option value="A">
  						  	<option value="B">
  						  	<option value="C">
  						  	<option value="D">
  						</datalist>
				</tr>
			</table>

			<input type="submit" value="Book Flight" name="Submit">
		</form>
		</div>
	</body>
</html>