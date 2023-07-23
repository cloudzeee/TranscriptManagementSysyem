<!DOCTYPE html>
<html>
<head>
	<title>CONTACT LIONSCRIPT...TRANSCRIPT PROCESSING MADE EASY</title>
	<link rel= "stylesheet" type="text/css" href="contact.css">
	<meta charset="utf-8"/>
 	<meta name ="viewport" content="width=device-width"/>
</head>

<body>
	<div class="name_of_site">
		<span id="lion">LION-</span><span id="transcript">Transcipt</span>
		<span id="address"> University of Nigeria, Nsukka </div>
	</div>
		<div class= "nav">
		<center>
				<div class= "logo"></div><br>
			<ul>
				
				<li><a href="index.php">Home</a></li>
				<?php
				include 'server.php';
					
					if(empty($_SESSION['matric'])){
						echo '
							<li><a href="signup.php">signup</a></li>
							<li><a href="login.php">login</a></li>
							';
					}else{
						echo '<li><a href="dashboard.php">Profile</a></li>';
					}
				?>
			</ul>
		</center>
		</div>

	<center>
		<h2 class="writeup">WE ARE ALWAYS READY TO SERVE YOU!</h2>

		<form class="form" method="post" action="contact.php">
		<input type="text" class="box" name="name" placeholder=" Your Name" required><br><br>
		<input type="email" class="box" name="email" placeholder=" Your Email" required><br><br>
		<textarea class="box" name="Message" placeholder="Message" required></textarea><br><br>

		<button class="button" name="button"> SEND MESSAGE </button>
	</center>

<?php
	include 'server.php';

	if (isset($_POST['button'])) {

		$name=$_POST['name'];
		$visitor_email=$_POST['email'];
		$message=$_POST['Message'];

		$sql = "INSERT INTO contact (name, visitor_email, message) 
		VALUES ('$name', '$visitor_email','$message')";

		$result = mysqli_query($conn,$sql);

		$to= "ucheisaac800@yahoo.com";
		$headers="from: ".$visitor_email;
		$subject= "New form submission";

		$body='<html>
				<body>
				username:'.$name.'
				email:'.$visitor_email.'
				message:'.$message.'
				</body>
			</html>';


		 mail($to, $subject, $body, $headers);

		 header("Location:index.php");
	}
?>

</body>
</html>
