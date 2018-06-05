
<?php include("db.php"); ?>
<?php
if (isset($_POST['libelle']) && isset($_POST['ouverture']) && isset($_POST['fermeture']))
{
  $libelle = $_POST['libelle'];
  $jeux = $_POST['jeux'];
  $ouverture = $_POST['ouverture'];
  $fermeture = $_POST['fermeture'];
  $id = null;

    $req = $bdd->prepare("INSERT INTO horaire (`id_horaire`, `libelle_horaire`, `horaire_debut`, `horaire_fin`, `id_jeux`) VALUES(:id, :libelle, :ouverture, :fermeture, :jeux)");
    $req->execute(array(
      'id' => $id,
      'libelle' => $libelle,
      'jeux' => $jeux,
      'ouverture' => $ouverture,
      'fermeture' => $fermeture
    ));
}
header('Location: admin.php');
?>
