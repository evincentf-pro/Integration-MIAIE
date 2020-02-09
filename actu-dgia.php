<?php

require 'inc/header.php';

$actus = findArticle('alaune_dgia', $_GET['id']);

?>

<!-- - - - - - - -  END HEADER  - - - - - - - -->

<!-- - - - - - - - MAIN  - - - - - - - -->
<main id="content" class="row no_sidebar" style="margin-top: 25px">

    <div id="main" class="medium-12 large-12 columns">

        <div class="row post-list full-width">

            <?php foreach ($actus as $actu) : ?>

                <article class="medium-12 large-12 columns">

                    <h3 style="color:darkgreen">
                        <?= $actu['appeltitre'] ?> :
                    </h3>
                    <header class="entry-header" style="margin-top:-20px">
                        <h1 class="entry-title">
                            <?= $actu['titre'] ?>
                        </h1>
                    </header>

                    <div class="post border post-classic slideUp">
                        <div class="" style="text-align: center">
                            <span class="image-post">
                                <img src="admin-dgia/plusinfos/images/<?= $actu['img'] ?>" alt="<?= $actu['appeltitre'] ?>" width="75%">
                            </span>
                        </div>


                        <div style="font-size: 150%; color:black; text-align: justify;">
                            <br>
                            <p>
                                <?= $actu['corps'] ?>
                            </p>
                            <br>
                        </div>

                        <footer class="entry-footer">

                            <div class="right">
                                <span class="posted-on" style=" font-size:100%; color:black;" title="date"><?= $actu['datepubli'] ?></span>
                                <span class="byline" style=" font-size:100%; color:black;" title="auteur"><?= $actu['auteur'] ?></span>
                            </div>

                        </footer>
                    </div>
                    <!--/ .post-extra-->

                </article>

            <?php endforeach; ?>


        </div>
        <!--/ .post-area-->

        <div class="clear"></div>

    </div>

</main>
<!--/ #content-->

<!-- Dialog Login/Register Widnows -->

<div id="accountDialog" class="dialog">
    <div class="dialog-overlay"></div>
    <div class="dialog-content">
        <div class="morph-shape">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
                <rect x="3" y="3" fill="none" width="556" height="276" />
            </svg>
        </div>
        <div class="dialog-inner">
            <form action="http://html.webtemplatemasters.com/">
                <fieldset class="login">

                    <p><input type="text" name="user_name" id="user_name" placeholder="Username*" required="" autocomplete="off" /></p>

                    <p><input type="email" name="user_email" id="user_email" placeholder="E-mail*" required="" autocomplete="off" /></p>

                    <p>
                        <button class="button middle" type="submit">Register</button>
                        &nbsp;
                        <a href="#" class="button middle dialog-login-button">Log In</a>
                    </p>

                </fieldset>
            </form>
            <i class="action-close" data-dialog-close>Close</i>
        </div>
    </div>
</div>

<div id="loginDialog" class="dialog">
    <div class="dialog-overlay"></div>
    <div class="dialog-content">
        <div class="morph-shape">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 560 280" preserveAspectRatio="none">
                <rect x="3" y="3" fill="none" width="556" height="276" />
            </svg>
        </div>
        <div class="dialog-inner">
            <form action="http://html.webtemplatemasters.com/" method="post" class="account">
                <fieldset>

                    <p><input type="text" name="log" id="user_login" placeholder="Username*" required="" autocomplete="off" /></p>

                    <p><input type="password" name="pwd" id="user_pass" placeholder="Password*" required="" autocomplete="off" /></p>

                    <p>
                        <input type="checkbox" id="rememberme" class="tmm-checkbox" name="rememberme" value="forever">

                        <label for="rememberme">Remember Me</label>

                        <button class="button middle right" type="submit">Log In</button>

                        <a href="#" class="reset-pass">Reset password</a>
                    </p>

                </fieldset>
            </form>

            <i class="action-close" data-dialog-close>Close</i>
        </div>

    </div>
</div>

<!-- End Dialog Login/Register Widnows -->

<!-- - - - - - - - END MAIN  - - - - - - - -->

<!-- - - - - - - - FOOTER - - - - - - - -->
<?php
include 'inc/footer.php';
