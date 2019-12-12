<?php

/**
 * ------------------------------------------------------- getPdo()
 *  Permet la connexion à la base de donnée
 * @return PDO
 */
function getPdo(): PDO
{
    try {
        $bdd = new PDO(
            'mysql:host=localhost;dbname=integration;charset=UTF8',
            'root',
            'root',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Nous ramène des erreurs s'il y'en a permet à PHP de sortir de son mode silence par défaut
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC //Je veux récupérer les tableaux en associatif ce sera plus simple
            ]
        );
    } catch (Exception $e) {
        die("Erreur : " . $e->getMessage);
    }

    return $bdd;
}


/**
 * ------------------------------------------------------- redirect()
 * Permet la redirection instantanée
 * @param  mixed $url
 *
 * @return void
 */
function redirect(string $url): void
{
    header("Location: $url");
    exit();
}


/**
 * ------------------------------------------------------- redirect_after_seconds()
 *  Permet la redirection après un nombre de secondes déterminés
 * @param  mixed $url
 * @param  mixed $seconds
 *
 * @return void
 */
function redirect_after_seconds(string $url, int $seconds): void
{
    header("refresh:$seconds;$url");
    exit();
}


/**
 * ------------------------------------------------------- returnLastThreeArticles()
 * Permet de récupérer les 3 dernièrs articles de la table indiquées en paramètre
 * @param  mixed $table
 *
 * @return array
 */
function returnLastThreeArticles(string $table): array
{
    $pdo = getPdo();
    $query = $pdo->query("SELECT * FROM " . $table . " ORDER BY id DESC LIMIT 3");
    $articles = $query->fetchAll();

    if (empty(count($articles))) {
        echo "La base de données ne contient aucun articles <br><br>";
        return $articles;
    } else {
        return $articles;
    }
}


/**
 * ------------------------------------------------------- findArticle()
 * Permet d'afficher les informations de de l'article de la table et l'idée passé en id
 * @param  mixed $table
 * @param  mixed $id
 *
 * @return array
 */
function findArticle(string $table, int $id): array
{
    $pdo = getPdo();
    $query = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE id  = ' . $id);
    $query->execute(compact('id'));

    $article = $query->fetchAll();

    return $article;
}


/**
 * ------------------------------------------------------- insertArticle()
 * Permet l'insertion des variables passées en paramètre dans la table indiquée aussi en paramètre
 * @param  mixed $table
 * @param  mixed $titre
 * @param  mixed $contenue
 * @param  mixed $created_at
 *
 * @return object
 */
function insertArticle(string $table, string $titre, string $contenue, string   $created_at): object
{
    $pdo = getPdo();
    $query = $pdo->prepare('INSERT INTO ' . $table . ' SET titre = :titre, contenue = :contenue, created_at = :created_at');
    $query->execute(compact('titre', 'contenue', 'created_at'));

    redirect("test.php");

    return $query;
}


/**
 * ------------------------------------------------------- insertArticleWithPicture()
 *  Permet l'insertion des variables en plus d'une image passées en paramètre dans la table indiquée aussi en paramètre
 * @param  mixed $table
 * @param  mixed $img
 * @param  mixed $appeltitre
 * @param  mixed $titre
 * @param  mixed $legende
 * @param  mixed $chapeau
 * @param  mixed $corps
 * @param  mixed $auteur
 * @param  mixed $datepubli
 *
 * @return object
 */
function insertArticleWithPicture(string $table, string $img, string $appeltitre, string $titre, string $legende, string $chapeau, string $corps, string $auteur, string $datepubli): object
{
    $pdo = getPdo();

    $imgFile = $_FILES['img']['name'];
    $tmp_dir = $_FILES['img']['tmp_name'];
    $imgSize = $_FILES['img']['size'];

    if (empty($imgFile)) {
        echo "Veuillez sélectionner une photo.";
    } else {
        $upload_dir = 'images/';
        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
        if (in_array($imgExt, $valid_extensions)) {
            if ($imgSize < 5000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $imgFile);
            } else {
                echo "Désolé l'image est un peu trop grande.";
            }
        } else {
            echo "Désolé seule les formats 'jpeg', 'jpg', 'png', 'gif' sont autorisés";
        }
    }

    $query = $pdo->prepare('INSERT INTO ' . $table . ' SET img = :img, appeltitre = :appeltitre, titre = :titre, legende = :legende, chapeau = :chapeau, corps = :corps, auteur = :auteur, datepubli = :datepubli ');
    $query->execute(compact('img', 'appeltitre', 'titre', 'legende', 'chapeau', 'corps', 'auteur', 'datepubli'));

    return $query;
}


/**
 * ------------------------------------------------------- updateArticle()
 * Permet la mise à jour des variables passées en paramètre dans la table indiquée aussi en paramètre
 * @param  mixed $table
 * @param  mixed $img
 * @param  mixed $appeltitre
 * @param  mixed $titre
 * @param  mixed $legende
 * @param  mixed $chapeau
 * @param  mixed $corps
 * @param  mixed $auteur
 * @param  mixed $datepubli
 *
 * @return void
 */
function updateArticle(string $table, string $img, string $appeltitre, string $titre, string $legende, string $chapeau, string $corps, string $auteur, string $datepubli, $id)
{
    $pdo = getPdo();

    $imgFile = $_FILES['img']['name'];
    $tmp_dir = $_FILES['img']['tmp_name'];
    $imgSize = $_FILES['img']['size'];

    if (empty($imgFile)) {
        echo "Veuillez sélectionner une photo.";
    } else {
        $upload_dir = 'images/';
        $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
        if (in_array($imgExt, $valid_extensions)) {
            if ($imgSize < 5000000) {
                move_uploaded_file($tmp_dir, $upload_dir . $imgFile);
            } else {
                echo "Désolé l'image est un peu trop grande.";
            }
        } else {
            echo "Désolé seule les formats 'jpeg', 'jpg', 'png', 'gif' sont autorisés";
        }
    }

    // $query = $pdo->prepare('INSERT INTO' . $table . ' SET img = :img, appeltitre = :appeltitre, titre = :titre, legende = :legende, chapeau = :chapeau, corps = :corps, auteur = :auteur, datepubli = :datepubli ');
    $query = $pdo->prepare('UPDATE ' . $table . ' SET img = :img, appeltitre = :appeltitre, titre = :titre, legende = :legende, chapeau = :chapeau, corps = :corps, auteur = :auteur, datepubli = :datepubli WHERE id = ' . $id . ';');
    $query->execute(compact('img', 'appeltitre', 'titre', 'legende', 'chapeau', 'corps', 'auteur', 'datepubli'));

    return $query;
}


/**
 * ------------------------------------------------------- deleteArticle()
 * Permet la suppression 
 * @param  mixed $table
 * @param  mixed $id
 *
 * @return void
 */
function deleteArticle(string $table, int $id): void
{
    $pdo = getPdo();
    $query = $pdo->prepare('DELETE FROM ' . $table . ' WHERE id = ' . $id);
    $query->execute(['id' => $id]);
}
