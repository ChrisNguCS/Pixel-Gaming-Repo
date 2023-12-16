<?php
    include_once 'header.php';
?>

    <link rel="stylesheet" href="css/styles.css">
    <!-- HOME BANNER -->
    <div class="banner">
        <div class="bg">
            <div class="content">
                <h2>Pixel Gaming. </h2><br>
                <p>Game and earn money</p>
            </div>
            <div class="imgContainer">
                <div class="gradient"></div>
                <img src="images/masterchief.png" class="masterChief">
            </div>

        </div>
    </div>
    <!-- ABOUT SECTION -->
    <div class="about" id="about"> <!-- Scrolls to about because of ID -->
        <div class="contentBx">
            <h2> About Pixel Gaming </h2>
            <p> Pixel Gaming is an online gaming platform that fosters competitive play,
                allowing you to challenge your skills against other competitors.
                While our current selection features a limited number of playable games,
                you can explore the game list to find your preferred challenges. </p>
            <a href="#">Learn more </a>
        </div>
        <img src="images/kirby.png" class="kirby">
    </div>
    <!-- List of Games -->
    <div class="games" id="games"> <!-- Games Scroll-->
        <h2> Featured Games </h2>
        <ul>
            <li class="list active" data-filter="all">All Games</li>
            <li class="list" data-filter="pc"> PC Exclusive Games</li>
            <li class="list" data-filter>Upcoming Games</li>
        </ul>
        <div class="cardBx">
            <div class="shine column">
                <div class="card" data-item="pc">
                    <figure>
                        <a href="pages/halo.php">
                            <img src="images/Haloinfinite.png" class="gameImg" style="width: 100%;">
                        </a>
                    </figure>
                </div>
            </div>
            <div class="shine column">
                <div class="card" data-item="pc">
                    <figure>
                        <a href="pages/ssbm.php">
                            <img src="images/melee.png">
                        </a>
                    </figure>
                </div>
            </div>

            <div class="shine column">
                <div class="card" data-item="pc">
                    <figure>
                        <a href="pages/smite.php">
                            <img src="images/smite.jpg">
                        </a>
                    </figure>
                </div>
            </div>

            <div class="shine column">
                <div class="card" data-item="pc">
                    <figure>
                        <a href="pages/ssbu.php">
                            <img src="images/ultimate.jpg">
                        </a>
                    </figure>
                </div>
            </div>

            <div class="shine column">
                <div class="card" data-item="pc">
                    <figure>
                        <a href="pages/gears.php">
                            <img src="images/gears.png">
                        </a>
                    </figure>
                </div>
            </div>
            <div class="shine column">
                <div class="card" data-item="pc">
                    <figure>
                        <a href="pages/cod.php">
                            <img src="images/cod.jpg">
                        </a>
                    </figure>
                </div>
            </div>
            <div class="shine column">
                <div class="card" data-item="pc">
                    <figure>
                        <a href="pages/valorant.php">
                            <img src="images/valorant.jpg">
                        </a>
                    </figure>
                </div>
            </div>

            <div class="shine column">
                <div class="card" data-item="pc">
                    <figure>
                        <a href="pages/rocketLeague.php">
                            <img src="images/rocketleague.jpg">
                        </a>
                    </figure>
                </div>
            </div>

            <div class="shine column">
                <div class="card" data-item="pc">
                    <figure>
                        <a href="pages/overwatch.php">
                            <img src="images/overwatch.jpg">
                        </a>
                    </figure>
                </div>
            </div>

            <div class="shine column">
                <div class="card" data-item="pc">
                    <figure>
                        <a href="pages/fortnite.php">
                            <img src="images/fortnite.jpg">
                        </a>
                    </figure>
                </div>
            </div>
        </div>


            <script>
                /* sticky nav bar */
                window.addEventListener('scroll', function () {
                    var header = document.querySelector('header');
                    header.classList.toggle('sticky', window.scrollY > 0);

                });

                /* filterable cards */

                let list = document.querySelectorAll('.list');
                let card = document.querySelectorAll('.card');

                for (let i = 0; i < list.length; i++) {
                    list[i].addEventListener('click', function () {
                        for (let j = 0; j < list.length; j++) {
                            list[j].classList.remove('active');
                        }
                        this.classList.add('active');

                        let dataFilter = this.getAttribute('data-filter');
                        for (let k = 0; k < card.length; k++) {
                            card[k].classList.remove('active');
                            card[k].classList.add('hide');
                            if (card[k].getAttribute('data-item') == dataFilter || dataFilter == 'all') {
                                card[k].classList.remove('hide');
                                card[k].classList.add('active');
                            }
                        }
                    })
                }
            </script>
</body>

</html>