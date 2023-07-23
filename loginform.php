<?php
	session_start();

if(isset($_POST['login'])) {

	include 'server.php';
 	$matric =$_POST['matric'];
 	$password =$_POST['password'];

 	$password2="admin";
 	$matric2="admin";

 	$sql= "SELECT * FROM students WHERE matric= '$matric' AND password= '$password'";
	$result= mysqli_query($conn, $sql);

	 if ($password==$password2 && $matric==$matric2){
 	 	header("Location:insert_result.php");
 	 }
		
	elseif (!$row=$result->fetch_assoc()) { header("Location:not_login.php") ;}

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