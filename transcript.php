<?php 
	include 'server.php';
	session_start(); 
?> 

<!DOCTYPE html>
<html>
<head>
	<title>TRANSCRIPT...TRANSCRIPT PROCESSING MADE EASY</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

</head>

<body>
<div class= "body">
	<div class ="background">
		<div class ="logo"></div>
			<h1>University of Nigeria, Nsukka </h1>
			<h2>Students Cumulative Transcript Report</h2>
	</div>
		<center><h3>DEPARTMENT OF COMPUTER SCIENCE</h3></center>
		<div class="first_info">
			<p>NAME : <?php echo $_SESSION['firstname'].' '.$_SESSION['surname'].' '.$_SESSION['middlename']; ?></p>
			<p>REG NO : <?php echo $_SESSION['matric'] ?> </p>
			<p>DISCIPLINE : <?php echo $_SESSION['department'] ?></p>
			<p>FACULTY : <?php echo $_SESSION['faculty'] ?> </p>
			<p>ENTRY YEAR : <?php echo $_SESSION['entry_year'] ?> </p>
			<p>GRADUATION YEAR : <?php echo $_SESSION['grad_year'] ?></p>
			<p>DEGREE : Bachelor of Science</p>
		</div><br><br>
</div>

		<div class= "main-area">
		<table width= "680" border="1" cellpadding= "0" cellspacing="0">
			<tr> 
			<th> COURSE CODE </th>
			<th> COURSE TITLE </th>
			<th> SEMESTER </th>
			<th> LEVEL </th>
			<th> UNIT </th>
			<th> TOTAL </th>
			<th> GRADE </th>
			</tr>

			<?php
				$reg_no= $_SESSION['matric'];
				$sql= "SELECT * FROM result WHERE semester= '1ST' AND level='100' AND matric= '$reg_no'";
				$results=mysqli_query($conn,$sql); 
				if(!$row=$results->fetch_assoc()) { echo "NO RESULT FOUND IN THE DATABASE for 100level , 1st semeseter" ;$GPA= 0; } else{
				include 'grade.php';}
			?>
		</table>
		<br>

		<table width= "680" border="2" cellpadding="1" cellspacing="0">
			<tr>
			<th> COURSE CODE </th>
			<th> COURSE TITLE </th>
			<th> SEMESTER </th>
			<th> LEVEL </th>
			<th> UNIT</th>
			<th> TOTAL </th>
			<th> GRADE </th>
			</tr>

			<?php
				$reg_no= $_SESSION['matric'];
				$sql= "SELECT * FROM result WHERE semester= '2ND' AND level='100' AND matric= '$reg_no'";
				$results=mysqli_query($conn,$sql); 
				if(!$row=$results->fetch_assoc()) { echo "NO RESULT FOUND IN THE DATABASE for 100level , 2nd semeseter" ;$GPA= 0; } else{
				include 'grade.php';}
				?>
		</table><br>

		<table width= "680" border="2" cellpadding="1" cellspacing="0">
			<tr>
			<th> COURSE CODE </th>
			<th> COURSE TITLE </th>
			<th> SEMESTER </th>
			<th> LEVEL </th>
			<th> UNIT</th>
			<th> TOTAL </th>
			<th> GRADE </th>
			</tr>

			<?php
				$reg_no= $_SESSION['matric'];
				$sql= "SELECT * FROM result WHERE semester= '1ST' AND level='200' AND matric= '$reg_no'";
				$results=mysqli_query($conn,$sql); 
				if(!$row=$results->fetch_assoc()) { echo "NO RESULT FOUND IN THE DATABASE for 200level , 1st semeseter" ;$GPA= 0; } else{
				include 'grade.php';}		
			?>
		</table><br>

		<table width= "680" border="2" cellpadding="1" cellspacing="0">
			<tr>
			<th> COURSE CODE </th>
			<th> COURSE TITLE </th>
			<th> SEMESTER </th>
			<th> LEVEL </th>
			<th> UNIT </th>
			<th> TOTAL </th>
			<th> GRADE </th>
			</tr>

			<?php
				$reg_no= $_SESSION['matric'];
				$sql= "SELECT * FROM result WHERE semester= '2ND' AND level='200' AND matric= '$reg_no'";
				$results=mysqli_query($conn,$sql); 
				if(!$row=$results->fetch_assoc()) { echo "NO RESULT FOUND IN THE DATABASE for 200level , 2nd semeseter" ;$GPA= 0; } else{
				include 'grade.php';} 	
			?> 
		</table><br>

		<table width= "680" border="2" cellpadding="1" cellspacing="0">
		<tr>
			<th> COURSE CODE </th>
			<th> COURSE TITLE </th>
			<th> SEMESTER </th>
			<th> LEVEL </th>
			<th> UNIT</th>
			<th> TOTAL </th>
			<th> GRADE </th>
		</tr>

			<?php
				$reg_no= $_SESSION['matric'];
				$sql= "SELECT * FROM result WHERE semester= '1ST' AND level='300' AND matric= '$reg_no'";
				$results=mysqli_query($conn,$sql);
				if(!$row=$results->fetch_assoc()) {echo "NO RESULT FOUND IN THE DATABASE for 300level , 1st semeseter" ;$GPA= 0; } else{
				include 'grade.php';}
			?>
		</table><br>

		<table width= "680" border="2" cellpadding="1" cellspacing="0">
			<tr>
			<th> COURSE CODE </th>
			<th> COURSE TITLE </th>
			<th> SEMESTER </th>
			<th> LEVEL </th>
			<th> UNIT</th>
			<th> TOTAL </th>
			<th> GRADE </th>
			</tr>

			<?php
				$reg_no= $_SESSION['matric'];
				$sql= "SELECT * FROM result WHERE semester= '2ND' AND level='300' AND matric= '$reg_no'";
				$results=mysqli_query($conn,$sql); 
				if(!$row=$results->fetch_assoc()) { echo "NO RESULT FOUND IN THE DATABASE for 300level , 2ND semeseter" ;$GPA= 0; } else{
				include 'grade.php';}
			?>
		</table><br>

		<table width= "680" border="2" cellpadding="1" cellspacing="0">
			<tr>
			<th> COURSE CODE </th>
			<th> COURSE TITLE </th>
			<th> SEMESTER </th>
			<th> LEVEL</th>
			<th> UNIT </th>
			<th> TOTAL </th>
			<th> GRADE </th>
			</tr>

			<?php
				$reg_no= $_SESSION['matric'];
				$sql= "SELECT * FROM result WHERE semester= '1ST' AND level='400' AND matric= '$reg_no'";
				$results=mysqli_query($conn,$sql); 
				if(!$row=$results->fetch_assoc()) { echo "NO RESULT FOUND IN THE DATABASE for 400level , 1st semeseter" ;$GPA= 0; } else{
				include 'grade.php';}
			?>
		</table><br>

		<table width= "680" border="2" cellpadding="1" cellspacing="0">
			<tr>
			<th> COURSE CODE </th>
			<th> COURSE TITLE </th>
			<th> SEMESTER </th>
			<th> LEVEL </th>
			<th> UNIT </th>
			<th> TOTAL </th>
			<th> GRADE </th>
			</tr>

			<?php
				$reg_no= $_SESSION['matric'];
				$sql= "SELECT * FROM result WHERE semester= '2ND' AND level='400' AND matric= '$reg_no'";
				$results=mysqli_query($conn,$sql); 
				if(!$row=$results->fetch_assoc()) { echo "NO RESULT FOUND IN THE DATABASE for 400level , 2nd  semeseter" ;$GPA= 0; } else{
				include 'grade.php';}
			?> 
		</table><br>

		<table width= "680" border="2" cellpadding="1" cellspacing="0">
			<?php 
			echo "<tr>";
			echo "<td>YOUR CUMMULATIVE GRADE POINT(CGPA) IS :</td>";
			//echo ''
			echo "<td>".round($CGPA,2)."</td>"; 
			echo "</tr>";
			?>
		</table><BR>
		<table width= "680" border="2" cellpadding="1" cellspacing="0">
			<?php 
			echo "<tr>";
			echo "<td>YOUR CLASS OF DEGREE IS :</td>";
			//echo ''
			echo "<td>".$class."</td>"; 
			echo "</tr>";
			?>
		</table><BR>

		<div class="signature"><br><br>
			EXAM OFFICER'S NAMES :........................................
			SIGN :.........................
			DATE :......................<br><br><br>
			H.O.D'S NAMES :................................
			SIGN :..........................
			DATE :......................

		</div><br>
 <a onclick="window.print();" style="cursor:pointer;" class="print"> PRINT TRANSCRIPT </a>
<a href="index.php" >Back Home</a>
<br><br>
	</div>

</body>
</html>
<style type="text/css">

body { width: 80%; margin:auto;}
	a {text-decoration: none; color:black; margin-top: 42px; float:left; margin-right: 400px;background-color: grey; 
	padding: 5PX;
	font-size: 13px;}

.body { width: 70%; }

.logo {
		background-image: url(logo_head.jpg);
		background-repeat: no-repeat;
		padding-top: 50px;
		height: 60px;
		width: 22%;
		float:left;
		}

.background {border-bottom: 2px solid black;}

.first_info {float:left;}
.main-area {clear:both;}

.print {background-color: grey; 
	padding: 5PX;
	font-size: 13px;
	margin-top: 40px;
	clear:both; 
	float:left;
	margin-bottom: 10px;}

.signature {border:1px solid black;
			height:200px;
			width:660px;
			padding-left: 20PX;}
</style>