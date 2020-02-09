<?php

require_once("config/session.php");

require_once("config/class.user.php");
$auth_user = new USER();


$user_id = $_SESSION['user_session'];

$stmt = $auth_user->runQuery("SELECT * FROM users_dgie WHERE user_id=:user_id");
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

    <br>
    <div class="py-5" style="margin-bottom: 220px">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card">
                        <h4 class="card-title text-center" style="color: orange"><b> Plus d'Infos</b></h4>
                        <img src="assets\img\home\plusinfos.jpg" class="card-img-top" alt="Plus d'Infos">
                        <div class="card-body text-center">
                            <a href="plusinfos\add.php" class="btn btn-success">Ajouter</a>
                            <a href="plusinfos\index.php" class="btn btn-success">Lister</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
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