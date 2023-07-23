<?php
	include 'server.php';
	session_start();
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
			
		<center><p>WELCOME <?php echo $_SESSION['firstname']?></p></center>
		</div>
		<div class ="side-header2">
			<div class ="side-header22">
				<img src="usericon.png"/>
				<div class="write-up">
					<p><strong><?php echo $_SESSION['firstname'].' '.$_SESSION['surname'].' '.$_SESSION['middlename']; ?></strong></p>
					<p> Student at University of Nigeria, Nsukka <br>

					<?php echo $_SESSION['level'];?>  </p>
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
			<table width= "600" border="1" cellpadding="1" cellspacing="0">
					<tr>
						<th> COURSE CODE </th>
						<th> COURSE TITLE </th>
						<th> UNITS </th>
						<th> CA SCORE </th>
						<th> EXAM </th>
						<th> TOTAL </th>
						<th> GRADE </th>
					</tr>

				<?php

					$session =$_POST['Select_Session'];
					$semester =$_POST['Select_Semester'];
					$reg_no= $_SESSION['matric']; 

					$sql= "SELECT * FROM result WHERE semester= '$semester' AND level='$session' AND matric= '$reg_no'";
				$results=mysqli_query($conn,$sql); 
				$unitLoad = 0;
				$gradeP = 0;
				GLOBAL $cal;
			
			    while($student = mysqli_fetch_assoc($results)) {

						if($student['grade'] == 'A'){
							$mul = $student['units'] * 5;
						}elseif($student['grade'] == 'B'){
								$mul = $student['units'] * 4;
						}elseif($student['grade'] == 'C'){
								$mul = $student['units'] * 3;
						}elseif($student['grade'] == 'D'){
								$mul = $student['units'] * 2;
						}elseif($student['grade'] == 'F'){
								$mul = $student['units'] * 0;
						}else{
							$mul = 'Error';
						}

					$unitLoad += $student['units'];
					$gradeP += $mul;

					echo "<tr>";
					echo "<td>".$student['course_code']."</td>";
					echo "<td>".$student['course_title']."</td>";
					echo "<td>".$student['semester']."</td>";
					echo "<td>".$student['level']."</td>";
					echo "<td>".$student['units']."</td>";
					echo "<td>".$student['total']."</td>";
					echo "<td>".$student['grade']."</td>";
					echo "</tr>";

						if($student['level'] <= 100){
							$noYears = 2;
						}elseif($student['level'] <= 200){
							$noYears = 4;
						}elseif($student['level'] <= 300){
							$noYears = 6;
						}elseif ($student['level'] <= 400) {
							$noYears = 8;
						}elseif($student['level'] <= 500){
							$noYears = 10;
						}elseif($student['level'] <= 600){
							$noYears = 12;
						}else{
							echo 'Error';
						}

						$GPA = $gradeP / $unitLoad;
					}
					$cal+= $GPA;
					$CGPA =$cal/$noYears;
				
				?>


		<table width= "600" border="2" cellpadding="1" cellspacing="0">
			<?php 
			echo "<tr>";
			echo "<td>YOUR  GRADE POINT(GPA) IS :</td>";
			echo "<td>".round($GPA,2)."</td>"; 
			echo "</tr>";
			?>
		</table>
</div>

</body>
</html>