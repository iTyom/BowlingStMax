<?php
try {
   $bdd = new PDO('mysql:host=localhost;dbname=id5237943_bowling2;charset=utf8', 'id5237943_rootroot', 'rootroot');
}
catch (Exception $e)
{
   die('Erreur : ' . $e->getMessage());
}
if (isset($_POST['libelleTarif']) && isset($_POST['valeurTarif']))
{
  $libelle = $_POST['libelleTarif'];
  $valeur = $_POST['valeurTarif'];
  $jeux = $_POST['jeuxTarif'];
  $id = null;

    $req = $bdd->prepare("INSERT INTO `tarif` (`id_tarif`, `libelle_tarif`, `valeur_tarif`, `id_jeux`) VALUES (:id, :libelle, :valeur, :jeux)");
    $req->execute(array(
      'id' => $id,
      'libelle' => $libelle,
      'valeur' => $valeur,
      'jeux' => $jeux
    ));
}
header('Location: admin.php');
?>
