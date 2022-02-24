<html>
	<head>
		<title>Logout Conn</title>
	</head>
	<body>
		<?php
			session_start();
			session_destroy();
			header("location: home.php");
		?>
	</body>
</html>