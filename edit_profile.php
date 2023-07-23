<?php
		include 'server.php';
		session_start();
			if(empty($_SESSION['matric'])){
		header("Location:index.php");
		}else{}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT PROFILE...TRANSCRIPT PROCESSING MADE EASY</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<meta name= "viewport" content="width=device-width"/>
</head>

<body>
	<div class="name_of_site">
		<span id="lion">LION-</span><span id="transcript">Transcipt</span>
		<span id="address"> University of Nigeria, Nsukka </div>
	</div>
	<div class="background">
		<center>
		<nav>
			<a href= "index.php"><div class= "logo"></div></a><br>
				<ul>
					<li><a href="contact.php">contact</a></li>
					<?php
						if(empty($_SESSION['matric'])){
							echo '
							<li><a href="signup.php">signup</a></li>
							<li><a href="login.php">login</a></li>
							';
						}else{ echo '<li><a href="login.php">Profile</a></li>'; }
					?>
				</ul>	
		</nav>

		<h2 class="writeup"> GET YOUR TRANSCRIPT </h2>

	<p>REAL-TIME REQUESTS & DELIVERY. TRANSCRIPT PROCESSING MADE EASY.</p>

	<div class= "register"><h2> EDIT PROFILE </h2></div>

	<div class= "theform"><Br>
		<form action="edit_profile.php" method="POST">
			<div class= "register-icon"></div>

			<p> First Name: </p>
			<input type= "text" name="firstname" class= "form"> <input type= "submit" name="fname" class="button" value= "CHANGE FIRSTNAME"><br>
			<?php if (isset($_POST['fname'])) {
				include 'server.php'; $reg_no= $_SESSION['matric'];
				$firstname =$_POST['firstname'];
				$sql = "UPDATE students SET firstname= '$firstname' WHERE matric= '$reg_no'";
				$result = mysqli_query($conn, $sql);
				echo "firstname changed successfully.";
			}?>

			<p> Surname: </p>
			<input type= "text" name="surname" class= "form"> <input type= "submit" name="sname" class="button" value= "CHANGE SURNAME"><br>
			<?php if (isset($_POST['sname'])) {
				include 'server.php'; $reg_no= $_SESSION['matric'];
				$surname =$_POST['surname'];
				$sql = "UPDATE students SET surname= '$surname' WHERE matric= '$reg_no'";
				$result = mysqli_query($conn, $sql);
				echo "Surname changed successfully.";
			}?>

			<p> Middle Name: </p>
			<input type= "text" name="middlename" class= "form"> <input type= "submit" name="mname" class="button" value= "CHANGE MIDDLENAME"><br>
			<?php if (isset($_POST['mname'])) {
				include 'server.php'; $reg_no= $_SESSION['matric'];
				$middlename =$_POST['middlename'];
				$sql = "UPDATE students SET middlename= '$middlename' WHERE matric= '$reg_no'";
				$result = mysqli_query($conn, $sql);
				echo "Middle name changed successfully.";
			}?> 
		

			<p> Email: </p>
			<input type= "text" name="email" class= "form"> <input type= "submit" name="emaill" class="button" value= "CHANGE EMAIL"><br>
			<?php if (isset($_POST['emaill'])) {
				include 'server.php'; $reg_no= $_SESSION['matric'];
				$email =$_POST['email'];
				$sql = "UPDATE students SET email= '$email' WHERE matric= '$reg_no'";
				$result = mysqli_query($conn, $sql);
				echo "Email changed successfully.";
			}?>

			<p> Phone Number: </p>
			<input type= "text" name="phone" class= "form"> <input type= "submit" name="phonee" class="button" value= "CHANGE PHONE NUMBER"><br>
			<?php if (isset($_POST['phonee'])) {
				include 'server.php'; $reg_no= $_SESSION['matric'];
				$phone =$_POST['phone'];
				$sql = "UPDATE students SET phone= '$phone' WHERE matric= '$reg_no'";
				$result = mysqli_query($conn, $sql);
				echo "Phone Number changed successfully.";
			}?> 
			<br><br>
			<a href= "login.php"><button type= "button" class="button"> Back to Profile </button></a>
		</form>
	</div>
</center>
</body>
</html>


	