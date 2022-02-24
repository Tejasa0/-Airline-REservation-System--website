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
		<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airbackend";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$a=$_SESSION['login_user'];
echo "<p style='font-size:20px'>Hi ".$_SESSION['login_user']."<br>Here is your Booked Flight Information</p>";
$sql = "SELECT * FROM booked_data where customer_id='$a'";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_assoc($result)) {
	  echo "<fieldset><h5>Booking Id : " . $row['booking_id']."</h5><br>
	  <h5>Username : " . $row['customer_id']."</h5><br>
	   <h5>Starting Location : " . $row['startpo']."</h5><br><h5>Destination : " . $row['endpo']."</h5><br>
 <h5>Departure Date : " . $row['dedate']."</h5><br>";
	   "<h5>Flightname : " . $row['flightname']."</h5><br><h5>Class : " . $row['class']."</h5><br><h5>No of passengers : " . $row['pass']."</h5><br></fieldset>";
}
mysqli_close($conn);
?>
	</body>
</html>
