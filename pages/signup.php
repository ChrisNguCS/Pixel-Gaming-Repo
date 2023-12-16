<?php
    include_once 'innerHeader.php';
?>
    <link rel="stylesheet" href="../css/login.css">
    <title>Sign Up</title>

    <div class="banner">
        <div class="signin"> 
            <div class="content"> 
                <h2>Sign Up</h2> 
                    <?php
                        if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'emptyinput'){
                            echo '<p class="error">Fill in all fields</p>';
                        }
                        else if ($_GET['error'] == 'invaliduid'){
                            echo '<p class="error">Username is invalid</p>';
                        }
                        else if ($_GET['error'] == 'invalidemail'){
                            echo '<p class="error">Email invalid</p>';
                        }
                        else if ($_GET['error'] == 'passwordsdontmatch'){
                            echo '<p class="error">Passwords do not match</p>';
                        }
                        else if ($_GET['error'] == 'stmtfailed'){
                            echo '<p class="error">Something went wrong, try again!</p>';
                        }
                        else if ($_GET['error'] == 'usernametaken'){
                            echo '<p class="error">This username or email has been taken</p>';
                        }
                        else if ($_GET['error'] == 'none'){
                            echo '<p style="color:green;">You have signed up!</p>';
                        }
                        }
                    ?>
                    <div class="form"> 
                    <form action="../includes/signup.inc.php" method="post">
                        <div class="inputBox"> 
                            <input type="text" name="uid" required> <i>Username</i> 
                        </div> 
                        <div class="inputBox"> 
                            <input type="text" name="email" required> <i>Email</i> 
                        </div> 
                        <div class="inputBox"> 
                            <input type="password" name="pwd" required> <i>Password</i> 
                        </div> 
                        <div class="inputBox"> 
                            <input type="password" name="pwdrepeat" required> <i> Repeat Password</i> 
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