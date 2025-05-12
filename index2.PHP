<?php 
$hostname="localhost";
$sdbname = "tp1";
$dbuser = "root";
$dbpassword = "";

try{
    $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser,
$dbpassword);
$connection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    

$req = $connection->query("select * from users");
var_dump($req->fetchAll(PDO::FETCH_ASSOC));
echo "</ pre>";
}catch (PDOException $e) {
    var_dump($e);
    echo "</ pre";
    die("Stop");
    //throw $th;
}


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF_8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">