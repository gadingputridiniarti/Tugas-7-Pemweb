<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi Database MySQL</h1>
	<?php
	$conn = mysqli_connect("localhost","root","","myDB");

	//check connection
	if(mysqli_connect_errno()){
		echo "Failed to Connect to MySQL: ".mysqli_connect_error();
		exit();
	}
	?>
</body>
</html>