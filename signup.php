<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP...TRANSCRIPT PROCESSING MADE EASY</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="signup.css">
	<meta name= "viewport" content="width=device-width"/>
	<?php
	session_start();
	?>
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
						}else{ echo '<li><a href="dashboard.php">Profile</a></li>'; }
					?>
				</ul>	
		</nav>

		<h2 class="writeup"> GET YOUR TRANSCRIPT </h2>

	<p>REAL-TIME REQUESTS & DELIVERY. TRANSCRIPT PROCESSING MADE EASY.</p>

	<div class= "register"><h2> REGISTER </h2></div>

	<div class= "theform"><Br>
		<form action="signup.php" method="POST">
			<div class= "register-icon"></div>

			<p> Matriculation Number: </p>
			<input type= "text" name="matric" class= "form" required><br>
			<p> First Name: </p>
			<input type= "text" name="firstname" class= "form" required"><br>
			<p> Surname: </p>
			<input type= "text" name="surname" class= "form" required>
			<p> Middle Name: </p>
			<input type= "text" name="middlename" class= "form" required>
			<p> Email: </p>
			<input type= "text" name="email" class= "form" required>
			<p> Phone Number: </p>
			<input type= "text" name="phone" class= "form" required>
			<p> Faculty: </p>
			<select name="faculty" size="1" class="form" required>
  				<option value="Physical Science">Physical Science</option>
  			</select>
			<p> Department: </p>
			<select name="department" size="1" class="form" required>
  				<option value="Computer Science">Computer Science</option>
  			</select>
			<p> Entry Year: </p>
			<select name="entry_year" size="1" class="form" required>
   				<option value="2013/2014">2013/2014</option>
  				<option value="2014/2015">2014/2015</option>
  				<option value="2014/2015">2014/2015</option>
  				<option value="2015/2016">2015/2016</option>
  				<option value="2016/2017">2016/2017</option>
  				<option value="2017/2018">2017/2018</option>
			</select>
			<p> Graduating Year: </p>
			<select name="grad_year" size="1" class="form" required >
  				<option value="2016/2017">2016/2017</option>
   				<option value="2017/2018">2017/2018</option>
  				<option value="2018/2019">2018/2019</option>
  				<option value="2019/2020">2019/2020</option>
  				<option value="2020/2021">2020/2021</option>
  				<option value="2021/2022">2021/2022</option>
			</select>
			
			<p> Password: </p>
			<input type= "password" name="password" class= "form" required><BR><br>
			<input type= "submit" name="signup" class="button" value= "SIGNUP"><br><br>

			<a href="login.php">Already have an account? </a>
		</form>
	</div>
</center>
<?php
	include 'server.php'; //this includes the connection code

if (isset($_POST['signup'])) {

	$matric = $_POST['matric'];
	$firstname =$_POST['firstname'];
	$surname =$_POST['surname'];
	$middlename =$_POST['middlename'];
	$email =$_POST['email'];
	$phone =$_POST['phone'];
	$faculty=$_POST['faculty'];
	$department =$_POST['department'];
	$entry_year =$_POST['entry_year'];
	$grad_year =$_POST['grad_year'];
	$password =$_POST['password'];


$sql = "INSERT INTO students (matric, firstname, surname, middlename, email, phone, faculty, department, entry_year, grad_year, password)  VALUES ('$matric', '$firstname', '$surname', '$middlename', '$email', '$phone', '$faculty', '$department', '$entry_year', '$grad_year', '$password')";

$result = mysqli_query($conn, $sql);
	header ("Location:Login.php");
}
?>
</body>
</html>