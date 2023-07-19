<?php /* Template Name: Przecinarki */ ?>
<?php get_header(); ?> 
<?php get_template_part('panel-simplebaner'); ?>

<section class="section_content przecinarki" id="przecinarki">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                <div class="contentbox">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                        the_content();
                    endwhile;
                    else: ?>
                      <p><?php _e('Strony nie znaleziono'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="oferta" class="section_ofertaprzecinarek">
    <div class="container">
        <div class="flexrow">
            <?php 
                $currID = get_the_ID();
                $args = array( 'post_type' => 'page', 'posts_per_page' => -1, 'post_parent' => $currID, 'order' => 'ASC', 'orderby' => 'menu_order');
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

<?php get_template_part('panel-kontakt'); ?>
<?php get_footer(); ?>