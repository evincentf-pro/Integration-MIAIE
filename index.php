<?php
$page = 'accueil';
require 'inc/header.php';

//Retourne les 3 derniers articles a la une
$alaunes = returnLastThreeArticles('alaune');

//Retourne l'avant dernier article
$articles = findBeforeLastArticle1('alaune');

$plusinfos = findPlusInfos('plusinfos');

$flashs = findPlusInfos('flashinfos');

$plusinfosseconds = findBeforeLastArticle1('plusinfos');

$events = findPlusInfos('events');

$dgias = returnLastTwoArticles('alaune_dgia');

$dgies = returnLastTwoArticles('alaune_dgie');

?>

<style>
  .down {
    text-decoration: none;
    color: white;
    font-size: x-large;
  }

  .down:hover {
    font-style: italic;
    color: white
  }
</style>

<!-- - - - - - - - MAIN  - - - - - - - -->

<main id="content" class="row sbr">
  <div class="section padding-off custom-grid">
    <div class="tmm_row row home-post-slider">
      <article class="medium-8 large-8 columns">
        <div class="post-type-gallery">
          <div class="post-slider post-image owl-carousel">

            <?php foreach ($alaunes as $alaune) : ?>
              <div class="post-alternate-3 item post">
                <div class="entry-media">
                  <a href="actu.php?id=<?= $alaune['id'] ?>" class="image-post  item-overlay">
                    <img src="admin/slider/images/<?= $alaune['img'] ?>" alt="<?= $alaune['appeltitre'] ?>" width="100%">
                  </a>

                  <div id="banniere_description">
                    <div class="entry-content" style="font-style:italic">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a href="actu.php">
                            <?= $alaune['appeltitre'] ?>
                          </a>
                        </h3>
                        <h4 class="sous_titres">
                          <?= $alaune['titre'] ?>
                        </h4>
                      </header>
                    </div>

                    <footer class="entry-footer">
                      <span class="posted-on"><?= $alaune['datepubli'] ?></span>
                    </footer>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>

          </div>
        </div>
      </article>

      <article class="medium-4 large-4 columns">
        <div class="row post-list full-width">
          <div class="post post-alternate-3">
            <h3 style="text-align:center">Le Ministre</h3>
            <hr class="hr" />
            <div class="entry-media">
              <a href="#" class="image-post ">
                <img src="images/blog/14_blog.jpg" alt="" />
              </a>
            </div>
            <h3 style="text-align:center;">S.E.M Ally Coulibaly</h3>
            <div class="post post-alternate-3">
              <p style="text-align:justify; font-size: 15px; font-style: italic">
                « Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Quibusdam corporis, illum unde iste reprehenderit facilis
                rerum tempora velit blanditiis magnam, quo, odio quasi
                dolores id at vel nulla architecto facere. »
              </p>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>

  <section id="main" class="medium-8 large-8 columns">

    <div class="section padding-off columns medium-12 large-12 background-color-off">

      <div class="row">

        <div class="relative">
          <h2 class="section-title">A la une</h2>

          <div class="row post-list two-cols">
            <?php foreach ($articles as $article) : ?>
              <article class="medium-6 large-6 columns">
                <div class="post border post-alternate-1 slideUp">
                  <div class="entry-media">
                    <a href="#" class="image-post item-overlay ">
                      <img src="admin/slider/images/<?= $article['img'] ?>" alt="<?= $article['appeltitre'] ?>" width="100%">
                    </a>
                    <!-- <header class="entry-header">
                      <h3 class="entry-title"><a href="article.php?id=<?= $article['id'] ?>"><?= $article['appeltitre'] ?> </a></h3>
                    </header> -->
                  </div>
                  <div class="entry-content">
                    <p>
                      <?= $article['appeltitre'] ?>
                    </p>
                  </div>
                  <footer class="entry-footer">
                    <div class="left">
                      <span class="cat-links">
                        <a href="article.php?id=<?= $article['id'] ?>" rel="category tag">Lire plus ....</a>
                      </span>
                    </div>
                    <div class="right">
                      <span class="posted-on"><?= $article['datepubli'] ?></span>
                    </div>
                  </footer>
                </div>
                <!--/ .post-extra-->
              </article>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

    </div>

    <div class="section margin-bottom-20 columns medium-12 large-12 background-color-off">
      <div class="tmm_row row">
        <div class="relative">
          <h2 class="section-title">Plus d'Infos</h2>

          <div class="row post-list full-width">
            <?php foreach ($plusinfos as $plusinfo) : ?>
              <article class="medium-12 large-12 columns">
                <div class="post post-alternate-3 slideUp">
                  <div class="entry-media">
                    <a href="plusinfos.php?id=<?= $plusinfo['id'] ?>" class="image-post item-overlay ">
                      <img src="admin/plusinfos/images/<?= $plusinfo['img'] ?>" alt="<?= $plusinfo['appeltitre'] ?>" width="100%">
                    </a>
                    <div class="entry-content">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a href="plusdinfo.php?<?= $plusinfo['id'] ?>"><?= $plusinfo['appeltitre'] ?></a>
                        </h3>
                      </header>
                      <footer class="entry-footer">
                        <span class="posted-on"><a href="#"><?= $plusinfo['datepubli'] ?></a></span>
                        <span class="byline"><a href="#"><?= $plusinfo['auteur'] ?></a></span>
                      </footer>
                    </div>
                  </div>
                </div>
              </article>
            <?php endforeach ?>
          </div>

          <div class="row post-list two-cols">
            <?php foreach ($plusinfosseconds as $plusinfossecond) : ?>
              <article class="medium-6 large-6 columns">
                <div class="post post-alternate-3 slideUp">
                  <div class="entry-media">
                    <a href="plusdinfo.php?<?= $plusinfossecond['id'] ?>" class="image-post item-overlay ">
                      <img src="admin/plusinfos/images/<?= $plusinfossecond['img'] ?>" alt="<?= $plusinfossecond['appeltitre'] ?>" width="100%">
                    </a>
                    <div class="entry-content">
                      <header class="entry-header">
                        <h3 class="entry-title">
                          <a href="plusdinfo.php?<?= $plusinfossecond['id'] ?>"><?= $plusinfossecond['appeltitre'] ?></a>
                        </h3>
                      </header>
                      <footer class="entry-footer">
                        <span class="posted-on"><?= $plusinfossecond['datepubli'] ?></span>
                        <span class="byline"><a href="#"><?= $plusinfossecond['auteur'] ?></a></span>
                      </footer>
                    </div>
                  </div>
                </div>
              </article>
            <?php endforeach ?>
          </div>

        </div>
      </div>
    </div>

    <img src="images/ban.png" alt="">

    <div class="section margin-bottom-10 columns medium-12 large-12 background-color-off">
      <div class="tmm_row row">

        <div class="relative">
          <h2 class="section-title">Intégration Africaine</h2>

          <div class="row post-list two-cols">
            <?php foreach ($dgias as $dgia) : ?>
              <article class="medium-6 large-6 columns">
                <div class="post border post-classic slideUp" data-os-animation="slideUpRun" data-os-animation-delay="0s">
                  <a href="actu-dgia.php?id=<?= $dgia['id'] ?> " class="image-post item-overlay ">
                    <img src="admin-dgia/plusinfos/images/<?= $dgia['img'] ?>" alt="<?= $dgia['appeltitre'] ?>" width="100%">
                  </a>
                  <header class="entry-header">
                    <h3 class="entry-title"><a href="actu-dgia.php?id=<?= $dgia['id'] ?> "><?= $dgia['appeltitre'] ?> </a></h3>
                  </header>
                  <footer class="entry-footer">
                    <div class="right">
                      <span class="posted-on"><a href="#"><?= $dgia['datepubli'] ?> </a></span>
                    </div>
                  </footer>
                </div>
              </article>
            <?php endforeach ?>
          </div>
        </div>

      </div>

    </div>

    <div class="section margin-bottom-10 columns medium-12 large-12 background-color-off">
      <div class="tmm_row row">

        <div class="relative">
          <h2 class="section-title">Ivoiriens de l'Extérieur</h2>

          <div class="row post-list two-cols">
            <?php foreach ($dgies as $dgie) : ?>
              <article class="medium-6 large-6 columns">
                <div class="post border post-classic slideUp" data-os-animation="slideUpRun" data-os-animation-delay="0s">
                  <a href="actu-dgie.php?id=<?= $dgie['id'] ?> " class="image-post item-overlay ">
                    <img src="admin-dgie/plusinfos/images/<?= $dgie['img'] ?>" alt="<?= $dgie['appeltitre'] ?>" width="100%">
                  </a>
                  <header class="entry-header">
                    <h3 class="entry-title"><a href="actu-dgie.php?id=<?= $dgie['id'] ?> "><?= $dgie['appeltitre'] ?> </a></h3>
                  </header>
                  <footer class="entry-footer">
                    <div class="right">
                      <span class="posted-on"><a href="#"><?= $dgie['datepubli'] ?> </a></span>
                    </div>
                  </footer>
                </div>
              </article>
            <?php endforeach ?>
          </div>
        </div>

      </div>

    </div>

    <img src="images/ban.png" alt="">

    <div class="section margin-bottom-10 columns medium-12 large-12 background-color-off">

      <div class="tmm_row row">

        <div class="relative">
          <h2 class="section-title">Bureau de l'Intégration</h2>

          <div class="row post-list two-cols">

            <article class="medium-6 large-6 columns">

              <div class="post border post-classic slideUp" data-os-animation="slideUpRun" data-os-animation-delay="0s">

                <a href="#" class="image-post item-overlay ">
                  <img src="images/bipia1.jpg" alt="" />
                </a>

                <header class="entry-header">
                  <h3 class="entry-title"><a href="#">Congue iure curabitur inc </a></h3>
                </header>

                <footer class="entry-footer">

                  <div class="left">
                    <span class="cat-links"><a href="#" rel="category tag">Economics</a></span>
                  </div>

                  <div class="right">
                    <span class="posted-on"><a href="#">22.03.2015</a></span>
                  </div>

                </footer>
              </div>
              <!--/ .post-classic-->

            </article>

            <article class="medium-6 large-6 columns">

              <div class="post border post-classic slideUp" data-os-animation="slideUpRun" data-os-animation-delay="0s">

                <a href="#" class="image-post item-overlay ">
                  <img src="images/bipia2.jpg" alt="" />
                </a>

                <header class="entry-header">
                  <h3 class="entry-title"><a href="#">Ornare, netus,
                      repellendu </a></h3>
                </header>

                <footer class="entry-footer">

                  <div class="left">
                    <span class="cat-links"><a href="#" rel="category tag">People</a></span>
                  </div>

                  <div class="right">
                    <span class="posted-on"><a href="#">22.03.2015</a></span>
                  </div>

                </footer>
              </div>
              <!--/ .post-extra-->

            </article>

          </div>
          <!--/ .post-area-->

          <!-- <div class="row post-list full-width">

            <article class="medium-12 large-12 columns">

              <div class="post border post-classic elementFade">

                <a href="#" class="image-post item-overlay ">
                  <img src="images/blog/11_blog.jpg" alt="" width="50%" />
                </a>

                <header class="entry-header">
                  <h3 class="entry-title"><a href="#">Dictum aliquam pellentesque
                      voluptas vestibulum bibendum, pretium cras incidunt</a></h3>
                </header>

                <div class="entry-content">
                  <p>Porta est iaculis, minim consequatur. Cubilia venenatis! Congue iure
                    curabitur incididunt consequat, volutpat sapiente volutpat? Minima. Tempore
                    quos, repellat beatae eleifend laboriosam quaerat. Sodales? Netus. Saepe
                    architecto deleniti, hic lacus! Magna beatae nonummy dapibus debitis, nam,
                    nullam </p>
                </div>

                <footer class="entry-footer">

                  <div class="left">
                    <span class="cat-links"><a href="#" rel="category tag">World</a></span>
                  </div>

                  <div class="right">
                    <span class="posted-on"><a href="#">22.02.2015</a></span>
                    <span class="byline"><a href="#">Alex TM</a></span>
                    <span class="comments-link"><a href="#">0</a></span>
                    <a class="post-like like-qty" data-post_id="156" href="#"><span class="vote-count">0</span></a>
                  </div>

                </footer>
              </div>
            </article>

          </div> -->
          <!--/ .post-area-->

        </div>

      </div>

    </div>
    <!--/ .section -->


  </section>



  <!--/ #main-->

  <aside id="sidebar" class="medium-4 large-4 columns">

    <div id="categories-2" class="widget widget_categories">
      <h3 class="widget-title">Categories</h3>
      <ul>
        <li class="cat-item">
          <a href="biography.php">Biographie</a>
        </li>
        <li class="cat-item">
          <a href="ministremotbio.php">Mot du Ministre</a>
        </li>
        <li class="cat-item">
          <a href="discours.php">Les discours du ministre</a>
        </li>
      </ul>
    </div>

    <div class="widget arqam_counter-widget" id="arqam_counter-widget-2">
      <h3 class="widget-title blink_text" style="background:red">Flash Infos</h3>

      <div class="arqam-widget-counter arq-colZ" style="height: 250px">

        <marquee direction="up" behavior="scroll" scrollamount="5">
          <?php foreach ($flashs as $flash) :
          ?>
            <div class="testimonial container">
              <div class="author-thumb ">
                <img src="admin/flashs/images/<?= $flash['img'] ?>" alt="<?= $flash['appeltitre'] ?>" width="100px">
              </div>
              <p>
                <?= $flash['corps'] ?>
              </p>
            </div>
          <?php endforeach
          ?>
        </marquee>
      </div>
    </div>

    <div class="widget widget_upcoming_events">
      <h3 class="widget-title">Evènements à venir</h3>
      <?php foreach ($events as $event) : ?>
        <ul>
          <li class="has-thumb">
            <div class="event-container">
              <span class="event-date">21<b>Mars</b></span>

              <div class="event-media">
                <div class="item-overlay">
                  <img src="images/blog/idm5.jpg" alt="" />
                </div>

                <div class="event-content with-excerpt">
                  <h4 class="event-title">
                    <a href="#"></a>
                  </h4>

                  <div class="event-text">
                    Conférence de presse du Premier Ministre Amadou Gon Coulibaly <br>
                    Jeudi 21 Mars à 10h à la primature
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      <?php endforeach ?>
    </div>

    <div class="widget widget_upcoming_events">
      <h3 class="widget-title">Le MAGAZINE de la MIAIE</h3>
      <ul>
        <li class="has-thumb">
          <div class="event-container">

            <div class="event-media">
              <div class="item-overlay">
                <img src="docs/magazines/images/4.png" alt="Le magazine de la MIAIE" title="Le magazine de la MIAIE" />
              </div>

              <div class="event-content with-excerpt">
                <h4 class="event-title">
                  <a href="docs/magazines/4.pdf">Le Magazine de la MAIE</a>
                </h4>

                <div class="event-text">
                  <a href="docs/magazines/4.pdf" class="down">Cliquez ici pour télécharger</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!--/ .widget_upcoming_events-->



    <div class="widget widget_metro_style">
      <h3 class="widget-title">DIVERS</h3>
      <ul class="metro_container">
        <li>
          <a class="style-3" href="bourses.php">
            <span>Bourses d'études</span>
            <i>Bourses d'études</i>
          </a>
        </li>
        <li>
          <a class="style-1" href="offres-emplois.php">
            <span>Offres d'emplois</span>
            <i>Offres d'emplois</i>
          </a>
        </li>
        <li>
          <a class="style-4" href="partenaires.php">
            <span>Nos Partenaires</span>
            <i>Nos Partenaires</i>
          </a>
        </li>
        <li>
          <a class="style-2" href="faq.php">
            <span>FAQ</span>
            <i>Foires aux questions</i>
          </a>
        </li>
      </ul>
    </div>



    <!-- Widget Facebook -->
    <div class="widget arqam_counter-widget facebook" id="arqam_counter-widget-1" style="text-align:center">
      <h3 class="widget-title" style="background:#4267b2">Facebook</h3>
      <div class="fb-page" data-href="https://www.facebook.com/MIAIECI/" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/MIAIECI/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MIAIECI/">Ministère de l&#039;Intégration Africaine et des Ivoiriens de
            l&#039;Extérieur</a></blockquote>
      </div>
    </div>

    <!-- Widget Twitter -->
    <div class="widget arqam_counter-widget" id="arqam_counter-widget-2" style="text-align:center">
      <h3 class="widget-title" style="background:#4AB3F4">Twitter</h3>
      <a class="twitter-timeline" href="https://twitter.com/MIAIECI?ref_src=twsrc%5Etfw" data-tweet-limit="1">Tweets by MIAIECI</a>
      <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

    <!-- Widget Facebook -->
    <div class="widget arqam_counter-widget"></div>


    <!-- Widget Youtube -->
    <!-- <div class="widget arqam_counter-widget" id="arqam_counter-widget-3">
      <h3 class="widget-title" style="background:red">Youtube</h3>
      <div class="widget widget_video">
        <div class="image-post">

          <iframe width="560" height="250" src="https://www.youtube.com/embed/FOsKXJ2aG9g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <h4 class="widget-title">La FAO & la BAD</h4>
      </div>
    </div> -->
    <!--/ .widget-container-->



  </aside>
  <!--/ #sidebar-->

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
          <p>
            <input type="text" name="user_name" id="user_name" placeholder="Username*" required="" autocomplete="off" />
          </p>

          <p>
            <input type="email" name="user_email" id="user_email" placeholder="E-mail*" required="" autocomplete="off" />
          </p>

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
      <form action="#" method="post" class="account">
        <fieldset>
          <p>
            <input type="text" name="log" id="user_login" placeholder="Username*" required="" autocomplete="off" />
          </p>

          <p>
            <input type="password" name="pwd" id="user_pass" placeholder="Password*" required="" autocomplete="off" />
          </p>

          <p>
            <input type="checkbox" id="rememberme" class="tmm-checkbox" name="rememberme" value="forever" />

            <label for="rememberme">Remember Me</label>

            <button class="button middle right" type="submit">
              Log In
            </button>

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

<?php
include 'inc/footer.php';
