<?php
session_start();
include "db.sql.php";

$uid =$_POST['uid'];
$pwd =$_POST['pwd'];

	$sql = "SELECT * FROM user WHERE uid='$uid'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$hash_pwd = $row['pwd'];
	$hash = password_verify($pwd, $hash_pwd);

	if ($hash == 0) {
	header("Location: ../index.php?error=empty");
	exit();
} 
else {
	$sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$hash_pwd'";
	$result = $conn->query($sql);
	if(!$row = $result->fetch_assoc()) {
		echo "your username or password is incorect";
	} else {
		$_SESSION['id'] = $row['id'];
	}

	header("Location: ../index.php");
}





