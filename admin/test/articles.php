<?php
require_once '../../config/database.php';

if (isset($_POST['save'])) {

    $img = $_FILES['img']['name'];
    $appeltitre = $_POST['appeltitre'];
    $titre = $_POST['titre'];
    $legende = $_POST['legende'];
    $chapeau = $_POST['chapeau'];
    $corps = $_POST['corps'];
    $auteur = $_POST['auteur'];
    $datepubli = $_POST['created_at'];

    insertArticleWithPicture("articles", $img, $appeltitre, $titre, $legende, $chapeau, $corps, $auteur, $datepubli);

    redirect_after_seconds("list.php", 2);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Title</title>
</head>

<body>

    <div class="container mt-5 ">
        <div class="row">
            <div class="jumbotron ">
                <div class="form-group">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" name="img" id="img" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="appeltitre" id="titre" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="titre" id="titre" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="legende" id="legende" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="chapeau" id="chapeau" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="chapeau" id="chapeau" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="corps" id="corps" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" name="auteur" id="auteur" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="date" name="created_at" id="created_at" class="form-control">
                        </div>

                        <div class="form-group">
                            <input type="submit" name="save" class="btn btn-primary">
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>