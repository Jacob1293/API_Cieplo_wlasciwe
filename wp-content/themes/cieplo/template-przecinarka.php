<?php /* Template Name: Przecinarka */ ?>
<?php get_header(); ?> 
<?php get_template_part('panel-simplebaner-2'); ?>

<?php $glowne = get_field('glowne_zdjecie');?>

<section id="przecinarka" class="section_przecinarka">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-4 hidden-xs">
                <div class="galeria">
                    <div class="zdjecie glowne"><a href="<?php if( $glowne ) { echo wp_get_attachment_url($glowne);}?>" data-fancybox="galeria"><img <?php awesome_acf_responsive_image(get_field( 'glowne_zdjecie'),'medium','1600px'); ?> alt="<?php the_field('przecinarka_naglowek');?>"></a></div>
                    <?php $images = get_field('przecinarka_galeria');
                    if( $images ): ?>
                    <?php foreach( $images as $image ): ?>       
                        <div class="zdjecie"><a href="<?php echo $image['url']; ?>" data-fancybox="galeria"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"></a></div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
                <div class="contentbox produktowe">
                    <h1><?php the_field('przecinarka_naglowek');?></h1>
                    <a class="foto" href="<?php if( $glowne ) { echo wp_get_attachment_url($glowne);}?>"><img <?php awesome_acf_responsive_image(get_field( 'glowne_zdjecie'),'medium','1600px'); ?> alt="<?php the_field('przecinarka_naglowek');?>"></a>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                      <p><?php _e('Strony nie znaleziono'); ?></p>
                    <?php endif; ?>
                    <a href="<?php the_field('przecinarka_cta_cel');?>" class="button orange arrow"><?php the_field('przecinarka_cta_etykieta');?></a>
                    <h3><?php the_field('przecinarka_specyfikacja_naglowek');?></h3>
                    <table>
                        <tbody>
                            <?php while ( have_rows('przecinarka_specyfikacja_specyfikacja') ) : the_row(); ?>
                            <tr>
                                <td><?php the_sub_field('przecinarka_specyfikacja_specyfikacja_cecha');?></td>
                                <td><?php the_sub_field('przecinarka_specyfikacja_specyfikacja_wartosc');?></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                <div class="galeria">
                    <div class="zdjecie glowne"><a href="<?php if( $glowne ) { echo wp_get_attachment_url($glowne);}?>" data-fancybox="galeria_mobile"><img <?php awesome_acf_responsive_image(get_field( 'glowne_zdjecie'),'medium','1600px'); ?> alt="<?php the_field('przecinarka_naglowek');?>"></a></div>
                    <?php $images = get_field('przecinarka_galeria');
                    if( $images ): ?>
                    <?php foreach( $images as $image ): ?>       
                        <div class="zdjecie"><a href="<?php echo $image['url']; ?>" data-fancybox="galeria_mobile"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"></a></div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if( get_field('przecinarka_dodatkowyopis') ): ?>
        <div class="row">
            <div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
                <div class="contentbox dodatki">
                    <?php the_field('przecinarka_dodatkowyopis');?>
                </div>
            </div>
        </div>
        <?php endif;?>
    </div>
</section>

<?php get_template_part('panel-kontakt'); ?>
<?php get_footer(); ?>