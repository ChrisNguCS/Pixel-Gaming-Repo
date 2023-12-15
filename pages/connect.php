<?php

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    //Database Connection
    $conn = new mysqli('localhost','root','','pixelDB');
    if ($conn->connect_error) {
        die('Connection Failed'. $conn->connect_error);
    }else{
        $stmt = $conn->prepare('insert into registraton(username, email, password)
            values(?, ?, ?)
        ');
        $stmt->bind_param('sss',$username, $email, $password);
        $stmt->execute();
        echo'registration successful';
        $stmt->close();
        $conn->close();
    }
?>