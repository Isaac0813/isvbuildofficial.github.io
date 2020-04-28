<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'connection.php';
	update();
}


function update()
{
	global $connect;
	
	$id = $_POST["id"];
	$name = $_POST["name"];
	$data = $_POST["data"];
	
	$query = " Update isvadmin SET name = '$name' , data = '$data' where id = '$id'";
	
	mysqli_query($connect, $query) or die (mysqli_error($connect));
	mysqli_close($connect);
	
}

?>