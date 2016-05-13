<?php
$hostname = 'localhost';
$username = 'root';
$password = 'django';

try {
    $conn = new PDO("mysql:host=$hostname;dbname=person", $username, $password);
    echo 'Connected to database';
    /*** closing the connection ***/
    $conn = null;
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>