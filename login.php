<!DOCTYPE html>
<html>
<head>
	<title>LOG IN...TRANSCRIPT PROCESSING MADE EASY</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login.css">
	<meta name="viewport" content="width=device-width"/>
	 
	<?php
	session_start();
	?>
</head>
<body>	

	<div class="name_of_site">
		<span id="lion">LION-</span><span id="transcript">Transcipt</span>
		<span id="address"> University of Nigeria, Nsukka </div>
	</div>
<center>
	<div class="background">
	<div class= "nav">
		<a href= "index.php"><div class= "logo"></div></a><br>
			<ul>
				<li><a href="contact.php">contact</a></li>
				<?php
					if(empty($_SESSION['matric'])){
						echo '
							<li><a href="signup.php">signup</a></li>
							<li><a href="login.php">login</a></li>
						';
					}else{
						echo '<li><a href="login.php">Profile</a></li>';
					}
				?>
				
				<li><a href="index.php">Home</a></li>
			</ul>	
	</div>


	<div class= "theform">
		
		<form action="login.php" method="POST">
			<h2 class="writeup"> LOGIN HERE </h2>

			<?php
				if (isset($_SESSION['message'])) {echo $_SESSION['message'];}
			?>
			
			<div class="icon"></div>
			<p> Matriculation Number: </p>
			<input type= "text" name="matric" class= "box" required><br><br>
			<p> Password: </p>
			<input type= "password" name="password" class= "box" required><br><br>
			<button type="submit" class="button" name="login">LOGIN</button><br>
		

		<a href="signup.php">don't have an account? </a><bR>

		</form>
	</div>
</center>
<?php

if(isset($_POST['login'])) {
	
	include 'connection.php';
	
 	$matric =$_POST['matric'];
 	$password =$_POST['password'];

 	$password2="admin";
 	$matric2="admin";


 	$sql= "SELECT * FROM students WHERE matric= '$matric' AND password= '$password'";
	$result= mysqli_query($conn, $sql);

	 if ($password==$password2 && $matric==$matric2){
	 	$_SESSION['admin']=$matric;
 	 	header("Location:insert_result.php");
 	 }
		
	elseif (!$row=$result->fetch_assoc()) { $_SESSION['message']= '
			<div class="error">Your username or password is incorrect, Try again</div>';}

		else { 
	$_SESSION['matric']=$row['matric'];
	$_SESSION['firstname']=$row['firstname'];
	$_SESSION['surname']=$row['surname'];
	$_SESSION['middlename']=$row['middlename'];
	$_SESSION['email']=$row['email'];
	$_SESSION['phone']=$row['phone'];
	$_SESSION['faculty']=$row['faculty'];
	$_SESSION['department']=$row['department'];
	$_SESSION['entry_year']=$row['entry_year'];
	$_SESSION['grad_year']=$row['grad_year'];

			header("location:dashboard.php"); }

}
?>
</body>
</html>