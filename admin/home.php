<?php

require_once("config/session.php");

require_once("config/class.user.php");
$auth_user = new USER();


$user_id = $_SESSION['user_session'];

$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));

$userRow = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenue - <?php print($userRow['user_email']); ?></title>
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets\img\logo.png" width="50">MIAIE</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item"> Bonjour <?php print($userRow['user_name']); ?> </li> -->
                </ul>
                <a href="../" class="btn navbar-btn ml-2 text-white btn-warning" title="Se rendre sur le site"><i class="fa d-inline fa-lg fa-home"></i> </a>
                <ul class="nav navbar-nav navbar-right"> </ul>
                <a href="config/logout.php?logout=true" class="btn navbar-btn ml-2 text-white btn-warning"><i class="fa d-inline fa-lg fa-user-circle-o"></i> Déconnexion</a>

            </div>
        </div>
    </nav>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>A la Une</b></h4>
                        <img class="card-img-top justify-content-center" src="assets\img\home\slider.jpg" alt="Slider">
                        <div class="card-body justify-content-center text-center">
                            <a href="slider/add.php" class="btn btn-success">Ajouter</a>
                            <a href="slider/index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Articles</b></h4>
                        <img class="card-img-top" src="assets\img\home\articles.jpg" alt="Articles">
                        <div class="card-body text-center">
                            <a href="articles/add.php" class="btn btn-success">Ajouter</a>
                            <a href="articles/index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Archives</b></h4>
                        <img class="card-img-top" src="assets\img\home\archives.jpg" alt="Archives">
                        <div class="card-body text-center">
                            <a href="archives/add.php" class="btn btn-success">Ajouter</a>
                            <a href="archives/index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Textes Communautaires</b></h4>
                        <img class="card-img-top justify-content-center" src="assets\img\home\texte.jpg" alt="Textes Communautaires">
                        <div class="card-body justify-content-center text-center">
                            <a href="text-communautaire/add.php" class="btn btn-success">Ajouter</a>
                            <a href="text-communautaire/index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Events</b></h4>
                        <img class="card-img-top" src="assets\img\home\events.jpg" alt="Events">
                        <div class="card-body text-center">
                            <a href="events/add.php" class="btn btn-success">Ajouter</a>
                            <a href="events/index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Bourses d'Etudes</b></h4>
                        <img class="card-img-top" src="assets\img\home\bourses.jpg" alt="Bourses d'Etudes">
                        <div class="card-body text-center">
                            <a href="bourses/add.php" class="btn btn-success">Ajouter</a>
                            <a href="bourses/index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Brèves</b></h4>
                        <img class="card-img-top" src="assets\img\home\breves.jpg" alt="brèves">
                        <div class="card-body justify-content-center text-center">
                            <a href="breves/add.php" class="btn btn-success">Ajouter</a>
                            <a href="breves/index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Magazines</b></h4>
                        <img class="card-img-top" src="assets\img\home\magazines.jpg" alt="Magazines">
                        <div class="card-body text-center">
                            <a href="magazine/add.php" class="btn btn-success">Ajouter</a>
                            <a href="magazine/index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Insertion d'images</b></h4>
                        <img class="card-img-top" src="assets\img\home\portfolio.jpg" alt="Portflolio">
                        <div class="card-body text-center">
                            <a href="galerie/add.php" class="btn btn-success">Ajouter</a>
                            <a href="galerie/index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Vidéos</b></h4>
                        <img class="card-img-top" src="assets\img\home\videos.jpg" alt="Vidéos">
                        <div class="card-body text-center">
                            <a href="youtube/add.php" class="btn btn-success">Ajouter</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Message Privé</b></h4>
                        <img class="card-img-top" src="assets\img\home\messages.jpg" alt="Message">
                        <div class="card-body text-center">
                            <a href="contact/index.php" class="btn btn-success">Lire</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Emplois</b></h4>
                        <img class="card-img-top" src="assets\img\home\emplois.jpg" alt="Emplois">
                        <div class="card-body text-center">
                            <a href="emplois/add.php" class="btn btn-success">Ajouter</a>
                            <a href="emplois/index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Projets Régionaux</b></h4>
                        <img class="card-img-top" src="assets\img\home\p-regionaux.jpg" alt="Projets Régionaux">
                        <div class="card-body text-center">
                            <a href="p-regionaux\add.php" class="btn btn-success">Ajouter</a>
                            <a href="p-regionaux\index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Projets Spécifiques</b></h4>
                        <img class="card-img-top" src="assets\img\home\p-specifiques.jpg" alt="Projets Spécifiques">
                        <div class="card-body text-center">
                            <a href="p-specifiques\add.php" class="btn btn-success">Ajouter</a>
                            <a href="p-specifiques\index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b>Projets Transfontaliers</b></h4>
                        <img class="card-img-top" src="assets\img\home\p-transfontalier.jpg" alt="Projets Transfontaliers">
                        <div class="card-body text-center">
                            <a href="p-transfontaliers\add.php" class="btn btn-success">Ajouter</a>
                            <a href="p-transfontaliers\index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b> Flash Infos</b></h4>
                        <img src="assets\img\home\flashinfos.jpg" class="card-img-top" alt="Flash Infos">
                        <div class="card-body text-center">
                            <a href="flashs\add.php" class="btn btn-success">Ajouter</a>
                            <a href="flashs\index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="text-light bg-success p-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3 text-center">
                    <p>© Copyright 2018 LEVEL - All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>