<?php

error_reporting(~E_NOTICE);

require_once '../config/dbconfig.php';

if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT id, titre, corps, couleur, datepubli FROM breves WHERE id = :uid');
    $stmt_edit->execute(array(':uid' => $id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
} else {
    header("Location: index.php");
}



if (isset($_POST['btn_save_updates'])) {
    $titre = $_POST['titre'];
    $corps = $_POST['corps'];
    $couleur = $_POST['couleur'];
    $datepubli = $_POST['datepubli'];

    // if no error occured, continue ....
    if (!isset($errMSG)) {
        $stmt = $DB_con->prepare('UPDATE breves
									     SET titre 	   = 	:utitre,
										     corps     = 	:ucorps,
										     couleur    = 	:ucouleur,
										     datepubli   = 	:udatepubli
								       WHERE id=:uid');

        $stmt->bindParam(':utitre', $titre);
        $stmt->bindParam(':ucorps', $corps);
        $stmt->bindParam(':ucouleur', $couleur);
        $stmt->bindParam(':udatepubli', $datepubli);
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
                                            <label for="titre"><b>Titre</b></label>
                                            <input type="text" name="titre" class="form-control" id="titre" placeholder="Entrez le titre" value="<?= $titre ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="chapeau"><b>Corps du Texte</b></label>
                                            <textarea class="ckeditor" id="editeur" name="corps">
                                                <?= $corps ?>
                                            </textarea>
                                        </div>


                                        <div class="form-group"> <label for="couleur">
                                                <b>Couleur</b></label>
                                            <input type="color" name="couleur" class="form-control w-25" id="couleur" placeholder="Choisis ta couleur" value="<?= $couleur ?>">
                                        </div>


                                        <div class="form-group">
                                            <label for="datepubli"><b>date de publication</b></label>
                                            <input type="date" name="datepubli" class="form-control" id="datepubli" placeholder="Entrez la date de la publication" value="<?= $datepubli ?>">
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