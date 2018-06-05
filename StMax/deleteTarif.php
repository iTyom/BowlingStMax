<?php
  try {
     $bdd = new PDO('mysql:host=localhost;dbname=id5237943_bowling2;charset=utf8', 'id5237943_rootroot', 'rootroot');
  }
  catch (Exception $e)
  {
     die('Erreur : ' . $e->getMessage());
  }
  $bdd->query("DELETE FROM tarif WHERE id_tarif = ".$_GET['id']);
  header('Location: admin.php');
?>
