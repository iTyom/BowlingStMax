<?php




  try {
     $bdd = new PDO('mysql:host=localhost;dbname=Bowling;charset=utf8', 'root', 'root');
  }
  catch (Exception $e)
  {
     die('Erreur : ' . $e->getMessage());
  }
  if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['mdp']))
  {
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $id = "";
    if($mdp == $mdp2)
    {
      $mdp = md5($mdp);
      //$query = $bdd->query("INSERT INTO Tab_User VALUES('', '$nom', '$prenom', '$mail', $tel, '$mdp')");
      $req = $bdd->prepare("INSERT INTO Tab_User VALUES(:id, :nom, :prenom, :mail, :tel, :password)");
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
