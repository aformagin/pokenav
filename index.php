<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PokeNav - A School Project</title>
        <link rel="icon" href="imgs/pokenav.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/pokeball.css">
        <!-- Bootstrap javascript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body class="poke-body">
        <!--This is the start of the Nav bar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-min page-contents">

            <a class="navbar-brand" href="index.php"><img src="imgs/pokenav.png" style="max-height: 75px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="dex.php">Pokedex</a>
                    </li>

                    <!-- Dropdown menu within the nav bar -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php
                            // if the user is logged in we show the logout button, else we show the login/register buttons.
                            if (isset($_SESSION['id'])) {
                                echo '<a class="dropdown-item" href="logout.php">Logout<span class="sr-only">(current)</span></a>';
                            } else {
                                echo '<a class="dropdown-item" href="login.php">Login / Register<span class="sr-only">(current)</span></a>';
                            }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!--End of Nav Bar-->
        <div class="spacing">
            <div class="container page-contents shadow-sm p-3 mb-5 bg-body rounded bg-light" style="padding: 2%;">
                <description>
                    <ul style="list-style-type:none;">
                        <li><h3>About Us</h3><hr><p>Our website is a Pok??mon information catalogue based on the popular
                                series of Pok??mon games. On the website, we will have various pages that will offer the
                                user, information on the game mechanics and valuable information on each Pok??mon.
                                Some of these pages will include a randomized guessing games and display the statistics
                                for many of the Pok??mon! </p></li>
                        <li><h3>Pokedex</h3><hr><p>Search for your favourites! <a href="dex.php" >Pokedex</a></p></li>
                    </ul>
                </description>
            </div>
        </div>
    </body>
</html>
