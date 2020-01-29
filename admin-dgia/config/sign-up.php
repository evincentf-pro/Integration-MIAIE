<?php
session_start();
require_once('class.user.php');
$user = new USER();

if ($user->is_loggedin() != "") {
    $user->redirect('../index.php');
}

if (isset($_POST['btn-signup'])) {
    $uname = strip_tags($_POST['txt_uname']);
    $umail = strip_tags($_POST['txt_umail']);
    $upass = strip_tags($_POST['txt_upass']);

    if ($uname == "") {
        $error[] = "Renseigne le login stp";
    } else if ($umail == "") {
        $error[] = "Renseigne le amil stp";
    } else if (!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Email non valide!';
    } else if ($upass == "") {
        $error[] = "Renseigne le mot de passe stp!";
    } else if (strlen($upass) < 6) {
        $error[] = "Le mot de passe doit comporter minimum 6 chacractères";
    } else {
        try {
            $stmt = $user->runQuery("SELECT user_name, user_email FROM users_dgia WHERE user_name=:uname OR user_email=:umail");
            $stmt->execute(array(':uname' => $uname, ':umail' => $umail));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['login'] == $uname) {
                $error[] = "Désolé mais ce login est déja utilisé !";
            } else if ($row['user_email'] == $umail) {
                $error[] = "Désolé mais ce mail est déja utilisé !";
            } else {
                if ($user->register($uname, $umail, $upass)) {
                    $user->redirect('../index.php');
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription - Connexion | Administration Integration </title>



    <link rel="stylesheet" href="../assets/css/login.css">
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">


</head>

<body>
    <!--<div align="center">
		<img src="img/banniere1164x200.jpg">
	</div>-->

    <hgroup>
        <h1>Inscription | Administration</h1>
    </hgroup>
    <form method="post" id="login-form">
        <div align="center">
            <div id=error"">
                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                ?>
                        <div class="alert alert-danger">
                            <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $error; ?>
                        </div>
                    <?php
                    }
                } else if (isset($_GET['joined'])) {
                    ?>
                    <div class="alert alert-info">
                        <i class="glyphicon glyphicon-log-in"></i> &nbsp; Successfully registered <a href='index.php'>login</a> here
                    </div>
                <?php
                }
                ?>


            </div>
            <img src="../assets/img/1.png" width="150">
        </div>


        <br>
        <br>


        <div class="group">
            <input type="text" name="txt_uname">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Login</label>
        </div>


        <div class="group">
            <input type="text" name="txt_umail">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Mail</label>
        </div>


        <div class="group">
            <input type="password" name="txt_upass">
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Mot de Passe</label>
        </div>


        <button type="submit" class="button buttonBlue" name="btn-signup">
            Inscription
            <div class="ripples buttonRipples">
                <span class="ripplesCircle"></span>
            </div>
        </button>
        <div align="center">
            <hr>
            <a href="../index.php">
                <h2>
                    <span style="color: green">Connexion</span>
                </h2>
            </a>
            <hr>
        </div>

    </form>

    <BR />
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../assets/js/login.js"></script>
</body>

</html>