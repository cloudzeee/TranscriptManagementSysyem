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
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="dashboard.css"/>
</head>
<body>
	<div class="name_of_site">
		<span id="lion">LION-</span><span id="transcript">Transcipt</span>
		<span id="address"> University of Nigeria, Nsukka </div>
	</div>
	<center>
		<div class= "nav0">
			<a href= "index.php"><div class= "logo"></div></a><br>
				<center><ul>
					<li><a href="contact.php">contact</a></li>
					<li><a href="index.php">Home</a></li>
				</center></ul>	
		</div>
	</center>
<div class= "body"> 

	<div class="header">
		<div class="side-header1">
			
		<center><p>WELCOME <?php echo $_SESSION['firstname'] ?></p></center>
		</div>
		<div class ="side-header2">
			<div class ="side-header22">
				<img src="usericon.png"/>
				<div class="write-up">
					<p><strong><?php echo $_SESSION['firstname'].' '.$_SESSION['surname'].' '.$_SESSION['middlename']; ?></strong></p>
					<p> Student at University of Nigeria, Nsukka <br> 

					<?php echo $_SESSION['level'];
						?></p>
				</div>	
			</div>
		</div>
	</div>

	<div class="mainbody">
		<div class="side-nav">
		
			<li><a href="index.php">Home</a></li>
			<li><a href="edit_profile.php">Profile</a></li>
			<li><a class="active" href="select_result.php">View Result</a></li>
			<li><a href="transcript.php">Get Transcript</a></li>
			<li><a href="log_out.php">Log Out</a></li>
	
		</div>
		<div class= "body-area">
			<h3>Results</h3>
				<form action="result.php" method="post">
					<p> Select Session 
						<select name="Select_Session" size="1">
							<option value="100"> 2014-2015 </option>
							<option value="200"> 2015-2016 </option>
							<option value="300"> 2016-2017 </option>
							<option value="400"> 2017-2018 </option>
						</select></p>

						<p> Select Semester 
						<select name="Select_Semester" size="1">
							<option value="1ST"> First Semester </option>
							<option value="2ND"> Second Semester </option>
						</select>
						<br><br></p>
						<input type="submit" name="check" class="button" value="check">
						
				</form>
			
		</div>
	</div>
	
</div>
</div>

