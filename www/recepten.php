<?php

$sql = "SELECT * FROM `welsh_eten` LIMIT 9"; // Haal de eerste twee gerechten uit de database
require 'database.php';
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>RECEPTENBOEK</title>
</head>

<body>
    <div class="top-right-image">
        <img src="www/Wales_national_football_team_logo.svg.png">
    </div>

    <div class="top">
        <a href="" style="color:black;">CONTACT</a>
        <h1>RECEPTENBOEK</h1>
    </div>

    <div class="container">
        <?php while ($gerecht = mysqli_fetch_assoc($result)) : ?>
            <div class="box">
                <h1><?php echo $gerecht["naam_gerecht"] ?></h1>
                <img src="" alt="gerecht" style=" width:300px;height:400px;"></a><br>
                <a href="https://www.ea.com/games/the-sims/the-sims-4/store/addons/the-sims-4-high-school-years" style="color:black;">RECEPT</a>
            </div>
        <?php endwhile; ?>
    </div>


</body>
<footer>
    <div class="bottom">
        <p>follow us on social media!</p><br>
        <a href="https://www.instagram.com/" target="_blank" class="social-link"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
        <a href="https://www.youtube.com/" target="_blank" class="social-link"><i class="fab fa-youtube"></i></a>
    </div>
</footer>
</html>