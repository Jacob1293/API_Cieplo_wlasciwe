<?php /* Template Name: Formularz_cieplo */ ?>
<?
require(dirname(__FILE__).'/formularze/formularz_cieplo/class/miasta.php');

use form\class\getApiCiti;

## zmienne
$homeDir = bloginfo('stylesheet_directory');

?>
<?php get_header(); ?> 

<?php get_template_part('panel-simplebaner'); ?>

<section id="Formularz" class="section_formularz">
    <div class="container">
        <div class="row">
            <h1> Znajdź sprzęt do sowjego ciepła </h1>
            <div class="tab_form">
                <a id="tab_1" show="true" numb="1"><span></span>Budynek</a>
                <a id="tab_2" numb="2"><span></span>Lokalizacja</a>
                <a id="tab_3" numb="3"><span></span>Wymiary</a>
                <a id="tab_4" numb="4"><span></span>Ściany</a>
                <a id="tab_5" numb="5"><span></span>Ocieplenie</a>
                <a id="tab_6" numb="6"><span></span>Ogrzewanie</a>
            </div>
            <?php global $current_user; wp_get_current_user(); ?>
            <form id="form_cieplo" method="POST" action="<?php bloginfo('stylesheet_directory'); ?>/formularze/formularz_cieplo/set_form_objects.php">
                <div class="formularz_box">            
                    <?php 
                    if ( is_user_logged_in() ) {
                        echo '<div id="tab_1" class="tab show" numb="1">';
                            get_template_part('./formularze/formularz_cieplo/panels/panel-building'); 
                        echo '</div>';
                        echo '<div id="tab_2" class="tab" numb="2">'; 
                            get_template_part('./formularze/formularz_cieplo/panels/panel-localization'); 
                        echo '</div>';
                        echo '<div id="tab_3" class="tab" numb="3">'; 
                            get_template_part('./formularze/formularz_cieplo/panels/panel-sizes'); 
                        echo '</div>';
                        echo '<div id="tab_4" class="tab" numb="4">'; 
                            get_template_part('./formularze/formularz_cieplo/panels/panel-wall'); 
                        echo '</div>';
                        echo '<div id="tab_5" class="tab" numb="5">'; 
                            get_template_part('./formularze/formularz_cieplo/panels/panel-attic-ground_floor'); 
                        echo '</div>';
                        echo '<div id="tab_6" class="tab" numb="6">'; 
                            get_template_part('./formularze/formularz_cieplo/panels/panel-heating'); 
                        echo '</div>';
                    } else { 
                        print 'Formularz dostepny tylko dla zalogowanych użytkowników. <a href="'.$homeDir.'/Cieplo_wlasciwe/my-account"> Zaloguj się </a> lub <a href="#"> zarejestruj </a> ';          
                    }                      
                    ?>
                    <a class="accept_form">Zatwierdź</a> 
                </div>                
            </form>           
            <div class='wynik'>
               
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>