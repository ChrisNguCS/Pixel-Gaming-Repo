<?php
    include_once 'innerHeader.php';
?>  
<script>document.getElementById("date").min = new Date().toISOString().split("T")[0];
</script>
    <link rel="stylesheet" href="../css/createTournament.css">
    <title>Log In</title>
    <div class="banner">
        <div class="signin"> 
            <div class="content"> 
                <h2>Create Tournament</h2> 
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
                <form class="form" action="../includes/createTournament.inc.php" method="post"> 
                    <select name="gamename" id="gamename" class="selectOption">
                        <option value="null">Please Select Game</option>
                        <option value="Halo Infinite">Halo Infinite</option>
                        <option value="Modern Warfare III">Modern Warfare III</option>
                        <option value="Super Smash Brothers Melee">Super Smash Brothers Melee</option>
                        <option value="Valorant">Valorant</option>
                        <option value="Smite">Smite</option>
                        <option value="Rocket League">Rocket League</option>
                        <option value="Overwatch">Overwatch</option>
                        <option value="Super Smash Brothers Ultimate">Super Smash Brothers Ultimate</option>
                        <option value="Gears of War 3">Gears of War 3</option>
                        <option value="Fortnite">Fortnite</option>
                    </select>
                    <select name="gamecredits" id="gamecredits" class="selectOption">
                        <option value="null">Please Select Entry Credits</option>
                        <option value="1">1 Credit</option>
                        <option value="2">2 Credit</option>
                        <option value="3">3 Credit</option>
                        <option value="4">4 Credit</option>
                        <option value="5">5 Credit</option>
                    </select>
                    <select name="gamemode" id="gamemode" class="selectOption">
                        <option value="null">Please Select Gamemode</option>
                        <option value="SLAYER">Slayer(Halo)</option>
                        <option value="CTF">Capture The Flag(Halo)</option>
                        <option value="SND">Search and Destroy(MWIII)</option>
                        <option value="COMPETITIVE">Competitive(Valorant)</option>
                        <option value="SINGLES">Singles(Smash)</option>
                        <option value="DOUBLES">Doubles(Smash)</option>
                        <option value="ARENA">Arena(Smite)</option>
                        <option value="PUSH">Push(Overwatch)</option>
                        <option value="BOX FIGHTS">Box Fights(Fortnite)</option>
                        <option value="DODGEBALL">Dodgeball(Gears of War 3)</option>
                        <option value="SOCCAR">Soccar(Rocket League)</option>
                    </select>
                    <select name="teamsize" id="teamsize" class="selectOption">
                        <option value="null">Please Select Team Size</option>
                        <option value="1v1">1v1</option>
                        <option value="2v2">2v2</option>
                        <option value="4v4">4v4</option>
                    </select>
                    <select name="playercount" id="playercount" class="selectOption">
                        <option value="null">Please Select Player Count</option>
                        <option value="16">16</option>
                        <option value="32">32</option>
                        <option value="64">64</option>
                        <option value="128">128</option>
                    </select>
                    <select name="region" id="region" class="selectOption">
                        <option value="null">Please Select Region</option>
                        <option value="NA">NA</option>
                        <option value="EU">EU</option>
                        <option value="NA+EU">NA+EU</option>
                        <option value="OCE">OCEANA</option>
                    </select>
                    <input name="gametime" type="datetime-local" id="Test_DatetimeLocal">
                    <input type="submit" name="submit" value="Submit"> 
                </form> 
            </div> 
        </div> 
    </div>

</body>
</html>