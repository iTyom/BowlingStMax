<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administration</title>


    <?php include("db.php"); ?>

    
  </head>

  <body>
<?php

if (isset($_SESSION['mail'])){
  ?>

    <div style="width: 1000px; margin-left: 50px;">
      <div id="btnPanelAdmin">
        Voir le panel admin
      </div>
      <div id="btnPanelHoraire">
        Voir le panel horaire
      </div>
      <div id="btnPanelTarif">
        Voir le panel tarif
      </div>
        <div id="panelAdmin" style="display: none; width: 300px;">

          <h3 style="width:200px">Compte administrateur :</h3>
          <?php
            $user = $bdd->query("SELECT * FROM user");

          ?>
          <table border=2 width=200px color=white >
          <tr>
            <td class="ligne_tab">Compte</td>
          </tr>
          <?php while ($donnees = $user->fetch()) {
            echo '<tr><td class="ligne_tab">'.$donnees['prenom_user']; ?> <?php echo $donnees['nom_user'].'</td><td><a href="deleteUser.php?id='.$donnees['id_user'].'">Supprimer</a></td></tr>';
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
            $horaire = $bdd->query("SELECT * FROM horaire");
            $jeux = $bdd->query("SELECT * FROM jeux")
          ?>
          <table border=2 width=200px color=white >
          <tr>
            <td class="ligne_tab">Libellé horaire</td>
            <td class="ligne_tab">Ouverture</td>
            <td class="ligne_tab">Fermeture</td>
          </tr>
          <?php while ($donnees = $horaire->fetch()) {
            echo '<tr><td class="ligne_tab">'.$donnees['libelle_horaire'].'</td><td>'.$donnees['horaire_debut'].'</td><td>'.$donnees['horaire_fin'].'</td><td><a href="deleteHoraire.php?id='.$donnees['id_horaire'].'">Supprimer</a></td></tr>';
          }?>
          </table>

          <form action="addHoraire.php" method="POST" style="width:200px;">
            <!-- Libellé horaire: <input type="text" name="libelle" value="" /> -->
            <select name="libelle">
              <option value="semaine">En semaine</option>
              <option value="samedi">Samedi</option>
              <option value="dimanche">Dimanche</option>
              <option value="formuleBL">Formule Bowling & Laser</option>
            </select>
            <select name="jeux">
              <?php while ($donneesJeux = $jeux->fetch()) {
                echo '<option value="'.$donneesJeux['id_jeux'].'">
                        '.$donneesJeux['nom_jeux'].'
                      </option>';
              }
              ?>
            </select><br />
            heure d'ouverture: <input type="text" name="ouverture" value="" />
            heure de fermeture: <input type="text" name="fermeture" value="" />
            <input type="submit" name="addHoraire" value="Ajouter une horaire" />
          </form>
        </div>
        <div id="panelTarif" style="display: none; width: 300px;">
          <h3 style="width:200px">Modifier les tarif :</h3>
          <?php
            $tarif = $bdd->query("SELECT * FROM tarif");
            $jeux = $bdd->query("SELECT * FROM jeux")

          ?>
          <table border=2 width=200px color=white >
          <tr>
            <td class="ligne_tab">Libellé tarif</td>
            <td class="ligne_tab">Valeur</td>
          </tr>
          <?php while ($donnees = $tarif->fetch()) {
            echo '<tr><td class="ligne_tab">'.$donnees['libelle_tarif'].'</td><td>'.$donnees['valeur_tarif'].'</td><td><a href="deleteTarif.php?id='.$donnees['id_tarif'].'">Supprimer</a></td></tr>';
          }?>
          </table>

          <form action="addTarif.php" method="POST" style="width:200px;">
            <!-- Libellé horaire: <input type="text" name="libelle" value="" /> -->
            <select name="libelleTarif">
              <option value="semaine">En semaine</option>
              <option value="samedi">Samedi</option>
              <option value="dimanche">Dimanche</option>
              <option value="formuleBL">Formule Bowling & Laser</option>
            </select>
            <select name="jeuxTarif">
              <?php while ($donneesJeux = $jeux->fetch()) {
                echo '<option value="'.$donneesJeux['id_jeux'].'">
                        '.$donneesJeux['nom_jeux'].'
                      </option>';
              }
              ?>
            </select>
            <br />
            valeur du tarif: <input type="text" name="valeurTarif" value="" />
            <input type="submit" name="addTarif" value="Ajouter un tarif" />
          </form>
        </div>
    </div>
    <!-- Bootstrap Core CSS -->

    <script>
      $("#btnPanelAdmin").click(function() {
        $("#panelAdmin").css("display", "inline");
        $("#panelHoraire").css("display", "none");
        $("#panelTarif").css("display", "none");
      });
      $("#btnPanelHoraire").click(function() {
        $("#panelTarif").css("display", "none");
        $("#panelAdmin").css("display", "none");
        $("#panelHoraire").css("display", "inline");
      });
      $("#btnPanelTarif").click(function() {
        $("#panelHoraire").css("display", "none");
        $("#panelAdmin").css("display", "none");
        $("#panelTarif").css("display", "inline");
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
