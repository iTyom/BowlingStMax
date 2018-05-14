<!DOCTYPE html>
<html lang="en">

  <head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <script type='text/javascript' src="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
      <script src="js/stylish-portfolio.js"></script>


    <!-- Custom Fonts -->
    <!--<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="../jquery-3.3.1.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Template</title>



    <?php

         try {
            $bdd = new PDO('mysql:host=localhost;dbname=Bowling;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    ?>
    <?php

    ?>
  </head>

  <body>
<?php
session_start();
if (isset($_SESSION['mail'])){
  ?>

    <div style="width: 1000px; margin-left: 50px;">
      <div id="btnPanelAdmin">
        Voir le panel admin
      </div>
      <div id="btnPanelHoraire">
        Voir le panel horaire
      </div>
        <div id="panelAdmin" style="display: none; width: 300px;">

          <h3 style="width:200px">Compte administrateur :</h3>
          <?php
            $user = $bdd->query("SELECT * FROM Tab_User");

          ?>
          <table border=2 width=200px color=white >
          <tr>
            <td class="ligne_tab">Compte</td>
          </tr>
          <?php while ($donnees = $user->fetch()) {
            echo '<tr><td class="ligne_tab">'.$donnees['Prenom_User']; ?> <?php echo $donnees['Nom_User'].'</td><td><a href="deleteUser.php?id='.$donnees['ID_User'].'">Supprimer</a></td></tr>';
          }?>
          </table>

          <form action="addUser.php" method="POST" style="width:200px;">
            Prenom: <input type="text" name="prenom" value="" />
            Nom: <input type="text" name="nom" value="" />
            Password: <input type="password" name="mdp" value="" />
            Retapez votre password: <input type="password" name="mdp2" value="" />
            Mail: <input type="email" name="mail" value="" />
            Téléphone: <input type="tel" name="tel" value="" />
            <input type="submit" name="addAdmin" value="Ajouter un admin" />
          </form>

        </div>
        <div id="panelHoraire" style="display: none; width: 300px;">
          <h3 style="width:200px">Modifier les horaires :</h3>
          <?php
            $horaire = $bdd->query("SELECT * FROM Horaire");
          ?>
          <table border=2 width=200px color=white >
          <tr>
            <td class="ligne_tab">Libellé horaire</td>
            <td class="ligne_tab">Ouverture</td>
            <td class="ligne_tab">Fermeture</td>
          </tr>
          <?php while ($donnees = $horaire->fetch()) {
            echo '<tr><td class="ligne_tab">'.$donnees['Libelle_Horaire'].'</td><td>'.$donnees['Horaire_Debut'].'</td><td>'.$donnees['Horaire_Fin'].'</td><td><a href="deleteHoraire.php?id='.$donnees['ID_Horaire'].'">Supprimer</a></td></tr>';
          }?>
          </table>

          <form action="addHoraire.php" method="POST" style="width:200px;">
            Libellé horaire: <input type="text" name="libelle" value="" />
            heure d'ouverture: <input type="text" name="ouverture" value="" />
            heure de fermeture: <input type="text" name="fermeture" value="" />
            <input type="submit" name="addHoraire" value="Ajouter une horaire" />
          </form>
        </div>
    </div>
    <!-- Bootstrap Core CSS -->

    <script>
      $("#btnPanelAdmin").click(function() {
        $("#panelAdmin").css("display", "inline");
        $("#panelHoraire").css("display", "none");
      });
      $("#btnPanelHoraire").click(function() {
        $("#panelAdmin").css("display", "none");
        $("#panelHoraire").css("display", "inline");
      });

    </script>
  <?php
  }
  else {
    echo "Vous n'êtes pas connecté";
  }
    ?>
  </body>
</html>
