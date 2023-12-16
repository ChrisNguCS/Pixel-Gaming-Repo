<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Competitive Gaming Website Pixel Gaming</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- This is the search bar icon-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,500;0,600;0,700;1,200&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <a href="#">
            <img src="./images/pixel.png" alt="logo" class="logo"> <!-- Image of the Pixel Gaming logo -->
        </a>
        <ul class="nav"> <!-- Class for the Navigation Bar-->
            <li><a href="#">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#games">GAMES</a></li>
            <li><a href="pages/contact.php">CONTACT</a></li> <!-- Sends user to seperate contact page-->
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