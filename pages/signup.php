<?php
    include_once 'innerHeader.php';
?>
    <link rel="stylesheet" href="../css/login.css">
    <title>Sign Up</title>
    <div class="banner">
        <div class="signin"> 
            <div class="content"> 
                <h2>Sign Up</h2> 
                    <div class="form"> 
                        <form action="../includes/signup.inc.php" method="post">
                        <div class="inputBox"> 
                            <input type="text" name="username" required> <i>Username</i> 
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