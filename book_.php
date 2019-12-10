<?php
require 'inc/header.php';
?>

<br>
<main id="content" class="row">
    <section id="main" class="medium-8 large-8 columns">
        <div class="book-bg">
            <div class="book-slider">
                <div class="book book-1">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-2">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-3">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-4">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-5">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-6">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-7">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-8">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-9">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-10">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-11">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
                <div class="book book-12">
                    <div class="book book-1"><a href="docs/lettre1.pdf"> <img src="docs/une1.jpg" title="PACIR Newsletter_La lettre de l'integration N°1 Octobre 2013" /></a></div>
                </div>
            </div>
            <div class="shadow-left"></div>
            <div class="shadow-right"></div>
        </div>

        <link rel="stylesheet" href="css/style.css" type="text/css" />

        <script src="js/book/jquery-1.7.1.min.js"></script>
        <script src="js/book/jquery-mousewheel-3.0.6/jquery.mousewheel.min.js"></script>
        <script src="js/book/flowslider.jquery.js"></script>

        <script>
            jQuery().ready(function($) {
                FlowSlider(".book-slider");
            });
        </script>
    </section>

    <?php
    include 'inc/sidebar.php';
    ?>
</main>

<?php
require_once 'inc/book/footer.phpfooter.php';
