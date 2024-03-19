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
