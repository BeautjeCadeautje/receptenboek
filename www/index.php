<!DOCTYPE html>
<head>
    <link href="style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Sims4 Expansion packs</title>
</head>

<body>
<div class="top-right-image">
        <img src="c:\Users\isabe\OneDrive\Bureaublad\school blok3\front-end\images\plumbob.webp" alt="Top Right Image">
    </div>
    <?php

require 'database.php';

//de sql query  
$sql = "SELECT * FROM `welsh_eten`";
$result = mysqli_query($conn,$sql);
$welsh_eten = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<?php foreach($welsh_eten as $recept): ?>
  <p><?php echo $recept["naam_gerecht"] ?></p>
<?php endforeach; ?>
</body>

