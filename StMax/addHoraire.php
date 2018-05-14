<?php
try {
   $bdd = new PDO('mysql:host=localhost;dbname=Bowling;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
   die('Erreur : ' . $e->getMessage());
}
if (isset($_POST['libelle']) && isset($_POST['ouverture']) && isset($_POST['fermeture']))
{
  $libelle = $_POST['libelle'];
  $ouverture = $_POST['ouverture'];
  $fermeture = $_POST['fermeture'];
  $id = "";
    //$query = $bdd->query("INSERT INTO Tab_User VALUES('', '$nom', '$prenom', '$mail', $tel, '$mdp')");
    $req = $bdd->prepare("INSERT INTO Horaire VALUES(:id, :libelle, :ouverture, :fermeture)");
    $req->execute(array(
      'id' => $id,
      'libelle' => $libelle,
      'ouverture' => $ouverture,
      'fermeture' => $fermeture
    ));
}
header('Location: admin.php');
?>
