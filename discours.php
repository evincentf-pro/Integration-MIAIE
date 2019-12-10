<?php
$page = "discours";
require 'inc/header.php';
?>

<br>
<!-- - - - - - - - MAIN  - - - - - - - -->
<style>
    .table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .td,
    .th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<main id="content" class="row">


    <!-- <section id="main" class="medium-8 large-8 columns"> -->

    <div class="text-center">
        <h1>Les Discours du Ministre</h1>
    </div>

    <br>


    <table class="table">
        <tr class="tr">
            <th class="th">Thème</th>
            <th class="th">Date</th>
        </tr>
        <tr class="tr">
            <td class="td"><a href="#">Forum Annuel de l’immigration au Maroc</a></td>
            <td> 2017-12-03 </td>
        </tr>
        <tr class="tr">
            <td class="td"> <a href="#">Comité Conjoint APECI-UE</a></td>
            <td>2017-7-05</td>
        </tr>
        <tr class="tr">
            <td class="td"><a href="#">Forum Annuel de l’immigration au Maroc</a></td>
            <td> 2017-12-03 </td>
        </tr>

        <tr class="tr">
            <td class="td"> <a href="#">Comité Conjoint APECI-UE</a></td>
            <td>2017-7-05</td>
        </tr>
    </table>

    <!-- </section> -->
    <!--/ #main-->

    <?php
    // include 'inc/sidebar.php';
    ?>

</main>
<!--/ #content-->


<!-- - - - - - - - END MAIN  - - - - - - - -->

<?php
include 'inc/footer.php';
