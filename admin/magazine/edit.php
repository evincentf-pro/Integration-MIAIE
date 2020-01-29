<?php

error_reporting(~E_NOTICE);

require_once '../config/dbconfig.php';

if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
    $id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT id, img, appeltitre, corps FROM magazines WHERE id = :uid');
    $stmt_edit->execute(array(':uid' => $id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
} else {
    header("Location: index.php");
}



if (isset($_POST['btn_save_updates'])) {
    $appeltitre = $_POST['appeltitre'];
    $corps = $_POST['corps'];

    $imgFile = $_FILES['img']['name'];
    $tmp_dir = $_FILES['img']['tmp_name'];
    $imgSize = $_FILES['img']['size'];

    if ($imgFile) {
        $upload_dir = 'images/'; // upload directory	
        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
        $image = rand(1000, 1000000) . "." . $imgExt;
        if (in_array($imgExt, $valid_extensions)) {
            if ($imgSize < 5000000) {
                unlink($upload_dir . $edit_row['image']);
                move_uploaded_file($tmp_dir, $upload_dir . $image);
            } else {
                $errMSG = "Désolé l'image est un peu trop grande.";
            }
        } else {
            $errMSG = "Désolé seule les format 'jpeg', 'jpg', 'png', 'gif' sont autorisés";
        }
    } else {
        // if no image selected the old image remain as it is.
        $image = $edit_row['img']; // old image from database
    }


    // if no error occured, continue ....
    if (!isset($errMSG)) {
        $stmt = $DB_con->prepare('UPDATE magazines
									     SET appeltitre = 	:uappeltitre,
									     	 corps   =	:ucorps,
										     img     = 	:upic
								       WHERE id=:uid');

        $stmt->bindParam(':uappeltitre', $appeltitre);
        $stmt->bindParam(':ucorps', $corps);
        $stmt->bindParam(':upic', $image);
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
                                            <label for="Image"><b>Image | <span style=" color: red;"> Taille image : Lxh ( 664x386 )</b></span></label>
                                            <input type="file" name="img" class="form-control" id="image" value="<?= $img ?>">
                                            <img src="images/<?= $img ?>" width="400">
                                        </div>


                                        <div class="form-group">
                                            <label for="titre"><b>appel de titre</b></label>
                                            <input type="text" name="appeltitre" class="form-control" id="titre" placeholder="Entrez l'appel de titre" value="<?= $appeltitre ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="corps"><b>Corps du Texte</b></label>
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