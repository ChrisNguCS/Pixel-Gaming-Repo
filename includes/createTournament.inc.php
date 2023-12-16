<?php

if (isset($_POST["submit"])) {
    $gamename = $_POST["gamename"];
    $gamecredits = $_POST["gamecredits"];
    $gamemode = $_POST["gamemode"];
    $teamsize = $_POST["teamsize"];
    $playercount = $_POST["playercount"];
    $region = $_POST["region"];
    $gametime = $_POST["gametime"];

    //Include database connection
    require_once 'dbh.inc.php';
    //Include the function definitions
    require_once 'functions.inc.php';
    
if (invalidGame($gamename, $gamecredits, $gamemode, $teamsize, $playercount, $region) !== false) {
    header("location: ../pages/signup.php?error=invalidemail");
    exit();
}

createGame($conn, $gamename, $gamecredits, $gamemode, $teamsize, $playercount, $region, $gametime);

} else {
    header("location: /index.php");
    
}