<?php include("db.php"); ?>

<?php

  $bdd->query("DELETE FROM horaire WHERE id_horaire = ".$_GET['id']);
  header('Location: admin.php');
?>
