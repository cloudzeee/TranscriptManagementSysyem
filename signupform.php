<?php
	include 'server.php'; //this includes the connection code
	session_start();

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