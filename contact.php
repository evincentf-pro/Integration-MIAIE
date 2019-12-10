<?php
$page = 'contact';
require 'inc/header.php';
?>

<style>
    /* .contact {
        font-size: 20px;
    }

    a:hover {
        font-style: italic;
        color: orange;
    } */
</style>

<!-- - - - - - - - MAIN  - - - - - - - -->
<main id="content" class="row">

    <section id="main" class="large-12 columns">
        <div class="page-title">
            <h1>Contact</h1>
            <div class="breadcrumbs">
                <a href="index.php" title="Accueil">Accueil</a> <?= $page ?>
            </div>
            <!--/ .breadcrumbs-->
        </div>



        <div class="section margin-top-30">

            <div class="row">

                <div class="medium-8 large-8 columns">
                    <h2>Ecrivez nous</h2>
                    <form method="post" action="" class="contact-form" enctype="multipart/form-data">
                        <input type="hidden" name="contact_form_name" value="Contacts">
                        <p class="tmmFormStyling form-input-text">
                            <input id="name" required="" type="text" name="textinput" value="" placeholder="Votre Nom *">
                        </p>
                        <p class="tmmFormStyling form-input-email">
                            <input id="email" required="" type="email" name="email" value="" placeholder="Votre Mail *">
                        </p>
                        <p class="tmmFormStyling form-input-text">
                            <input id="name_5" required="" type="text" name="textinput" value="" placeholder="Sujet *">
                        </p>
                        <p class="tmmFormStyling form-textarea">
                            <textarea id="message" required="" name="message" placeholder="Votre Message *"></textarea>
                        </p>

                        <p class="tmmFormStyling form-captcha">

                            <button id="submit" class="button middle default-blue" type="submit">
                                Envoyer
                            </button>
                        </p>

                    </form>

                </div>

                <br>

                <div class="columns  medium-4 large-4" style="text-align:center">
                    <h1>LES CONTACTS DU CABINET</h1>
                    <!-- <p style="color:black">
                    Ministère de l'Intégration Africaine et des Ivoiriens de L'exterieur <br>
                        Abidjan-Plateau Cité Administrative, <br> Tour B 17ème étage 
                    </p> -->
                    <!-- <div class="clear"></div> -->
                    <!-- <div class="divider-2"></div> -->
                    <div class="our_contacts" style="color:black;">
                        <ul>
                            <li class="contact">Adresse: 01 BPV 225 Abidjan 01</li>
                            <li class="contact">Appel: +225 20 33 12 12 </li>
                            <li class="contact">Appel: +225 20 33 12 12 </li>
                            <li class="contact">E-mail: <a href="mailto:#">info@integration.gouv.ci </a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!--/ .row-->

        </div>
        <!--/ .section-->

        <div class="section margin-top-off">
            <div class="contact-map">
                <div id="map_address" class="google_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d589.7433822790533!2d-4.02310117059213!3d5.333139546034814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ebaeaf1a9b4b%3A0xed1b89ec99e4c3e1!2sLa+Cit%C3%A9+Administrative+Tour+C%2C+Abidjan!5e1!3m2!1sfr!2sci!4v1561334508336!5m2!1sfr!2sci" width="1150" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </section>
    <!--/ #main-->

</main>
<!--/ #content-->

<!-- ------------------------------------------------ -->




<?php
include 'inc/footer.php';
