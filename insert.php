<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'connection.php';
	createStudent();
}


function createStudent()
{
	global $connect;
	
	$id = $_POST["id"];
	$name = $_POST["name"];
	$data = $_POST["data"];
	
	$query = " Insert into isvadmin(id,name,data) values ('$id','$name','$data');";
	
	mysqli_query($connect, $query) or die (mysqli_error($connect));
	mysqli_close($connect);
	
}

?>