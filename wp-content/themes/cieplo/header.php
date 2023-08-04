<?
//setcookie('Cieplo_wlasciwe', '1011', time()+120);
//header('Location: '.dirname(__FILE__).'/header.php');
?>
<!doctype html> 
<html lang="pl">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/fav.png" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/scss/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
   	<?php wp_head();?>
       
</head>
<?php if ( is_front_page() ) { ?>
    <?php if( get_field('splash', get_option('page_on_front')) ): ?>
    <img id="splash" class="splash" src="<?php awesome_acf_responsive_image(get_field( 'splash', get_option('page_on_front')),'medium','1600px'); ?>">
    <?php endif;?>
<?php }?>
<body class="fade-out" style="opacity: 1;">

<nav id="top" class="nav_top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a href="<?php echo get_home_url();?>" class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_cosen_light.svg" alt="<?php echo get_bloginfo();?>"></a>
                <?php wp_nav_menu( array('theme_location' => 'header-menu' )); ?>
            </div>
        </div>
    </div>
</nav>
<nav id="top_second" class="nav_top second">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a href="<?php echo get_home_url();?>" class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_cosen_dark.svg" alt="<?php echo get_bloginfo();?>"></a>
                <?php wp_nav_menu( array('theme_location' => 'header-menu' )); ?>
            </div>
        </div>
    </div>
</nav>
<nav id="top_mobile" class="nav_top_mobile">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="<?php echo get_home_url();?>" class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_cosen_light.svg" alt="<?php echo get_bloginfo();?>"></a>
            </div>
            <div class="mobile-btn">
                <span class="first"></span>
                <span class="second"></span>
                <span class="third"></span>
            </div>
        </div>
    </div>
    <?php wp_nav_menu( array('theme_location' => 'header-menu' )); ?>
</nav>
<div class="nakladka"></div>