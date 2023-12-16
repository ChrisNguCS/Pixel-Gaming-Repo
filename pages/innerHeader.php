<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,500;0,600;0,700;1,200&family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>
    <header>
    <a href="#">
        <img src="../images/pixel.png" alt="logo" class="logo">
    </a> 
    <ul class="nav"> 
        <li><a href="../index.php">HOME</a></li>
        <li><a href="../index.php#about">ABOUT</a></li>
        <li><a href="../index.php#games">GAMES</a></li>
        <li><a href="../pages/contact.php">CONTACT</a></li>
        <?php
            if(isset($_SESSION["useruid"])) {
                echo"<li><a href='pages/login.php'>PROFILE</a></li>";
                echo"<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";
            } else {
                echo"<li><a href='pages/login.php'>LOG IN</a></li>";
            }
        ?>
    </ul>
    <div class="toggleMenu"></div>
    
    </header>