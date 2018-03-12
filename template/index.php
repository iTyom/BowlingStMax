<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Template</title>

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

    <?php
         try {
            $bdd = new PDO('mysql:host=localhost;dbname=Bowling;charset=utf8', 'root', 'root');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    ?>

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">Start Bootstrap</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#page-top">Home</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#about">Horaire & Prix</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#services">Nos formules</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#portfolio">Autres activités</a>
        </li>
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="#contact">Plan</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex header">
      <div class="container text-center my-auto">
        <h1 class="mb-1">Bowling Saint Maximin</h1>

          <a class="btn btn-primary btn-xl js-scroll-trigger" data-toggle="modal" data-target="#myModal">Strike</a>
          <div class="container">

              <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                <?php
                  $reqSemaine = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Semaine'");
                  $reqVacance = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Semaine Vacances'");
                  $reqSamedi = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Samedi'");
                  $reqSamediVacance = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Samedi vacances'");
                  $reqDimanche = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Dimanche'");
                  $reqDimancheVacance = $bdd->query("SELECT * FROM Horaire WHERE Libelle_Horaire = 'Dimanche vacances'");
                ?>
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">

                    <button id="btnCloseModal" type="button" class="close" data-dismiss="modal">&times;</button>

                  </div>
                    <div class="modal-body">
                          <p>
                            Location de chaussure : Ajoutez 2€ sur la première partie - Port de chaussure obligatoire
                          </p>
                          <table border= 2 width=100% color=white style="margin-top: 50px;">
                            <th>
                              <td class="ligne_tab">Toute l'année</td>
                              <td class="ligne_tab">Vacances scolaires</td>
                            </th>
                            <tr height=25>
                              <td class="ligne_tab">Du mardi au vendredi</td>
                              <td class="ligne_tab"><?php while ($donnees = $reqSemaine->fetch()) { echo $donnees['Horaire_Debut']; ?>h - <?php echo $donnees['Horaire_Fin'];}?>h</td>
                              <td class="ligne_tab"><?php while($donneesVacance = $reqVacance->fetch()) { echo $donneesVacance['Horaire_Debut'];?>h - <?php echo $donneesVacance['Horaire_Fin'];}?>h</td>
                            </tr>
                            <tr height=25>
                              <td class="ligne_tab">Samedi</td>
                              <td class="ligne_tab"><?php while($donneesSamedi = $reqSamedi->fetch()) { echo $donneesSamedi['Horaire_Debut']; ?>h - <?php echo $donneesSamedi['Horaire_Fin'];}?>h</td>
                              <td class="ligne_tab"><?php while($donneesSamediVacance = $reqSamediVacance->fetch()) { echo $donneesSamediVacance['Horaire_Debut']; ?>h - <?php echo $donneesSamediVacance['Horaire_Fin'];}?>h</td>
                            </tr>
                            <tr height=25>
                              <td class="ligne_tab">Dimanche</td>
                              <td class="ligne_tab"><?php while($donneesDimanche = $reqDimanche->fetch()) { echo $donneesDimanche['Horaire_Debut']; ?>h - <?php echo $donneesDimanche['Horaire_Fin'];}?>h</td>
                              <td class="ligne_tab"><?php while($donneesDimancheVacance = $reqDimancheVacance->fetch()) { echo $donneesDimancheVacance['Horaire_Debut']; ?>h - <?php echo $donneesDimancheVacance['Horaire_Fin'];}?>h</td>
                            </tr>
                          </table>


                    </div>

                  </div>
                </div>

              </div>
            </div>

            </div>
        <!--<div id="containerBtnAccueil">
          <a id="linkAccueil" href="#about"><img class="js-scroll-trigger"/></a>
        </div>-->

      </div>
      <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-light" id="about">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">

        </div>
        <div id="containerTxtAccueil">

            <!-- <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a>-->
        </div>
      </div>

    </section>

    <!-- Services -->

    <!-- Callout -->
    <section class="callout">
      <div class="container text-center">
        <h2 class="mx-auto mb-5">Laser Blast</h2>
        <div class="button">

        </div>
      </div>
    </section>

    <!-- Portfolio -->
    <section class="content-section" id="portfolio">
      <div class="container">
        <div class="content-section-heading text-center">
          <h3 class="text-secondary mb-0">Autres</h3>
          <h2 class="mb-5">Activités</h2>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Attrape peluche</h2>
                  <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
                </span>
              </span>
            <div class="containerImage">
              <img class="img-fluid" src="../images/Peluche.JPG" alt="">
            </div>
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Baby-foot</h2></h2>
                  <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
                </span>
              </span>
            <div class="containerImage">
              <img class="img-fluid" src="../images/Baby.jpg" alt="">
            </div>
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Borne d'arcade</h2>
                  <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
                </span>
              </span>
            <div class="containerImage">
              <img class="img-fluid" src="../images/Arcade.jpg" alt="">
            </div>
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Boxer</h2>
                  <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
                </span>
              </span>
            <div class="containerImage">
              <img class="img-fluid" src="../images/Air-hockey.jpg" alt="">
            </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section id="containerBillard" class="content-section bg-primary text-white">
      <div class="container text-center">
        <h2 class="mb-4">Billard</h2>
        <p id="txtRegleBillard">
          Le joueur doit toujours toucher en premier une bille de son groupe, soit les pleines, soit les rayées
          (si le joueur «cassant» le triangle empoche une bille, il peut conserver le groupe auquel appartient cette bille ou bien choisir
          l'autre groupe en empochant obligatoirement une bille de ce groupe.
          Sinon le joueur adverse doit empocher obligatoirement une bille pour confirmer son groupe).
          Si le joueur empoche correctement une bille, il continue à jouer jusqu'à ce qu'il manque ou commette une faute (toucher une bille adverse en premier,
          ne toucher aucune billes, empocher la bille blanche). Après une faute, l'adversaire peut placer la blanche n'importe où sur la surface de jeu.
          Une fois toutes ses billes rentré le joueur doit empocher la bille noire numéro 8. Si la bille noire est empoché avant que le joueur n’est empoché toutes ses billes,
          le joueur perd la partie et la partie et terminé.
        </p>
      </div>
    </section>

    <section class="content-section bg-primary text-white text-center" id="services">
      <!--<div id="popup">
        <div id="containerTxtPopupPizza">
          Le contenu de ton popup
        </div>
      </div>-->
      <!-- ************************************* -->









      <!--***********************************-->
      <div class="text-center" style="width: 100%;">
        <div class="content-section-heading">
          <h2 class="mb-5">Nos formules</h2>
        </div>
        <div class="row text-center">
          <div id="containerBullePizza" class="col-lg-3 col-md-6 mb-5 mb-lg-0" >



              <div class="service-icon rounded-circle mx-auto mb-3" id="imgBullePizza"></div>
            <h4 class="txtBlack">
              <strong>Pizza</strong>
            </h4>


          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <div class="service-icon rounded-circle mx-auto mb-3" id="imgBulleAnniversaire"></div>
            <h4 class="txtBlack">
              <strong>Anniversaire</strong>
            </h4>
            <p class="txtBlack">Freshly redesigned for Bootstrap 4.</p>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <div class="service-icon rounded-circle mx-auto mb-3" id="imgBulleEntreprise"></div>
            <h4 class="txtBlack">
              <strong>Entreprise</strong>
            </h4>
            <p class="txtBlack">Millions of users</p>
          </div>
        </div>
      </div>
    </section>
    <script>
    /*$("#containerBullePizza").click(function(){
      console.log( "You clicked a paragraph!" );
      $("#popup").css("display", "block");
      $("#popup").css("visibility", "visible");
      $("body").css("background", "rgba(0,0,0,0.8)");
      $("body").css("filter", "blur(4px)");
      $("body").css("-o-filter", "blur(4px)");
      $("body").css("-ms-filter", "blur(4px)");
      $("body").css("-moz-filter", "blur(4px)");
      $("body").css("-webkit-filter", "blur(4px)");
      $("#popup").css("")

      $("#popup").css("background", "rgba(0,0,0,1)");
      $("#popup").css("filter", "none");
      $("#popup").css("-o-filter", "none");
      $("#popup").css("-ms-filter", "none");
      $("#popup").css("-moz-filter", "none");
      $("#popup").css("-webkit-filter", "none");
    })*/
    $("#containerBullePizza").modal();





    </script>

    <!-- Map -->
    <section id="contact" class="map">
      <!--<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>-->
      <div id="map">

      </div>
      <script>
      function initMap() {
        var uluru = {lat: 43.4598198, lng: 5.862670200000025};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHSOpDTY0Uoo1r04jBQJxr4o2tUEc8nT4&callback=initMap">
    </script>

    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
        <p class="text-muted small mb-0">Copyright &copy; Your Website 2017</p>
      </div>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

  </body>

</html>
