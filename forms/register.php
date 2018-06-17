<?php

include_once('../inc/config.php');
$dbh = null;
try {
    $dbh = new PDO('mysql:host='. DB_HOST .';dbname='. DB_NAME .'', DB_USER, DB_PASS);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
 
$param = $_POST['name'];

$query=$dbh->prepare("SELECT * fom user_signup where name=:param");
$query->bindParam(':param', $param);
$row = $query->fetch();

if(isset($row)){
	$_SESSION['flash_message'] = 'This email already registered.';
} else{
	$stmt = $dbh->prepare ("INSERT INTO user_signup (name, email) VALUES (:name, :email)");
	$stmt-> bindParam(':name', $_POST['name']);
	$stmt-> bindParam(':email', $_POST['email']);
	$stmt-> execute();
	$_SESSION['flash_message'] = 'Saved Successfully';
}
header('location:'. $_SERVER['HTTP_REFERER']);