<?php include("db.php"); ?>

<?php
  
  if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['mdp']))
  {
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $id = null;
    if($mdp == $mdp2)
    {
      $mdp = md5($mdp);
      $req = $bdd->prepare("INSERT INTO user (`id_user`, `prenom_user`, `nom_user`, `mail_user`, `tel_user`, `password_user`) VALUES(:id, :prenom, :nom, :mail, :tel, :password)");
      $req->execute(array(
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'mail' => $mail,
        'tel' => $tel,
        'password' => $mdp
      ));
    }
    else
    {
      echo 'Les deux mots de passe que vous avez rentrés ne correspondent pas.';
    }
  }
  header('Location: admin.php');
?>
