<?php

error_reporting(~E_NOTICE);

require_once '../config/dbconfig.php';

if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT id, lien, dateopen, dateclose, titre, corps FROM bourses WHERE id = :uid');
    // $stmt_edit = $DB_con->prepare('SELECT `id`,`lien`,`dateopen`,`dateclose`,`titre`, `corps` FROM `bourses` WHERE id = :uid');
    $stmt_edit->execute(array(':uid' => $id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
} else {
    header("Location: index.php");
}



if (isset($_POST['btn_save_updates'])) {
    $lien = $_POST['lien'];
    $dateopen = $_POST['dateopen'];
    $dateclose = $_POST['dateclose'];
    $titre = $_POST['titre'];
    $corps = $_POST['corps'];

    // if no error occured, continue ....
    if (!isset($errMSG)) {
        $stmt = $DB_con->prepare('UPDATE bourses
									     SET lien       = 	:ulien,
									     	 dateopen 	= 	:udateopen,
									     	 dateclose  =	:udateclose,
									     	 titre     =	:utitre,
										     corps      = 	:ucorps
								       WHERE id=:uid');

        $stmt->bindParam(':ulien', $lien);
        $stmt->bindParam(':udateopen', $dateopen);
        $stmt->bindParam(':udateclose', $dateclose);
        $stmt->bindParam(':utitre', $titre);
        $stmt->bindParam(':ucorps', $corps);
        $stmt->bindParam(':uid', $id);


        if ($stmt->execute()) {
?>
            <script>
                alert('Mise à jour réussie ...');
                window.location.href = 'index.php';
            </script>
<?php
        } else {
            $errMSG = "Désolé la mise à jour a échoué !";
        }
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css">
</head>
<script type="text/javascript" src="../CKEditor/ckeditor/ckeditor.js"></script>
<style type="text/css">
    body {
        background-image: url("../assets/img/background.jpg");
        background-repeat: no-repeat;
        background-position: right top;
        background-attachment: fixed;
    }
</style>

<body>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h1> <b> <i>Insertion d'un Article </i></b></h1>
                            <table class="table">
                                <tr>
                                    <td>
                                        <div>
                                            <a href="add.php" class="btn btn-primary"> <i class="fa d-inline fa-lg fa-plus"></i> </a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="input-group w-50">
                                            <input type="text" class="form-control" placeholder="Votre recherche">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">


                                <?php
                                if (isset($errMSG)) {
                                ?>
                                    <div class="alert alert-danger">
                                        <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                                    </div>
                                <?php
                                } else if (isset($successMSG)) {
                                ?>
                                    <div class="alert alert-success">
                                        <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
                                    </div>
                                <?php
                                }
                                ?>

                                <form method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <fieldset>


                                        <div class="form-group">
                                            <label for="lien"><b>Lien</b></label>
                                            <input type="text" name="lien" class="form-control" id="lien" placeholder="Entrez le lien" value="<?= $lien ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="dateopen"><b>Date d'ouverture</b></label>
                                            <input type="date" name="dateopen" class="form-control" id="dateopen" placeholder="Entrez la date d'ouverture " value="<?= $dateopen ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="dateclose"><b>date de fermeture</b></label>
                                            <input type="date" name="dateclose" class="form-control" id="dateclose" placeholder="Entrez la date de fermeture" value="<?= $dateclose ?>">
                                        </div>

                                        <div class="form-group"> <label for="titre">
                                                <b>Le titre</b></label>
                                            <input type="titre" name="titre" class="form-control" id="titre" placeholder="Entrez le titre" value="<?= $titre ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="chapeau"><b>Corps du Texte</b></label>
                                            <textarea class="ckeditor" id="editeur" name="corps">
                                                <?= $corps ?>
                                            </textarea>
                                        </div>


                                        <a href="../home.php" class="btn btn-outline-warning">Retour</a>
                                        <button type="submit" class="btn btn-success" name="btn_save_updates" style="text-align:left">Mise à jour</button>
                                        <button type="reset" class="btn btn-danger" name="btnanul">Annuler</button>

                                    </fieldset>
                                </form>
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