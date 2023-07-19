<?php get_header(); ?> 

<?php get_template_part('panel-simplebaner'); ?>

<section class="section_content tekstowa" id="tekstowa">
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

<?php get_footer(); ?>