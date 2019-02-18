<?php
include ('connect.php');

$admin_username = $_POST['admin_username'];
$password = md5($_POST['adminPass']);

$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$query = $conn->prepare($sql);
$query->execute(array($admin_username,$password));
$row = $query->fetch();
$count = $query->rowCount();

if ($count > 0){
	session_start();
	$_SESSION['id'] = $row['admin_id'];
	echo 1;
}else{
	echo 0;
}
?>