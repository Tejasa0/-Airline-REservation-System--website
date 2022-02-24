<?php
	session_start();
?>
<html>
	<head>
		<title>Booking</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['startpo']))
				{
					$data_missing[]='startpos';
				}
				else
				{
					$startpo=$_POST['startpo'];
				}
				if(empty($_POST['endpo']))
				{
					$data_missing[]='endpos';
				}
				else
				{
					$endpo=trim($_POST['endpo']);
				}

				if(empty($_POST['dedate']))
				{
					$data_missing[]='depdate';
				}
				else
				{
					$dedate=$_POST['dedate'];
				}
				if(empty($_POST['class']))
				{
					$data_missing[]='classf';
				}
				else
				{
					$class=trim($_POST['class']);
				}
				if(empty($_POST['flightname']))
				{
					$data_missing[]='flights';
				}
				else
				{
					$flightname=$_POST['flightname'];
				}
                if(empty($_POST['pass']))
				{
					$data_missing[]='passengers';
				}
				else
				{
					$pass=$_POST['pass'];
				}

				if(empty($data_missing))
				{
					require_once('Database Connection file/mysqli_connect.php');
					$query="INSERT INTO booked_data (startpo,endpo,flightname,class,dedate,pass,customer_id) VALUES (?,?,?,?,?,?,?)";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"sssssis",$startpo,$endpo,$flightname,$class,$dedate,$pass,$_SESSION['login_user']);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					if($affected_rows==1)
					{
						header('location:book_success.php');
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
					}
				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Submit request not received";
			}
		?>
	</body>
</html>