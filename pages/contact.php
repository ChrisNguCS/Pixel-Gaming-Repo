<?php
    include_once 'innerHeader.php';
?>
    <title>Contact Us</title>
    <link rel="stylesheet" href="../css/contact.css"> 

    <div class="banner">
        <div class="contact"> 
            <div class="content"> 
                <h2>Contact Us</h2> 
                    <div class="form"> 
                        <div class="inputBox"> 
                            <input type="text" required> <i>Username</i> 
                        </div> 
                        <div class="inputBox"> 
                            <input type="email" required> <i>Email</i> 
                        </div> 
                        
                        <textarea name="message" className='msg' rows="8" placeholder='Your Message'></textarea>
                        
                        <div class="inputBox"> 
                        <input type="submit" value="Submit"> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div>
</body>
</html>