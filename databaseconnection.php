<?php
$ip = "127.0.0.1";
$user = "root@localhost";
$password = "12345678";
$dbName = "sochintechdb";

$induction = mysqli_connect($ip,$user,$password,$dbName);

if($induction == false){
    echo "Ошибка подключения";

}
?>