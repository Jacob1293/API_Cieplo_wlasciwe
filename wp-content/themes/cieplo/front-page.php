<?php get_header(); ?> 

<section id="welcome" class="section_panelwelcome">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>Przecinarki automatyczne <strong>C<span>o</span>sen</strong></h1>
                <a href="#oferta" class="button arrow orange">Nasze produkty</a>
            </div>
        </div>
    </div>
    <div class="swiper-container slajder_hasla">
        <div class="swiper-wrapper">
            <h3 class="swiper-slide">moc</h3>
            <h3 class="swiper-slide">jakość</h3>
            <h3 class="swiper-slide">doświadczenie</h3>
        </div>
    </div>
    <img class="grid" src="<?php bloginfo('stylesheet_directory'); ?>/images/grid_white.png">
    <img class="sygnet top" src="<?php bloginfo('stylesheet_directory'); ?>/images/sygnet.svg">
    <img class="sygnet bottom" src="<?php bloginfo('stylesheet_directory'); ?>/images/sygnet.svg">
    <video loop="" autoplay="" muted="" playsinline="">
        <source src="<?php bloginfo('stylesheet_directory'); ?>/images/cosen_1.mp4" type="video/mp4" media="all and (min-width:1200px)">
        <source src="<?php bloginfo('stylesheet_directory'); ?>/images/cosen_2.mp4" type="video/mp4" media="all and (max-width:1199px)">
        <source src="<?php bloginfo('stylesheet_directory'); ?>/images/cosen_3.mp4" type="video/mp4" media="all and (max-width:768px)">
        <source src="<?php bloginfo('stylesheet_directory'); ?>/images/cosen_4.mp4" type="video/mp4" media="all and (max-width:500px)">
    </video>
    <canvas class="canvas"></canvas>
    <img class="saw bottom" src="<?php bloginfo('stylesheet_directory'); ?>/images/saw_white.png">
</section>
<div class="glowna" id="pokamenu"></div>

<section id="oferta" class="section_paneloferta">
    <div class="container">
        <div class="flexrow">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <div class="wszystkie">
                    <h2 class="naglowek black"><?php the_field('oferta_naglowek', get_option('page_on_front'));?></h2>
                    <a href="<?php the_field('oferta_cta_cel', get_option('page_on_front'));?>" class="button arrow orange"><?php the_field('oferta_cta_etykieta', get_option('page_on_front'));?></a>
                </div>
            </div>
            <?php 
                $currID = get_the_ID();
                $args = array( 'post_type' => 'page', 'posts_per_page' => -1, 'post_parent' => get_field('page_przecinarki', get_option('page_on_front')), 'order' => 'ASC', 'orderby' => 'menu_order');
                query_posts( $args ); while ( have_posts() ) : the_post(); $index++;
            ?>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 licz">
                <a href="<?php the_permalink();?>" class="produkt">
                   <img <?php awesome_acf_responsive_image(get_field( 'glowne_zdjecie'),'medium','1600px'); ?> alt="<?php the_title();?>"> 
                   <h3><?php the_title();?></h3>
                </a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>

<section id="mps" class="section_panelmps">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12">
                <h2 class="naglowek black"><?php the_field('mps_naglowek', get_option('page_on_front'));?></h2>
                <div class="contentbox">
                    <?php the_field('mps_opis', get_option('page_on_front'));?>
                </div>
                <a href="<?php the_field('mps_cta_cel', get_option('page_on_front'));?>" class="button arrow orange"><?php the_field('mps_cta_etykieta', get_option('page_on_front'));?></a>
            </div>
        </div>
    </div>
    <div class="bg-right bg-md6 bg-sm4 bg-xs12">
        <img <?php awesome_acf_responsive_image(get_field( 'mps_foto'),'medium','1600px'); ?> alt="<?php the_field('mps_naglowek', get_option('page_on_front'));?>">
    </div>
</section>

<section id="rozwiazania" class="section_panelrozwiazania">
    <img class="saw bottom" src="<?php bloginfo('stylesheet_directory'); ?>/images/saw_white.png">
    <img class="saw top" src="<?php bloginfo('stylesheet_directory'); ?>/images/saw_white.png">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="naglowek white"><?php the_field('rozwiazania_naglowek', get_option('page_on_front'));?></h2>
            </div>
        </div>
    </div>
    <div class="flexrow">
        <?php while ( have_rows('rozwiazania_rozwiazania', get_option('page_on_front')) ) : the_row(); ?>
        <div class="col5">
            <div class="shadowbox">
                <img src="<?php the_sub_field('rozwiazania_rozwiazania_ikona');?>" alt="<?php the_sub_field('rozwiazania_rozwiazania_naglowek');?>">
                <h3><?php the_sub_field('rozwiazania_rozwiazania_naglowek');?></h3>
                <p><?php the_sub_field('rozwiazania_rozwiazania_tresc');?></p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a href="<?php the_field('rozwiazania_cta_cel', get_option('page_on_front'));?>" class="button arrow white"><?php the_field('rozwiazania_cta_etykieta', get_option('page_on_front'));?></a>
            </div>
        </div>
    </div>
    <div class="backgroundfixed" style="background-image:url('<?php the_field('rozwiazania_tlo', get_option('page_on_front'));?>');"></div>
</section>

<section id="onas" class="section_panelonas">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-8 col-xs-12">
                <h2 class="naglowek black"><?php the_field('ofirmie_naglowek', get_option('page_on_front'));?></h2>
                <div class="contentbox">
                    <?php the_field('ofirmie_opis', get_option('page_on_front'));?>
                </div>
                <a href="<?php the_field('ofirmie_cta_cel', get_option('page_on_front'));?>" class="button arrow orange"><?php the_field('ofirmie_cta_etykieta', get_option('page_on_front'));?></a>
            </div>
        </div>
    </div>
    <div class="bg-right bg-md6 bg-sm4 bg-xs12">
        <img <?php awesome_acf_responsive_image(get_field( 'ofirmie_foto'),'medium','1600px'); ?> alt="<?php the_field('ofirmie_naglowek', get_option('page_on_front'));?>">
    </div>
</section>

<?php get_template_part('panel-zaufalinam'); ?>
<?php get_template_part('panel-kontakt'); ?>

<?php get_footer(); ?>