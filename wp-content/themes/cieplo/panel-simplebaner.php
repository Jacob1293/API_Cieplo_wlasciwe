<section id="simplebaner" class="section_simplebaner withbg <?php echo str_replace(".php","",get_page_template_slug( $post->ID));?>">    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="title">
                    <h1><?php the_title();?></h1>
                    <?php if ( function_exists('yoast_breadcrumb') ) {
                      yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                    } ?>
                </div>          
            </div>          
        </div>
    </div>
    <img class="grid" src="<?php bloginfo('stylesheet_directory'); ?>/images/grid_white.png">
    <div class="bg"><?php if(get_the_post_thumbnail()){the_post_thumbnail();}else{ ?><img src="<?php bloginfo('stylesheet_directory'); ?>/images/foto_5.jpg" alt="<?php the_title(); ?>" /><?php } ?></div>
    <img class="saw bottom" src="<?php bloginfo('stylesheet_directory'); ?>/images/saw_white.png">
</section>
<div id="pokamenu"></div>