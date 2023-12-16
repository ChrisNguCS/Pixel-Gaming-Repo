<?php

//Validate input by checking if any cells are empty
function emptyInputSignup($username, $email, $pwd, $pwdRepeat){
    $result;
    if (empty($username) || empty($email) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}

//Validate username by only allowing only numbers and letters
function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//Validate email
function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//Validate password repeat
function pwdMatch($pwd, $pwdrepeat) {
    $result;
    if ($pwd !== $pwdrepeat){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    //Search database for matching uid or email
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    //Prepares the sql statement for injection
    if (!mysqli_stmt_prepare( $stmt, $sql )) {
        header("location: ../pages/signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $pwd) {
    //SQL Statement to insert data into the users table
    $sql = "INSERT INTO users(usersUid, usersEmail, usersPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    //Prepares the sql statement for injection
    if (!mysqli_stmt_prepare( $stmt, $sql )) {
        //Check if statement can be used
        header("location: ../pages/signup.php?error=stmtfailed");
        exit();
    }

    //Encrypt the password by hashing
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
    //Exectute SQL statement
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../pages/signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)){
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    if ($uidExists == false){
        header("location: ../pages/login.php?error=wronglogin");
        exit();
    }

    //Get the hashed password from the database
    $pwdHashed = $uidExists["usersPwd"];
    //Match the inputted password to the hashed password
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd == false){
        header("location: ../pages/login.php?error=wrongpassword");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        header("location: ../index.php");
        exit();
    }
}

function invalidGame($gamename, $gamecredits, $gamemode, $teamsize, $playercount, $region,){
    $result;
    if ( $gamename == "null" || $gamemode == "null" || $teamsize =="null" || $playercount =="null" || $region =="null"){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function createGame($conn, $gamename, $gamecredits, $gamemode, $teamsize, $playercount, $region, $gametime) {
    //SQL Statement to insert data into the users table
    $sql = "INSERT INTO games(gameName, gameCredits, gameGamemode, gameTeamsize, gamePlayerCount, gameRegion, gameTime) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    //Prepares the sql statement for injection
    if (!mysqli_stmt_prepare( $stmt, $sql )) {
        //Check if statement can be used
        header("location: ../pages/signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sississ", $gamename, $gamecredits, $gamemode, $teamsize, $playercount, $region, $gametime);
    //Exectute SQL statement
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../pages/index.php?error=none");
    exit();
}