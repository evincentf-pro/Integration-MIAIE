<?php

require_once("../config/session.php");

require_once("../config/class.user.php");
$auth_user = new USER();


$user_id = $_SESSION['user_session'];

$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
$stmt->execute(array(":user_id" => $user_id));

$userRow = $stmt->fetch(PDO::FETCH_ASSOC);


require_once '../config/dbconfig.php';

if (isset($_GET['delete_id'])) {
    // select image from db to delete
    $stmt_select = $DB_con->prepare('SELECT id FROM contacts WHERE id =:uid');
    $stmt_select->execute(array(':uid' => $_GET['delete_id']));

    // it will delete an actual record from db
    $stmt_delete = $DB_con->prepare('DELETE FROM contacts WHERE id =:uid');
    $stmt_delete->bindParam(':uid', $_GET['delete_id']);
    $stmt_delete->execute();

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css">
    <style type="text/css">
        body {
            background-image: url("../assets/img/background.jpg");
            background-repeat: no-repeat;
            background-position: right top;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <div class="py-5">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1> <b> <i>Liste des articles à la Une</i></b></h1>
                            <div style="text-align:right">
                                <input type="text" name="">
                                <button type="button" data-dismiss="modal">Recherche</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead style="text-align:center">
                                    <tr>
                                        <th>N°</th>
                                        <th>Nom</th>
                                        <th>Mail</th>
                                        <th>Sujet</th>
                                        <th>Message</th>
                                        <th>Suppression</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align:center">
                                    <?php

                                    $stmt = $DB_con->prepare('SELECT id, nom, mail, sujet, message FROM contacts ORDER BY id DESC');
                                    $stmt->execute();

                                    if ($stmt->rowCount() > 0) {
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            extract($row);
                                    ?>
                                            <tr>
                                                <td><?= $id; ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $nom; ?>" title="cliquez ici pour afficher le nom">Afficher</button>
                                                    <div id="<?= $nom; ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">le nom de l'id <?= $id; ?></h4>
                                                                </div>
                                                                <div class="modal-body" name="apeltitre">
                                                                    <b>
                                                                        <p><?= $nom; ?></p>
                                                                    </b>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $mail; ?>" title="cliquez ici pour afficher le mail">Afficher</button>
                                                    <div id="<?= $mail; ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">le mail de l'id <?= $id; ?></h4>
                                                                </div>
                                                                <div class="modal-body" name="titre">
                                                                    <b>
                                                                        <p> <a href="mailto:<?= $mail; ?>"><?= $mail; ?></a></p>
                                                                    </b>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $sujet; ?>" title="cliquez ici pour afficher le sujet">Afficher</button>
                                                    <div id="<?= $sujet; ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">le sujet de l'id N° <?= $id; ?></h4>
                                                                </div>
                                                                <div class="modal-body" name="sujet">
                                                                    <b>
                                                                        <p><?= $sujet; ?></p>
                                                                    </b>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?= $message; ?>" title="cliquez ici pour afficher le sujet">Afficher</button>
                                                    <div id="<?= $message; ?>" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">le message de l'id N° <?= $id; ?></h4>
                                                                </div>
                                                                <div class="modal-body" name="sujet">
                                                                    <b>
                                                                        <p><?= $message; ?></p>
                                                                    </b>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>
                                                        <a href="?delete_id=<?php echo $row['id']; ?>" title="Cliquez pour supprimer" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')">
                                                            <img src="../assets/img/icons/o-trash.png" width="20">
                                                        </a>
                                                    </p>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <div class="col-xs-12">
                                            <div class="alert alert-warning">
                                                <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Oups pas de données ...
                                            </div>
                                        </div>
                                    <?php
                                    }

                                    ?>
                                </tbody>
                            </table>
                            <div class="py-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <a href="../home.php" class="btn btn-outline-warning">Retour</a>
                                        </div>
                                        <div class="col-md-11 ">
                                            <ul class="pagination pagination-sm justify-content-center">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">«</span> <span class="sr-only">Arrière</span> </a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">4</a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span> <span class="sr-only">Prochain</span> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>