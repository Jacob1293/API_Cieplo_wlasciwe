<section id="formularz" class="section_panelformularz">
    <img class="sygnet" src="<?php bloginfo('stylesheet_directory'); ?>/images/sygnet.svg">
    <div class="container"> 
        <div class="row">
            <div class="col-md-6 hidden-sm hidden-xs height100 absolut">
                <div class="centeruj">
                    <div class="to">
                        <h2 class="naglowek white"><?php the_field('katalog_naglowek', get_option('page_on_front'));?></h2>
                        <a href="<?php the_field('katalog_plik', get_option('page_on_front'));?>" class="button arrow white" download><?php the_field('katalog_cta_etykieta', get_option('page_on_front'));?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-6 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                <h2 class="naglowek orange"><?php the_field('formularz_naglowek', get_option('page_on_front'));?></h2>
                <?php echo do_shortcode('[contact-form-7 id="58" title="Formularz kontaktowy"]');?>    
                <script>
                    $(document).ready(function () {
                        document.getElementById('myElement').type = 'text';
                    });
                </script>
                <input type="hidden" id="strona" value="<?php echo get_the_permalink(); ?>" />
                <input type="hidden" id="tytul" value="<?php echo get_the_title(); ?>" />
            </div>
            <div class="hidden-lg hidden-md col-sm-12 col-xs-12">
                <div class="centeruj">
                    <div class="to">
                        <h2 class="naglowek white"><?php the_field('katalog_naglowek', get_option('page_on_front'));?></h2>
                        <a href="<?php the_field('katalog_plik', get_option('page_on_front'));?>" class="button arrow white" download><?php the_field('katalog_cta_etykieta', get_option('page_on_front'));?></a>
                    </div>
                    <img class="saw bottom" src="<?php bloginfo('stylesheet_directory'); ?>/images/saw_gray.png">
                    <div class="bgsm">
                        <img <?php awesome_acf_responsive_image(get_field( 'katalog_tlo', get_option('page_on_front')),'medium','1600px'); ?> alt="<?php the_field('katalog_naglowek', get_option('page_on_front'));?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-left bg-md6 bg-hiddensm">
        <img <?php awesome_acf_responsive_image(get_field( 'katalog_tlo', get_option('page_on_front')),'medium','1600px'); ?> alt="<?php the_field('katalog_naglowek', get_option('page_on_front'));?>">
    </div>
</section>

<section id="kontakt" class="section_panelkontakt">
    <img class="saw top" src="<?php bloginfo('stylesheet_directory'); ?>/images/saw_white.png">
    <div class="container">
        <div class="row">
            <?php while ( have_rows('kontakt_dzialy', get_option('page_on_front')) ) : the_row(); ?>
            <div class="col-sm-4 col-xs-12">
                <div class="contactblock">
                    <h2 class="naglowek black"><?php the_sub_field('kontakt_dzial');?></h2>
                    <p><strong><?php the_sub_field('kontakt_dzial_osoba');?></strong></p>
                    <p><?php the_sub_field('kontakt_dzial_osoba_stanowisko');?></p>
                    <span class="block"><a href="tel://<?php the_sub_field('kontakt_dzial_osoba_telefon');?>" class="phone"><?php the_sub_field('kontakt_dzial_osoba_telefon');?></a></span>
                    <span class="block"><a href="mailto:<?php the_sub_field('kontakt_dzial_osoba_email');?>" class="mail"><?php the_sub_field('kontakt_dzial_osoba_email');?></a></span>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>