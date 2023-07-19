<?php get_header(); ?> 

<section id="simplebaner" class="section_simplebaner withbg">    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="title">
                    <h1>Upsss... 404</h1>
                </div>          
            </div>          
        </div>
    </div>
    <div class="bg"><img class="panelbg" src="<?php bloginfo('stylesheet_directory'); ?>/images/foto_3.jpg" alt="Upsss.. 404" /></div>
</section>
<div id="pokamenu"></div>

<section id="tekstowa" class="section_tekstowa">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="contentbox">
                    <h2>Ewidentnie zabłądziłeś</h2>
                    <p>Strona, której szukasz nie istnieje, wróć na <a class="out" href="<?php echo get_home_url();?>">stronę główną</a></p>    
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>