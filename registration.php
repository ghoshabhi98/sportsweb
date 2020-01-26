<?php

session_start();
header('location:log-in.html');

$icon = mysqli_connect('localhost','root');
if ($icon){
	echo"connection successful";
}
else{
	echo "connection not successful";
}

mysqli_select_db($icon,'mysql');

$name = $_POST['username'];
$password = $_POST['password'];


$q = "select * from signin where name = '$name' && password = '$password'";
 
$result = mysqli_query($icon,$q);

$num = mysqli_num_rows($result);

if($num != 1){
	echo "duplicate values";
}
else{
	$qy=" insert into signin(name ,password) values ('$name','$password' )  ";
	mysqli_query($icon,$qy);
}

?>