<?php
    include_once 'innerHeader.php';
?>
    <link rel="stylesheet" href="../css/login.css">
    <title>Log In</title>
    <div class="banner">
        <div class="signin"> 
            <div class="content"> 
                <h2>Sign In</h2> 
                    <div class="form"> 
                        <div class="inputBox"> 
                            <input type="text" required> <i>Username</i> 
                        </div> 
                        <div class="inputBox"> 
                            <input type="password" required> <i>Password</i> 
                        </div> 
                        <div class="links"> 
                            <a href="./forgotPassword.php">Forgot Password</a> 
                            <a href="./signup.php">Sign Up</a> 
                        </div> 
                        <div class="inputBox"> 
                        <input type="submit" value="Login"> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div>

</body>
</html>