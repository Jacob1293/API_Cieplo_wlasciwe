<?php /* Template Name: Formularz_ekodomek */ ?>
<?
require(dirname(__FILE__).'/formularz_cieplo/class/miasta.php');

use form\class\getApiCiti;

## zmienne
$homeDir = bloginfo('stylesheet_directory');

?>
<?php get_header(); ?> 

<?php get_template_part('panel-simplebaner'); ?>

<section id="Formularz" class="section_formularz">
    <div class="container">
        <div class="row">
            <?php global $current_user; wp_get_current_user(); ?>
            <form id="form_ekodomek" method="POST" action="<?php bloginfo('stylesheet_directory'); ?>/formularz_cieplo/set_form_objects.php">
                <div class="formularz_box">            
                    <?php 
                    if ( is_user_logged_in() ) {
                        echo '<div id="tab_fast" class="tab show">';
                            get_template_part('./formularz_ekodomek/panels/panel-fast_form'); 
                        echo '</div>';                    
                    } else { 
                        print 'Formularz dostepny tylko dla zalogowanych użytkowników. <a href="'.$homeDir.'/Cieplo_wlasciwe/my-account"> Zaloguj się </a> lub <a href="#"> zarejestruj </a> ';          
                    }                      
                    ?>
                    <a class="accept_fast_form">Zatwierdź</a> 
                </div>                
            </form>           
            <div class='wynik'>
               
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>