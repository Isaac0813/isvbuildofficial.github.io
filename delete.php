<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'connection.php';
	update();
}


function update()
{
	global $connect;
	
	$id = $_POST["id"];
	
	$query = " Delete FROM isvadmin WHERE id = '$id'";
	
	mysqli_query($connect, $query) or die (mysqli_error($connect));
	mysqli_close($connect);
	
}

?>