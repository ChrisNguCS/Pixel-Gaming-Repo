<?php
include_once 'innerHeader.php';
?>
<link rel="stylesheet" href="../css/tournament.css">
<title>Melee Tournaments</title>
<div class="banner">
    <div class="headerContainer">
        <img src="../images/ssbuHeader.webp" alt="" class="header">
        <a href="../pages/createTournament.php">
        <div class="createTournament">
        <p>Create Tournament +</p>
        </div>
        </a>
    </div>

    <div class="titleCard"  style="width: 600px; top: 200px; left: 150px;">
            <img src="../images/melee.png" alt="" class="thumbnail" style="height:auto; width: 150px;">
        <h2 class="title">Upcoming Tournaments</h2>
    </div>

            <?php
                require_once'../includes/dbh.inc.php';
                $sql = "SELECT * FROM games WHERE gameName='Super Smash Brothers Melee';";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="tourneyBox">'.
                        '<h2>$'.$row["gameCredits"] * $row["gamePlayerCount"].' GUARANTEED '.$row["gameTeamsize"].' '.$row["gameGamemode"].'</h2>'
                        .'<p>'.$row["gameTime"].'</p>'
                        .'<div class="tourneyStats">
                        <div class="tourneyInfo">
                        <small>ENTRY</small><p>'.
                        $row["gameCredits"].' Credits</p>
                        </div>
                        <div class="tourneyInfo">
                        <small>Team Size</small>
                        <p>'.$row["gameTeamsize"].'</p>
                        </div>
                        <div class="tourneyInfo">
                        <small>Region</small><p>'.$row["gameRegion"].'</p>
                        </div>
                        <div class="tourneyInfo">
                            <small>Players</small>
                            <p>'.$row["gamePlayerCount"]
                        ."</p>
                        </div>
                        </div>
                        <a href='#'>View Tournament</a></div>"
                        ;
                    }
                }
            ?>
            
        </div>
    </div>
</div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>