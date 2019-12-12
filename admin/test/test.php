<?php
require_once '../../config/database.php';

$articles = returnLastThreeArticles("tests");

// if (!empty($_POST['save'])) {
//     $titre = htmlspecialchars($_POST['titre']);
//     $contenue = htmlspecialchars($_POST['contenuetitre']);
//     $created_at = htmlspecialchars($_POST['created_at']);

//     var_dump(insertArticle("tests", $titre, $contenue, $created_at));
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Contenue</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) : ?>
                <tr>
                    <td scope="row"><?= $article['titre'] ?></td>
                    <td><?= $article['contenue'] ?></td>
                    <td><?= $article['created_at'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <table>
        <tr>
            <td>
                <fieldset>
                    <legend>Test Admin</legend>
                    <form action="" method="post">
                        <input type="text" name="titre"><br>
                        <input type="text" name="contenue"><br>
                        <input type="date" name="created_at"><br>
                        <input type="submit" name="save"><br>
                    </form>
                </fieldset>
            </td>
        </tr>
    </table>



</body>

</html>