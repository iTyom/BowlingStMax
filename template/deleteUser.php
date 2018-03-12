<?php
  try {
     $bdd = new PDO('mysql:host=localhost;dbname=Bowling;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
     die('Erreur : ' . $e->getMessage());
  }
  $bdd->query("DELETE FROM Tab_User WHERE ID_User = ".$_GET['id']);
  header('Location: admin.php');
?>
