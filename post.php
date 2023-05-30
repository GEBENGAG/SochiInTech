<?php
include 'databaseconnection.php';
global $connection;

$serviceid = $_POST['serviceid'];
$name = $_POST['name'];

$email = $_POST['email'];
$comment = $_POST['comment'];
$orgname = $_POST['orgname'];
$phone = $_POST['phone'];
$date = $_POST['date'];


$query = "INSERT INTO `orders`(`idService`, `Comment`, `DateOrder`, `idOrderState`, `ordersOrganization`, `orderEmail`, `orderphone`, `ordername`) VALUES ('".$serviceid."','".$comment."','".$date."','1','".$orgname."','".$email."','".$phone."','".$name."')";
      

mysqli_query($connection,$query);

?>