<?php
	if (isset($_POST['forgotpass'])) {
		include 'server.php';
		$email = $_POST['email'];

		$sql="SELECT * FROM students WHERE email= '$email'";
		$result= mysqli_query($conn, $sql);

		if ($result->num_rows >0) {
			$str ="012356789aqwxecdrvfgtyhbbyhnjuikmolp";
			$str = str_shuffle($str);
			$str = substr($str, 0, 10);
			$url ="http://localhost/projectfile/resetpassword.php?token=$str&email=$email";
			echo $str;

			//mail($email, "reset password", "To reset your password visit this: $url", "from:ucheisaac800@yahoo.com\r\n");

		$sql="UPDATE students SET token='$str' WHERE email= '$email'";
		$result= mysqli_query($conn, $sql);
		} else 
		{ 
			echo "bitch";}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>reset password</title>
</head>
<body>
		<form action ="password.php" method ="POST">

			<input type="text" name="email" placeholder="email"<br>
			<input type ="submit" name="forgotpass" value="request password ">
</body>
</html>