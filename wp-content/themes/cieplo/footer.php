<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php wp_nav_menu( array('theme_location' => 'footer-menu' )); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12 text-left">
                Cosen Europe <?php echo date('Y'); ?>. Wszystkie prawa zastrzeżone.
            </div>
            <div class="col-sm-6 col-xs-12 text-right">
                <a href="http://mtlmedia.pl" target="_blank">Wykonane z dumą przez MTL Media 2019</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cookie.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>


<!-- swiper -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/dist/css/swiper.min.css">
<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/dist/js/swiper.js"></script>

<!-- fancybox -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.fancybox.min.css" type="text/css">
<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox.min.js"></script>

<!-- fromularz -->
<script type='text/javascript' src="<?php bloginfo('stylesheet_directory'); ?>/js/fromularz-ajax.js"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/canvas-video-player.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<?php wp_footer(); ?>
</body>
</html>