<?php

if (isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    //Include database connection
    require_once 'dbh.inc.php';
    //Include the function definitions
    require_once 'functions.inc.php';

if (emptyInputSignup($username, $email, $pwd, $pwdRepeat) !== false) {
    header("location: ../pages/signup.php?error=emptyinput");
    exit();
}
if (invalidUid($username) !== false) {
    header("location: ../pages/signup.php?error=invaliduid");
    exit();
}

if (invalidEmail($email) !== false) {
    header("location: ../pages/signup.php?error=invalidemail");
    exit();
}

if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../pages/signup.php?error=passwordsdontmatch");
    exit();
}

if (uidExists($conn, $username, $email) !== false) {
    header("location: ../pages/signup.php?error=usernametaken");
    exit();
}

createUser($conn, $email, $username, $pwd);

} else {
    header("location: ../pages/signup.php");
    
}