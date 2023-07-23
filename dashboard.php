<?php
		include 'server.php';
		session_start();
		
		if(empty($_SESSION['matric'])){
		header("Location:index.php");
		}else{}
?>

<!DOCTYPE html>
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
			<center><p>WELCOME <?php echo $_SESSION['firstname']?>, </p></center>
		</div>
		<div class ="side-header2">
			<div class ="side-header22">
				<img src="usericon.png"/>
				<div class="write-up">
					<p><strong><?php echo $_SESSION['firstname'].' '.$_SESSION['surname'].' '.$_SESSION['middlename']; ?></strong></p>
					<p> Student at University of Nigeria, Nsukka <br> 
					
					<?php
						if ($_SESSION['entry_year']== '2013/2014'){
							$level= 'Graduate';
							 echo $level;
						}else if ($_SESSION['entry_year']== '2014/2015'){
							$level= 'Computer Science, 400 level';
							 echo $level;
						}else if ($_SESSION['entry_year']== '2015/2016'){
							$level= 'Computer Science, 300 level';
							 echo $level;
						}else if ($_SESSION['entry_year']== '2016/2017'){
							$level= 'Computer Science, 200level';
							 echo $level;
						}else if ($_SESSION['entry_year']== '2017/2018'){
							$level= 'Computer Science, 100level';
							 echo $level;
						} $_SESSION['level']=$level;
						?>  </p>
				</div>	
			</div>
		</div>
	</div>

	<div class="mainbody">
		<div class="side-nav">
		
			<li><a href="index.php">Home</a></li>
			<li><a href="edit_profile.php">Profile</a></li>
			<li><a href="select_result.php">View Result</a></li>
			<li><a href="transcript.php">Get Transcript</a></li>
			<li><a href="log_out.php">Log Out</a></li>
	
		</div>
		<div class= "body-area">
			<h3>Your Profile</h3>
			
				<p>NAME : <?php echo $_SESSION['firstname'].' '.$_SESSION['surname']; ?></p>
				<p>REG NO : <?php echo $_SESSION['matric'] ?> </p>
				<p>EMAIL : <?php echo $_SESSION['email'] ?></p>
				<p>PHONE NUMBER : <?php echo $_SESSION['phone']?></p>
				<p>DEPARTMENT : <?php echo $_SESSION['department']?></p>
				<p>FACULTY : <?php echo $_SESSION['faculty'] ?> </p><br>
				<a href= "edit_profile.php"><button type= "button" class="button"> Edit Profile </button></a>
			</p>
		</div>
	</div>
	
</div>
</div>
</body>
</html>
