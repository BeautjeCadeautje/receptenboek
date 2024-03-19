<!DOCTYPE html>
<?php
require 'database.php';
$sql = "SELECT * FROM `welsh_eten`";
$result = mysqli_query($conn, $sql);
$welsh_eten = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<head>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>RECEPTENBOEK</title>
</head>

<body>
    <div class="top-right-image">
        <img src="">
    </div>

    <div class="top">
        <a href="" style="color:black;">CONTACT</a>
        <h1>RECEPTENBOEK</h1>
    </div>

    <div class="container">
        <div class="box">
            <?php foreach ($welsh_eten as $recept) : ?>
                <p><?php echo $recept["naam_gerecht"] ?></p>
            <?php endforeach; ?>

            <img src="" alt="gerecht" style=" width:300px;height:400px;"></a><br>
            <a href="https://www.ea.com/games/the-sims/the-sims-4/store/addons/the-sims-4-high-school-years" style="color:black;">RECEPT</a>
        </div>
    </div>


</body>