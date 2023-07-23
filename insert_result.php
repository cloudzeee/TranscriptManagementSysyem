<?php
	include 'server.php';
	session_start();

	if(empty($_SESSION['admin'])){
	header("Location:index.php");
	}else{}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="insert_result.css"/>
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
					
					<li><a href="index.php">Home</a></li>
				</center></ul>	
		</div>
	</center>
<div class= "body"> 
	<div class="left-block">
		<div class="side-header1">
			<center><p>WELCOME ADMIN</p></center>
			<div class="side-nav">
				<li><a href="index.php">HOME</a></li>
				<li><a class="active" href="insert_result.php">INSERT RESULT</a></li>
				<li><a href="delete_result.php">DELETE RESULT</a></li>
				<li><a href="update_result.php">UPDATE RESULT</a></li>
				<li><a href="log_out.php">LOG OUT</a></li>
			</div>
		</div>
	</div>

			<div class= "body-area">
					<h3>Insert Student Result</h3>

				<form action="insert_result.php" method="post">

				REG NO: <input type= "text" name="matric" class= "form1"><BR><BR>
				SEMESTER: <select name="semester" size="1" class="form">
  				<option value="1ST">1ST</option>
   				<option value="2ND">2ND</option>
			</select><BR><BR>
				LEVEL: <select name="level" size="1" class="form">
  				<option value="100">100</option>
   				<option value="200">200</option>
  				<option value="300">300</option>
  				<option value="400">400</option>
			</select>
				<BR><br>
				COURSE CODE: <input type= "text" name="course_code" class= "form1"><BR><BR>
				COURSE TITLE: <input type= "text" name="course_title" class= "form1"><BR><BR>
				UNITS: <input type= "text" name="units" class= "form1" required"><BR><BR>
				CA: <input type= "text" name="ca" class= "form1" required><BR><BR>
				EXAM: <input type= "text" name="exam" class= "form1" required><BR><BR>
				TOTAL: <input type= "text" name="total" class= "form1" required><BR><BR>
				GRADE: <input type= "text" name="grade" class= "form1" required"><BR><BR>
				<br></p>
				<input type="submit" name="insert" class="button" value="INSERT">
				</form>
			</div>			
	</div>	
</div>

	<?php
	include 'server.php';		
	if (isset($_POST['insert'])) {

	$matric = $_POST['matric'];

	$semester =$_POST['semester'];
	$level =$_POST['level'];
	$course_code =$_POST['course_code'];
	$course_title =$_POST['course_title'];
	$units =$_POST['units'];
	$ca =$_POST['ca'];
	$exam=$_POST['exam'];
	$total =$_POST['total'];
	$grade =$_POST['grade'];

	$sql = "INSERT INTO result (matric, semester, level, course_code, course_title, units, CA, exam, total, grade)  VALUES ('$matric', '$semester', '$level', '$course_code', '$course_title', '$units', '$ca', '$exam', '$total', '$grade')";

		$result = mysqli_query($conn, $sql);
	}
	?>
</body>
</html>