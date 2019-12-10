<?php
header('Refresh:5;index.php');
require 'inc/header.php';
?>

<br>

<main id="content" class="row">

    <div class="text-center">
        <h1 style="font-size:16em">404</h1>
        <h2 style="font-size:5em">Page Non trouvée</h2>

        <span class="infos text-center">Oups désolé, il semnle que la page que vous voulez atteindre n'existe pas ou a été supprimée... </span>
        <p class="infos text-center">
            vous serez rédiriger dans 5 secondes...
        </p>

    </div>



</main>

<?php
require_once 'inc/book/footer.php';
