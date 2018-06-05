<?php include("db.php"); ?>

<?php

  $bdd->query("DELETE FROM user WHERE id_user = ".$_GET['id']);
  header('Location: admin.php');
?>
