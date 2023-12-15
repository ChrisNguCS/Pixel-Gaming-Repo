<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

if (emptyInputSignup($username, $email, $pwd, $pwdRepeat) !== false) {
    header("location: ../pages/signup.php?error=emptyinput");
}



} else {
    header("location: ../pages/signup.php");
}