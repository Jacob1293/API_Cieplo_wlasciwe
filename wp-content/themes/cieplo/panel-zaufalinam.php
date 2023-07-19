<section id="zaufalinam" class="section_panelzaufalinam">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="naglowek black"><?php the_field('zaufali_naglowek', get_option('page_on_front'));?></h2>
                <div class="strzalki">
                    <div class="slajder_zaufalinam_strzalka lewa"></div>
                    <div class="slajder_zaufalinam_strzalka prawa"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="swiper-container slajder_zaufalinam">
                    <div class="swiper-wrapper">
                        <?php while ( have_rows('zaufali_zaufali', get_option('page_on_front')) ) : the_row(); ?>
                            <div class="swiper-slide"><a href="<?php the_sub_field('zaufali_zaufali_link');?>" target="_blank"><span class="centeruj"><img <?php awesome_acf_responsive_image(get_sub_field( 'zaufali_zaufali_logo'),'medium','1600px'); ?> alt="Cosen"></span></a></div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>