<?php
$class = "class = 'menu_item current_page_item'";
error_reporting(~E_NOTICE);
?>

<!DOCTYPE html>
<!--[if lte IE 8]><html class="ie8 no-js" lang="en-US"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en-US"><![endif]-->
<!--[if !(IE)]><!-->
<html class="not-ie no-js" lang="fr-CI">
<!--<![endif]-->

<head>
  <!-- Basique de la page
	  ================================================== -->
  <meta charset="utf-8" />
  <title>Ministère de l'Intégration Africaine et des Ivoiriens de l'Extérieur</title>
  <meta name="description" content="Le ministère de l'Intégration Africaine et des Ivoiriens de l'Exterieur (MIAIE) a pour mission fondamentale la mise en oeuvre de la politique ivoirienne en matière d'intégration ivoirienne et de gestion des ivoiriens de l'extérieur. | <?= $page; ?>" />
  <meta name="author" content="Vincent-Férié" />

  <!-- Spécificités Mobile
	================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="images/blog/favicon.ico" type="image/x-icon" />

  <!-- Google Web Fonts
	================================================== -->
  <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:700,500,400%7cCourgette%7cRoboto:400,500,700%7CIndie+Flower:regular%7COswald:300,regular,700&amp;subset=latin%2Clatin-ext" rel="stylesheet" type="text/css" />

  <!-- Css
	================================================== -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/layout.css" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- Vendor CSS
	================================================== -->
  <link rel="stylesheet" href="css/vendor.css" />
  <link rel="stylesheet" href="css/fontello.css" />
  <link rel="stylesheet" href="css/vince.css" />

  <!-- Modernizr
	================================================== -->
  <script src="js/vendor/jquery.modernizr.js"></script>
</head>

<body class="animated">

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>


  <!-- - - - - - - -  WRAPPER  - - - - - - - -->
  <div id="wrapper">
    <!-- - - - - - - - MOBILE MENU - - - - - - - -->
    <nav id="mobile-advanced" class="mobile-advanced"></nav>
    <!-- - - - - - - - END MOBILE MENU - - - - - - - -->

    <!-- - - - - - - - HEADER - - - - - - - -->
    <div class="ban" style="text-align: center">
      <img src="images/blog/ban.jpg" alt="" />
    </div>
    <header id="header" class="header type-4">
      <!--/ .header-top-->
      <!-- Brèves -->
      <table class="infos">
        <tbody>
          <tr>
            <th>
              <img src="images/blog/flash.png" alt="flash" width="100%" />
            </th>
            <th>
              <div class="header-top breves">
                <marquee direction="left" width="100%" scrollamount="10" onmouseover="this.stop()" onmouseout="this.start()" style="font-size:15px; padding:3px; ">
                  &nbsp;
                  <a href="#" target="_blank">
                    <span style="background-color:#C00; color:#FFF; font-weight:bold; padding:4px 4px 5px 4px">URGENT</span>
                    <span style="color:#000; font-weight:normal; font-family:Oswald;">
                      Les Concours Administratifs, des Personnels de Santé et de Promotion dans les grades A5, A6 et A7 session 2019 sont ouverts &nbsp;
                    </span>
                  </a>
                  &nbsp;
                  <a href="#" target="_blank">
                    <span style="background-color:blue; color:#FFF; font-weight:bold; padding:4px 4px 5px 4px">INFO</span>
                    <span style="color:#000; font-weight:normal; font-family:Oswald;">
                      Tous les actes signés (nomination, promotion, radiation, ...) sont à imprimer à partir de l'espace fonctionnaire des bénéficiaires. Aucun acte ne sera délivré au sein du ministère. Pour les arrêtés de radiation, consulter la rubrique "services offerts/retraite" &nbsp;
                    </span>
                  </a>
                  &nbsp;
                  <a href="#" target="_blank">
                    <span style="background-color:Green; color:#FFF; font-weight:bold; padding:4px 4px 5px 4px">INFO</span>
                    <span style="color:#000; font-weight:normal; font-family:Oswald;">
                      Le paiement des frais d'établissement de l'Attestation de prêt bancaire se fera désormais en ligne sur le site du Ministère &nbsp;
                    </span>
                  </a>
                </marquee>
              </div>
            </th>
          </tr>
        </tbody>
      </table>
      <!-- Fin Brèves -->

      <div class="header-middle">
        <div class="row">
          <div class="large-12 columns">
            <div class="header-middle-entry">
              <div class="account">
                <ul>
                  <li data-login="loginDialog"></li>
                  <li data-account="accountDialog"></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!--/ .row-->
      </div>
      <!--/ .header-middle-->

      <div class="header-bottom">
        <div class="row">
          <div class="large-12 columns">
            <nav id="navigation" class="navigation top-bar" data-topbar>
              <div class="menu-primary-menu-container">
                <ul id="menu-primary-menu" class="menu">

                  <!-- Accueil -->
                  <li <?= ($page === 'accueil') ? $class : "" ?>>
                    <a href="index">Accueil</a>
                  </li>

                  <!-- Missions -->
                  <li <?= ($page === 'historique' or $page === 'organigramme' or $page === 'cabinet') ? $class : "" ?>>
                    <a href="#">Missions</a>
                    <ul class="sub-menu">
                      <li <?= ($page === 'historique') ? $class : "" ?>><a href="historique">Attributions</a></li>
                      <li <?= ($page === 'organigramme') ? $class : "" ?>><a href="organigramme">Organigrame</a></li>
                    </ul>
                  </li>

                  <!-- Direction Générale -->
                  <li <?= ($page === 'integration' or $page === 'exterieur') ? $page : "" ?>>
                    <a href="#">Directions Générales</a>
                    <ul class="sub-menu">
                      <li>
                        <a href="dgia">Direction Générale de l'Intégration Africaine (D.G.I.A)</a>
                      </li>
                      <li>
                        <a href="dgie">Direction Générale des Ivoiriens de l'Extérieur (D.G.I.E)</a>
                      </li>
                    </ul>
                  </li>

                  <!-- Projets -->
                  <li <?= ($page === 'projets') ? $class : "" ?>>
                    <a href="#">Projets</a>
                    <ul class="sub-menu">
                      <li <?= ($page === 'projets') ? $class : "" ?>>
                        <a href="Projets-regionaux">Projets régionaux</a>
                      </li>
                      <li <?= ($page === 'projets') ? $class : "" ?>>
                        <a href="Projets-transfontaliers">Projets transfontaliers</a>
                      </li>
                      <li <?= ($page === 'projets') ? $class : "" ?>>
                        <a href="Projets-specifiques">Projets Spécifiques</a>
                      </li>
                      <li <?= ($page === 'projets') ? $class : "" ?>>
                        <a href="#">A.E.P</a>
                      </li>
                    </ul>
                  </li>

                  <!-- Documentation -->
                  <li <?= ($page === 'documentation') ? $class : "" ?>>
                    <a href="#">Documentations</a>
                    <ul class="sub-menu">
                      <li <?= ($page === 'documentation') ? $class : "" ?>>
                        <a href="albums">Galerie</a>
                      </li>
                      <li <?= ($page === 'documentation') ? $class : "" ?>>
                        <a href="text-communautaires">Textes Communautaires</a>
                      </li <?= ($page === 'documentation') ? $class : "" ?>>
                      <li <?= ($page === 'documentation') ? $class : "" ?>>
                        <a href="dossier-economique">Données Economiques du MIAIE</a>
                      </li>
                      <li <?= ($page === 'documentation') ? $class : "" ?>>
                        <a href="archives">Archives</a>
                      </li>
                      <li <?= ($page === 'documentation') ? $class : "" ?>>
                        <a href="statistiques">Statistiques</a>
                      </li>
                    </ul>
                  </li>

                  <!-- Contacts -->
                  <li <?= ($page === 'contact') ? $class : "" ?>>
                    <a href="contact">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="search-form-nav">
                <form method="get" action="#">
                  <fieldset>
                    <input placeholder="Recherche" type="text" name="s" autocomplete="on" value="" class="advanced_search" />
                    <button type="submit" class="submit-search">
                      Recherche
                    </button>
                  </fieldset>
                </form>
              </div>
            </nav>
            <!--/ .navigation-->
          </div>
        </div>
        <!--/ .row-->
      </div>
      <!--/ .header-bottom-->
    </header>
    <!--/ #header-->

    <!-- - - - - - - -  END HEADER  - - - - - - - -->