<?php
    include_once 'innerHeader.php';
?>
    <link rel="stylesheet" href="../css/login.css">
    <title>Log In</title>
    <div class="banner">
        <div class="signin"> 
            <div class="content"> 
                <h2>Sign In</h2> 
                <?php
                    if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'emptyinput'){
                        echo '<p class="error">Fill in all fields</p>';
                    }
                    else if ($_GET['error'] == 'wronglogin'){
                        echo '<p class="error">Username is invalid</p>';
                    }
                    else if ($_GET['error'] == 'wrongpassword'){
                        echo '<p class="error">Passwords is invalid</p>';
                    }
                    else if ($_GET['error'] == 'stmtfailed'){
                        echo '<p class="error">Something went wrong, try again!</p>';
                    }
                    }
                ?>
                <div class="form"> 
                    <form action="../includes/login.inc.php" method="post">
                        <div class="inputBox"> 
                            <input type="text" name="uid" required> <i>Username</i> 
                        </div> 
                        <div class="inputBox"> 
                            <input type="password" name="pwd" required> <i>Password</i> 
                        </div>  
                        <div class="links"> 
                            <a href="./forgotPassword.php">Forgot Password</a> 
                            <a href="./login.php">Sign In</a> 
                        </div> 
                        <div class="inputBox"> 
                        <input type="submit" name="submit" value="Submit"> 
                        </div> 
                    </form> 
                </div> 
            </div> 
        </div> 
    </div>

</body>
</html>