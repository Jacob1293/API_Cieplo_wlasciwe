<?php /* Template Name: Dlaczego */ ?>
<?php get_header(); ?> 

<?php get_template_part('panel-simplebaner'); ?>

<section id="dlaczego" class="section_dlaczego">
    <?php if( have_rows('panele') ): ?>
    <?php $i = 0; ?>
    <?php while( have_rows('panele') ): the_row(); $i++; ?>
    <?php if($i%2 == 0) : ?>
    <div id="dlaczego_<?php echo $i ?>" class="dlaczego">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-4 col-xs-12 col-xs-offset-0">
                    <span><?php echo $i ?></span>
                    <div class="contentbox">
                        <h2><?php the_sub_field('panel_naglowek');?></h2>
                        <?php the_sub_field('panel_tresc');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-left bg-lg4 bg-md4 bg-sm3 bg-xs12">
            <img <?php awesome_acf_responsive_image(get_sub_field('panel_foto'),'full','1600px'); ?> alt="<?php the_sub_field('panel_naglowek');?>">
        </div>
    </div>
    <?php else : ?>
    <div id="dlaczego_<?php echo $i ?>" class="dlaczego">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-offset-1 col-sm-8 col-sm-offset-1 col-xs-12">
                    <span><?php echo $i ?></span>
                    <div class="contentbox">
                        <h2><?php the_sub_field('panel_naglowek');?></h2>
                        <?php the_sub_field('panel_tresc');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-right bg-lg4 bg-md4 bg-sm3 bg-xs12">
            <img <?php awesome_acf_responsive_image(get_sub_field('panel_foto'),'full','1600px'); ?> alt="<?php the_sub_field('panel_naglowek');?>">
        </div>
    </div>
    <?php endif;?>
    <?php endwhile; endif; ?>
</section>

<?php get_template_part('panel-zaufalinam'); ?>
<?php get_template_part('panel-kontakt'); ?>

<?php get_footer(); ?>