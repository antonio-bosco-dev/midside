<!DOCTYPE html>
<!--<html lang="it">
<head>

     <title>Gedem</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">

     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">


     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/1a6f2ffd2e.js" crossorigin="anonymous"></script>

</head>-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'worky-theme/site/page-start' ); ?>
<?php worky_get_page_preloader(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'worky' ); ?></a>
	<header id="masthead" <?php echo worky_get_container_classes( 'site-header' ); ?> style="
    background-color: white;
">
	<!--	<a href="https://www.templatemonster.com/wordpress-themes/worky-architectural-bureau-multipurpose-modern-elementor-wordpress-theme-76333.html" class="monst2-link">
			<img class="big-monst2" src=<?php echo get_template_directory_uri()."/assets/banners/monstroid2-big.png"; ?> alt="monstroid2">
			<img class="small-monst2" src=<?php echo get_template_directory_uri()."/assets/banners/monstroid2-small.png"; ?> alt="monstroid2">
		</a>
	-->
        <?php worky_top_panel_banner(); ?>
		<?php get_template_part( 'template-parts/header', 'header' ); ?>
	</header><!-- #masthead -->

	<?php get_template_part( 'template-parts/breadcrumbs' ); ?>
	<div id="content" <?php echo worky_get_container_classes( 'site-content' ); ?>>
     <!-- PRE LOADER
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>
-->




     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">


               <div class="row">

                         <div class="owl-carousel owl-theme">

                              <div class="item item-first">
                                <div class="cover__filter"></div>
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h1>GEDEM</h1>
                                             <ul class="social-icon">
                                                  <li><a href="#" class="fab fa-facebook-f"></a></li>
                                                  <li><a href="#" class="fab fa-youtube"></a></li>
                                                  <li><a href="#" class="fab fa-instagram"></a></li>
                                                  <li><a href="#" class="fas fa-globe"></a></li>

                                             </ul>

                                        </div>
                                   </div>
                              </div>
                         </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">


               <div class="row">
                 <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                             <h2 class="wow fadeInUp" data-wow-delay="0.6s">Biografia</h2>
                             <div class="wow fadeInUp" data-wow-delay="0.8s">
                                  <p>Gedem, pseudonimo di Gabriele Di Marzio, classe 2000, ?? un giovane artista Foggiano che si ?? fatto strada nell???ambito della scena rap/hip hop foggiana e pugliese con la pubblicazione dell???album Face 2 Face di 7 tracce, interamente prodotto da Giorgio Di Dio e di un singolo Mirror prodotto da Antonio Bosco e Feliciano Chiriaco. Ha aperto concerti di artisti della portata di Claver Gold ed ?? stato selezionato da Mezzosangue e dal suo team per la partecipazione all???Hurricane Tournament tenutosi a Bari l???8 dicembre 2019.<br> Amante dell??? old school, le sonorit?? del progetto variano dal rap funky dei primi anni 2000 a quelle pi?? dure e moderne dell???ultimo periodo, lasciando spazio a ritornelli R&B, come Poison, che gode della collaborazione con Francesca Sevi, in arte Missey. Il concept album si basa su uno storytelling nel quale l???artista percepisce una trasformazione dentro di s?? a causa di sofferenze, delusioni e malumori che lo porter?? a tirare fuori la parte peggiore del suo io, l???alter ego Twiny, che affronta gli ostacoli e le difficolt?? con un???ottica satirica e cattiva adottando nelle liriche lo standard del politically incorrect. Il dramma interiore dell???artista non si conclude in Face 2 Face. Gedem difatti rilascia il singolo Mirror in cui cerca di fronteggiare i conflitti interiori tra ci?? che sente e ci?? che vede nel suo riflesso tentando di entrare in contatto diretto con la parte pi?? astratta e pi?? oscura di s??, guardandola negli occhi. ?? proprio l?? che il suo riflesso prende il sopravvento e rompe lo specchio fondendosi con l???artista. <br> <br> La prossima uscita sar?? un singolo che vedr?? unite le due personalit?? di Gedem e anticiper?? il sound e il concept del prossimo album.</p>

                             </div>
                             <figure class="profile wow fadeInUp" data-wow-delay="1s">
                               <a href="https://midside.it/twinyindustry">
                                  <img src="https://www.midside.it/wp-content/uploads/2021/01/logo-twinyindustry-nero-sofndo-1024x612.jpg" class="img-responsive" alt="">
                                  <figcaption>
                                       <h3>Twiny Industry</h3>
                                  </figcaption>
                                  </a>
                             </figure>
                        </div>
                  </div>

                 <div class="col-md-6 col-sm-6">
                   <iframe src="https://open.spotify.com/embed/artist/30OOmhQeUymcKmDrbI5Bbb" width="400" height="500" frameborder="0" allowtransparency="true" allow="encrypted-media" class="spotifyembed"></iframe>
                   <!--  <div class="ytembed">
                     <iframe width="576" height="324" src="https://www.youtube.com/embed/QiHPZjG_878" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div>-->
                </div>
                </div>
            </div>
            <div class="wow fadeInUp">
              <h2 class="wow fadeInUp videotitle" data-wow-delay="0.6s">Guarda l'ultimo video</h2>
              <div class="ytembed">
               <iframe width="800" height="450" src="https://www.youtube.com/embed/QiHPZjG_878" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>

            </div>

     </section>





     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
