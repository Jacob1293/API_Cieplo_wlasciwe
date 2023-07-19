<?php /* Template Name: Kontakt */ ?>
<?php get_header(); ?> 

<?php get_template_part('panel-simplebaner'); ?>

<section id="kontakt" class="section_kontakt">
    <div class="container">
        <div class="row">
            <?php while ( have_rows('kontakt_dzialy', get_option('page_on_front')) ) : the_row(); ?>
            <div class="col-sm-4 col-xs-12">
                <div class="contactblock">
                    <?php if( get_sub_field('kontakt_dzial_osoba_pytanko') == 'logo' ): ?>
                        <div class="zdjecie">
                            <span><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_cosen_dark.svg" alt="<?php the_sub_field('kontakt_dzial_osoba');?>" class="ico logo"></span>
                            <img <?php awesome_acf_responsive_image(get_sub_field( 'kontakt_dzial_osoba_zdjecie', get_option('page_on_front')),'medium','1600px'); ?> alt="<?php the_sub_field('kontakt_dzial_osoba');?>" class="osoba">
                        </div>
                    <?php endif; ?>
                    <?php if( get_sub_field('kontakt_dzial_osoba_pytanko') == 'ikona' ): ?>
                        <div class="zdjecie">
                            <img src="<?php the_sub_field('kontakt_dzial_osoba_ikona');?>" alt="<?php the_sub_field('kontakt_dzial_osoba');?>" class="ico logo">
                            <img <?php awesome_acf_responsive_image(get_sub_field( 'kontakt_dzial_osoba_zdjecie', get_option('page_on_front')),'medium','1600px'); ?> alt="<?php the_sub_field('kontakt_dzial_osoba');?>" class="osoba">
                        </div>
                    <?php endif; ?>
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

<?php get_template_part('panel-kontakt'); ?>

<?php get_footer(); ?>