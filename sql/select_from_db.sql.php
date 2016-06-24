<?php
session_start();
include "db.sql.php";

$sql = "SELECT * FROM posts";
$result  = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	echo '<p>' . $row['subject'] . "</p>";
}

?>