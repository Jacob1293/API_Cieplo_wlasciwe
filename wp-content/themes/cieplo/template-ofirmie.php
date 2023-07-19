<?php /* Template Name: O firmie */ ?>
<?php get_header(); ?> 
<?php get_template_part('panel-simplebaner'); ?>

<?php $mapa = get_field('ofirmie_mapa');?>

<section class="section_content tekstowa ofirmie-1" id="tekstowa">
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

<section class="section_content ofirmie-2" id="ofirmie">
    <div class="galeria">
        <?php $images = get_field('ofirmie_galeria');?>
        <?php foreach( $images as $image ): ?>       
            <div class="zdjecie"><a href="<?php echo $image['url']; ?>" data-fancybox="galeria"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php the_title();?>"></a></div>
        <?php endforeach; ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">                
                 <div class="mapa"><a class="foto" href="<?php if( $mapa ) { echo wp_get_attachment_url($mapa);}?>"><img <?php awesome_acf_responsive_image(get_field( 'ofirmie_mapa'),'medium','1600px'); ?> alt="<?php the_title();?>"></a></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
                <div class="contentbox">
                    <?php the_field('ofirmie_opis2');?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('panel-zaufalinam'); ?>
<?php get_template_part('panel-kontakt'); ?>
<?php get_footer(); ?>