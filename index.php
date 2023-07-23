<!DOCTYPE html>
<html>
<head>
	<title>LION TRANSCRIPT.....TRANSCRIPT PROCESSING MADE EASY</title>
	<link rel= "stylesheet" type="text/css" href="index.css">
	<meta charset="utf-8"/>
	<meta name ="viewport" content="width=device-width"/>
</head>

<body>
	<div class="name_of_site">
		<span id="lion">LION-</span><span id="transcript">Transcipt</span>
		<span id="address"> University of Nigeria, Nsukka </div>
	</div>
	<div class="background">
		<div class= "nav">
			<center><a href="index.php"><div class= "logo"></div></a></center>
			<ul>
				<?php
					if(empty($_SESSION['matric'])){
						echo '
							<li><a href="signup.php">signup</a></li>
							<li><a href="login.php">login</a></li>
						';
					}else{
						echo '<li><a href="dashboard.php">Profile</a></li>';}
				?>
				<li><a href="contact.php">contact</a></li>
			</ul>
		</div>

		<center>
			<div class= "body">
				<h2 class="writeup"> GET YOUR TRANSCRIPT </h2>
				<p>REAL-TIME REQUESTS & DELIVERY. TRANSCRIPT PROCESSING MADE EASY.</p>
				<div class= "links"><li><a href="signup.php">signup</a></li></div>
				<div class="link"><li><a href="login.php">login</a></li></div>
				<button type="submit" class="button" name="start"><a href="login.php">Let's Get Started</a></button><Hr>
			</div>
		</center>

	</div>
	<center><p class= "footer">copyright  &copy lion-transcript 2018. All rights reserved. </p></center>
</body>
</html> 