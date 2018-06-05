<?php include("db.php"); ?>

<?php

  $bdd->query("DELETE FROM tarif WHERE id_tarif = ".$_GET['id']);
  header('Location: admin.php');
?>
