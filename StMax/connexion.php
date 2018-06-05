<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Connexion</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">
      <link rel="stylesheet" type="text/css" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
      <script type='text/javascript' src="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>



    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../jquery-3.3.1.min.js"></script>

    <?php include("db.php"); ?>

  </head>

  <body>
    <form action="connexion.php" method="post">
        mail: <input type="text" name="mail" value="" />

        Mot de passe: <input type="password" name="mdp" value="" />

        <input type="submit" name="connexion" value="Connexion" />
    </form>
    <?php
/*
Page: connexion.php
*/
if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    if(empty($_POST['mail'])) {
        echo "Le champ Mail est vide.";
    } else {
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['mdp'])) {
            echo "Le champ Mot de passe est vide.";
        } else {
            $mail = htmlentities($_POST['mail'], ENT_QUOTES, "ISO-8859-1"); // le htmlentities() passera les guillemets en entités HTML, ce qui empêchera les injections SQL
            $mdp = $_POST['mdp'];

            $mdp = md5($mdp);
                $req = $bdd->prepare("SELECT * FROM user WHERE mail_user = :mail AND password_user = :mdp");
                $req->execute(array(
                  'mail' => $mail,
                  'mdp' => $mdp
                ));
                $resultat = $req->fetch();


                $isPasswordCorrect = password_verify($mdp, $resultat['password_user']);

                if (!$resultat)
                {
                    echo 'Mauvais identifiant ou mot de passe !';
                }
                else
                {
                    if ($mdp == $resultat['password_user']) {
                        $_SESSION['mail'] = $mail;
                        //header('Location: /admin.php');
                        echo "<script type='text/javascript'>document.location.replace('admin.php');</script>";

                    }
                    else {
                        echo 'Mauvais identifiant ou mot de passe !';
                    }
                }
            }
        }
    }
?>
  </body>
</html>
