<?php
error_reporting(~E_NOTICE); // avoid notice

require_once '../config/dbconfig.php';

if (isset($_POST['btnsave'])) {
    $titre = $_POST['titre'];
    $corps = $_POST['corps'];

    $imgFile = $_FILES['img']['name'];
    $tmp_dir = $_FILES['img']['tmp_name'];
    $imgSize = $_FILES['img']['size'];


    if (empty($titre)) {
        $errMSG = "titre manquant";
    } else if (empty($corps)) {
        $errMSG = "corps manquant";
    } else if (empty($imgFile)) {
        $errMSG = "Oups vous avez oublié la photo";
    } else {
        $upload_dir = 'images/';

        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));


        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');


        $image = rand(1000, 1000000) . "." . $imgExt;


        if (in_array($imgExt, $valid_extensions)) {

            if ($imgSize < 5000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $image);
            } else {
                $errMSG = "Désolé l'image est un peu trop grande.";
            }
        } else {
            $errMSG = "Désolé seules les formats 'jpeg', 'jpg', 'png', 'gif' sont autorisés";
        }
    }

    if (!isset($errMSG)) {
        $stmt = $DB_con->prepare('INSERT INTO prjspecifique(titre, corps, img) VALUES(:utitre, :ucorps, :upic)');
        $stmt->bindParam(':utitre', $titre);
        $stmt->bindParam(':ucorps', $corps);
        $stmt->bindParam(':upic', $image);

        if ($stmt->execute()) {
            $successMSG = "Le nouvel enregistrement a bien été fait, vous serez rédirigé d'ici 5 secondes";
            header("refresh:5;index.php");
        } else {
            $errMSG = "Veuillez reprendre, l'enregistrement a échoué....";
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
                                            <label for="Image"><b>Image | <span style=" color: red;"> Taille image : Lxh ( 664x386 )</b></span></label>
                                            <input type="file" name="img" class="form-control" id="file" value="<?= $img ?>">
                                        </div>


                                        <div class="form-group">
                                            <label for="titre"><b>Titre</b></label>
                                            <input type="text" name="titre" class="form-control" id="exampleInputEmail1" placeholder="Entrez le titre" value="<?= $titre ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="chapeau"><b>Corps du Texte</b></label>
                                            <textarea class="ckeditor" id="editeur" name="corps">
                                                <?= $appeltitre ?>
                                            </textarea>
                                        </div>


                                        <a href="../home.php" class="btn btn-outline-warning">Retour</a>
                                        <button type="submit" class="btn btn-success" name="btnsave" style="text-align:left">Ajouter</button>
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