<?php

return $conn = mysqli_connect('localhost','root','','proiect');

if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}