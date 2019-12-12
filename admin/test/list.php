<?php

require_once '../../config/database.php';

$articles = returnLastThreeArticles("articles");

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

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>N°</th>
                <th>image</th>
                <th>appel de titre</th>
                <th>titre</th>
                <th>legende</th>
                <th>chapeau</th>
                <th>corps</th>
                <th>auteur</th>
                <th>date de publication</th>
                <th>Modification</th>
                <th>Modification</th>
                <th>Lire la suite</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) : ?>
                <tr>
                    <td><?= $article['id'] ?></td>
                    <td> <img src="images/<?= $article['img'] ?>" alt="" width="150px"></td>
                    <td scope="row"><?= $article['appeltitre'] ?></td>
                    <td><?= $article['titre'] ?></td>
                    <td><?= $article['legende'] ?></td>
                    <td><?= $article['chapeau'] ?></td>
                    <td><?= $article['corps'] ?></td>
                    <td><?= $article['auteur'] ?></td>
                    <td><?= $article['datepubli'] ?></td>
                    <td> <a href="update.php?id=<?= $article['id'] ?>">Modifier</a> </td>
                    <td><a href="delete.php?id=<?= $article['id'] ?>" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')">Supprimer</a></td>
                    <td> <a href="article.php?id=<?= $article['id'] ?>">lire la suite</a> </td>
                </tr>
            <?php endforeach ?>
        </tbody>
        </tbody>
    </table>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>