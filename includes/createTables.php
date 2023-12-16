<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "pixeldb";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->query("CREATE DATABASE IF NOT EXISTS `pixeldb`"); 
// sql to create table
$sql = "
CREATE TABLE games (
    gameId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    gameName varchar(128) NOT NULL,
    gameCredits int(11) NOT NULL,
    gameGamemode varchar(128) NOT NULL,
    gameTeamsize varchar(128) NOT NULL,
    gamePlayerCount int(11) NOT NULL,
    gameRegion varchar(128) NOT NULL,
    gameTime varchar(128) NOT NULL
    );";


if ($conn->query($sql) === TRUE) {
  header("location: ../index.php?db");
} else {
  header("location: ../index.php?dber");
}

$sql2 = "
CREATE TABLE users (
  usersId int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  usersUid varchar(128) NOT NULL,
  usersEmail varchar(128) NOT NULL,
  usersPwd varchar(128) NOT NULL
);
";
if ($conn->query($sql2) === TRUE) {
  header("location: ../index.php?db");
} else {
  header("location: ../index.php?dber");
}

$conn->close();
?>
</body>
</html>
