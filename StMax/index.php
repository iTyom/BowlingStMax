<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bowling Saint Maximin</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>

    <script type="application/ld+json">
        {
          "@context": "http://schema.org",
          "@type": "Organization",
          "url": "http://www.example.com",
          "name": "Unlimited Ball Bearings Corp.",
          "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-401-555-1212",
            "contactType": "Customer service"
          },
          "openingHoursSpecification": [
              {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                  "Monday",
                  "Tuesday",
                  "Wednesday",
                  "Thursday",
                  "Friday"
                ],
                "opens": "14:00",
                "closes": "23:00"
              },
              {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                  "Saturday"
                ],
                "opens": "10:00",
                "closes": "01:00"
              },
              {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                  "Sunday"
                ],
                "opens": "14:00",
                "closes": "22:00"
              }
            ]
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117114717-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-117114717-1');
    </script>


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

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#000"
        },
        "button": {
          "background": "#f1d600"
        }
      },
      "showLink": false,
      "content": {
        "message": "Nous utilisons des cookies pour vous offrir la meilleure expérience possible sur notre site web. \nEn continuant à parcourir ce site, vous acceptez l’utilisation des cookies.",
        "dismiss": "Ok!"
      }
    })});
    </script>

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <a class="menu-toggle rounded" href="#">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top">Menu</a>
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
        <li class="sidebar-nav-item">
          <a class="js-scroll-trigger" href="connexion.php">Connexion</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="masthead d-flex header">
      <div class="container text-center my-auto">
        <h1 class="mb-1">Bowling Saint Maximin</h1>

          <a class="btn btn-primary btn-xl js-scroll-trigger" data-toggle="modal" data-target="#myModal">Découvrir le Bowling</a>
          <div class="container" >

              <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog" >
              <div class="modal-dialog" >
                <?php
                  $reqSemaine = $bdd->query("SELECT * FROM horaire WHERE libelle_horaire = 'Semaine'");
                  $reqSamedi = $bdd->query("SELECT * FROM horaire WHERE libelle_horaire = 'Samedi'");
                  $reqDimanche = $bdd->query("SELECT * FROM horaire WHERE libelle_horaire = 'Dimanche'");
                  $reqFormuleBL = $bdd->query("SELECT * FROM horaire WHERE libelle_horaire = 'FormuleBL'");

                  $reqTarifSemaine = $bdd->query("SELECT * FROM tarif WHERE libelle_tarif = 'tarifSemaine'");
                  $reqTarifSamedi = $bdd->query("SELECT * FROM tarif WHERE libelle_tarif = 'tarifSamedi'");
                  $reqTarifDimanche = $bdd->query("SELECT * FROM tarif WHERE libelle_tarif = 'tarifDimanche'");
                  $reqTarifFormuleBL = $bdd->query("SELECT * FROM tarif WHERE libelle_tarif = 'tarifFormuleBL'");
                ?>
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">

                    <button id="btnCloseModal" type="button" class="close" data-dismiss="modal">&times;</button>

                  </div>
                    <div class="modal-body">

                          <div id="containerTxtAccueil">
                            Le bowling de Saint Maximin dans le Var (83), vous accueille du mardi au dimanche (voir le tableau ci-dessous pour les horaires). Il vous réserve de nombreuses activités variées ainsi que des évènements de folie, comme des karaokés organisés régulièrement.
                            Vous pouvez suivre les actualités du bowling et de ses environs sur notre page Facebook.<br /><br />
                            Venez passer de bon moment en famille ou entre amis au bowling de Saint Maximin. Avec ses 13 pistes informatisées et sa salle de laser game de 250 m2 vous aurez de l'espace pour vous amuser.
                            Vous y trouverez aussi des jeux d'arcades, un babyfoot, un panier de basket, un air hockey, ainsi que des 3 billards.<br /><br />
                            Nous vous proposons différentes formules, accessibles par les plus petits comme par les plus grands. Nous vous proposons une formule anniversaire, ou vous choisissez l'activité que vous préférez.
                            Ensuite, nous trouverez, une formule Pizza/ Bowling.<br /><br />
                            Si vous en avez marre de faire ridiculiser par vos amis, ne vous inquiétez pas nous avons la solution à votre problème.<br />
                            Nous vous proposons de prendre des cours de bowling avec le club de bowling Saint maximinois qui se réunit le mardi soir, le samedi et le dimanche matin pour les entrainements. La licence est à l'année. De plus, il organise régulièrement des mini tournois.
                            Pour plus de renseignements se rapprocher du gérant du bowling et de l'association.<br /><br />
                            Si le bowling n'est vraiment pas fait pour vous, alors vous pouvez vous tourner vers le laser Blast. <br /><br />
                            Prochainement, le bowling de saint Maximin va se diversifier et vous proposer un nouvel univers de jeux en réalité virtuel. Venez bientôt essayer une expérience incroyable avec 100 m2 de plateau pour rendre votre expérience encore plus réaliste.
                            N'hésitez pas après votre visite à nous laisser un petit commentaire sur notre page Facebook !!

                              <!-- <a class="btn btn-dark btn-xl js-scroll-trigger" href="#services">What We Offer</a>-->
                          </div>

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


    <section class="content-section bg-light" id="about.">
      <div class="container">

        <p class="textHoraire">Du mardi au vendredi</p>
          <?php while ($donnees = $reqSemaine->fetch()) { echo $donnees['horaire_debut']; ?>h - <?php echo $donnees['horaire_fin'];}?>h
          -
          <?php while($donneesTarifSemaine = $reqTarifSemaine->fetch()) { echo $donneesTarifSemaine['valeur_tarif']; }?>€
          <br /><br /><br />

          <p class="textHoraire">Samedi</p>
          <?php while($donneesSamedi = $reqSamedi->fetch()) { echo $donneesSamedi['horaire_debut']; ?>h - <?php echo $donneesSamedi['horaire_fin'];}?>h
          -
          <?php while($donneesTarifSamedi = $reqTarifSamedi->fetch()) { echo $donneesTarifSamedi['valeur_tarif']; }?>€
          <br /><br /><br />

          <p class="textHoraire">Dimanche et jours fériés</p>
          <?php while($donneesSamediVacance = $reqDimanche->fetch()) { echo $donneesSamediVacance['horaire_debut']; ?>h - <?php echo $donneesSamediVacance['horaire_fin'];}?>h
          -
          <?php while($donneesTarifDimanche = $reqTarifDimanche->fetch()) { echo $donneesTarifDimanche['valeur_tarif']; }?>€
          <br /><br /><br />

          <p class="textHoraire">Formule Bowling & Laser Blast</p>
          <?php while($donneesFormuleBL = $reqFormuleBL->fetch()) { echo $donneesFormuleBL['horaire_debut']; ?>h - <?php echo $donneesFormuleBL['horaire_fin'];}?>h
          -
          <?php while($donneesTarifFormuleBL = $reqTarifFormuleBL->fetch()) { echo $donneesTarifFormuleBL['valeur_tarif']; }?>€
          <br /><br /><br />

        </p>
        <p id="textLocation">
          Location de chaussure : Ajoutez 2€ sur la première partie - Port de chaussure obligatoire
        </p>
    </div>
    </section>
    <!-- Services -->

    <!-- Callout -->
    <section class="callout">
      <div class="container text-center">
        <h2 class="mx-auto mb-5">Laser Blast</h2>
        <a class="btn btn-primary btn-xl js-scroll-trigger" data-toggle="modal" data-target="#myModalLaser">Découvrir le Laser Blast</a>

        <div class="modal fade" id="myModalLaser" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">

                <button id="btnCloseModal" type="button" class="close" data-dismiss="modal">&times;</button>

              </div>
                <div class="modal-body">
                  <p>
                    Une aventure aux confins de la galaxie ...
                    Venez défier vos amis dans un vaisseau spatial de 400 m2!
                    Grâce à notre nouvelle génération de Laser vivez une expérience intense et unique. Votre gilet est plus léger et votre laser plus précis pour un meilleur confort de jeu.
                    Des salles qui vous assure une immersion totale grâce aux nombreux dédales combinés à une luminosité proche du néant Vous pourrez suivre l'évolution des
                    scores en temps réel sur votre pistolet et à l'accueil.

                  </p>


                </div>

              </div>
            </div>




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
        <div>
          <p style="text-align: center;">
            Venez découvrir nos autres activités comme le babyfoot, un panier de basket et même un air hockey. <br />
            Il n'y a pas que le bowling et le laser Game, venez-vous amusez avec notre attrape peluche, notre arcade et le puching ball. <br />
            Vous allez trouver votre bonheur avec cette arcade qui contient plus d'une centaine de jeux pour les grands et les petits comme King-Kong, pacman, Tekken, et Street fighter. <br />
            Venez défier vos amis au babyfoot ou à l'air hockey avec votre partie de bowling, une revanche à la loyal ou non ! <br />

          </p>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Attrape peluche</h2>
                  <p class="mb-0"></p>
                </span>
              </span>
            <div class="containerImage">
              <img class="img-fluid" src="../images/Peluche.JPG" alt="Attrape peluche">
            </div>
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Baby-foot</h2></h2>
                  <p class="mb-0"></p>
                </span>
              </span>
            <div class="containerImage">
              <img class="img-fluid" src="../images/Baby.JPG" alt=" Baby-foot">
            </div>
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Borne d'arcade</h2>
                  <p class="mb-0"></p>
                </span>
              </span>
            <div class="containerImage">
              <img class="img-fluid" src="../images/Arcade.JPG" alt="Borne d'arcade">
            </div>
            </a>
          </div>
          <div class="col-lg-6">
            <a class="portfolio-item" href="#">
              <span class="caption">
                <span class="caption-content">
                  <h2>Air-hockey</h2>
                  <p class="mb-0"></p>
                </span>
              </span>
            <div class="containerImage">
              <img class="img-fluid" src="../images/Air-hockey.JPG" alt="Air-hockey">
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
      <div class="text-center" style="width: 100%;">
        <div class="content-section-heading">
          <h2 class="mb-5">Nos formules</h2>
        </div>
        <div class="row text-center">
          <div id="containerBullePizza" class="col-lg-3 col-md-6 mb-5 mb-lg-0" >


            <div class="service-icon rounded-circle mx-auto mb-3" id="imgBullePizza">  <a class="btn btn-primary-pizza btn-xl js-scroll-trigger" data-toggle="modal" data-target="#myModalPizza" style="width:50px; height:50px; background-color: black;"></a></div>
            <div class="modal fade" id="myModalPizza" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button id="btnCloseModal" type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                    <div class="modal-body">
                      <p  class="txtFormule">
                        4 personnes au minimum<br/>
                        (Réservation au préalable par téléphone)<br/><br/>

                        Vôtre table est réservée<br/>
                        Pizza (1/2 par pers.)<br/>
                        Vin rosé (pour les adultes), 1 bouteille pour 4 personnes<br/>
                        Jus d'orange ou Soda (pour les ados) <br/><br/>

                        (L'abus d'alcool est dangereux pour la santé, à consommer avec modération<br/>
                        Celui qui conduit, c'est celui qui ne boit pas)<br/><br/>

                        Formule PIZZA à 16€<br/>
                        1 Partie au choix : BOWLING ou LASER BLAST<br/><br/>
                        Formule PIZZA à 22€<br/>
                        2 Parties au choix : BOWLING et/ou LASER BLAST<br/><br/>
                        Formule PIZZA à 31€<br/>
                        3 Parties au choix : BOWLING et/ou LASER BLAST<br/><br/>

                      </p>
                    </div>
                  </div>
                </div>
          </div>
            <h4 class="txtBlack">
              <strong>Pizza</strong>
            </h4>


          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
              <div class="service-icon rounded-circle mx-auto mb-3" id="imgBulleAnniversaire"><a class="btn btn-primary-pizza btn-xl js-scroll-trigger" data-toggle="modal" data-target="#myModalAnniv" style="width:50px; height:50px; background-color: black;"></a></div>
              <div class="modal fade" id="myModalAnniv" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button id="btnCloseModal" type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                      <div class="modal-body">
                        <p class="txtFormule">
                          Formule anniversaire à 15€<br/><br/>
                          Vous avez le choix entre :<br/>
                          - 2 parties de Bowling<br/>
                          - 2 parties de Laser Blast<br/>
                          - 1 partie de Bowling et 1 partie de Laser Blast<br/><br/>
                          A votre arrivée, votre table est réservée et préparée.<br/>
                          Les enfants sont enregistrés immédiatement pour la partie de jeu dont la durée est variable selon la formule choisie.<br/><br/>
                          Pour profiter pleinement de votre créneau, vous devez vous présenter à l'heure précise de votre réservation.<br/><br/>
                          Les enfants des anniversaires participants au Laser Blast seront mixés avec d'autres enfants.<br/><br/>
                          Le tarif de la privatisation de Laser est de 20€ par enfants au lieu de 15€.<br/>
                          Le Bowling Laser Blast de Saint Maximin agence des créneaux horaires pour garantir votre table pour une durée maximale de 2 heures. Si une réservation fait suite à la vôtre, vous devez libérer votre table dans les délais impartis et ceci par correction pour l'anniversaire suivant. Nous vous remercions pour votre compréhension.<br/><br/>
                          6 enfants minimum, 1,5l de sodas et 1l de jus de fruits.<br/>
                          Un anniversaire inoubliable pour le plaisir de tous.<br/>

                        </p>
                      </div>
                    </div>
                  </div>
            </div>

            <h4 class="txtBlack">
              <strong>Anniversaire</strong>
            </h4>
            <p class="txtBlack"></p>
          </div>



          <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
            <div class="service-icon rounded-circle mx-auto mb-3" id="imgBulleEntreprise"><a class="btn btn-primary-pizza btn-xl js-scroll-trigger" data-toggle="modal" data-target="#myModalEntreprise" style="width:50px; height:50px; background-color: black;"></a></div>
            <div class="modal fade" id="myModalEntreprise" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button id="btnCloseModal" type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                    <div class="modal-body">
                      <p class="txtFormule">
                        Vous pouvez effectuer vos soirées entreprise dans notre établissement, en choisissant une formule "sur mesure" (Soirée de fin d'année, Arbre de noël, Séminaire, ...).<br/><br/>
                        Vous souhaitez rassembler vos collaborateurs :<br/>
                        - Pour une journée de travail<br/>
                        - Une opération événementielle<br/>
                        - Un lancement de produit<br/>
                        - Une réunion commerciale<br/><br/>
                        Contactez-nous au plus vite et définissons ensemble la formule "all-inclusive" pour un moment exceptionnel qui vous conviendra le mieux.<br/>

                      </p>
                    </div>
                  </div>
                </div>
          </div>
            <h4 class="txtBlack">
              <strong>Entreprise</strong>
            </h4>

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
            <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/bowlinglaserstmax/">
              <i class="icon-social-facebook"></i>
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
