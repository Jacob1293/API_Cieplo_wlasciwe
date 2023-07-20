<?php /* Template Name: Formularz_cieplo */ ?>
<?
require('./class/miasta.php');

use form\class\getApiCiti;

?>
<?php get_header(); ?> 

<?php get_template_part('panel-simplebaner'); ?>

<?
if(isset($_POST['building_type'])) {
    $building_type = $_POST('building_type');
    echo  $building_type; 
}
    

?>

<section id="Formularz" class="section_formularz">
    <div class="container">
        <div class="row">
            <h1> Znajdź sprzęt do sowjego ciepła </h1>
            <div class="tab_form">
                <a id="tab_1" show="true" numb="1"><span></span>Miezkanie</a>
                <a id="tab_2" numb="2"><span></span>Wymiar</a>
                <a id="tab_3" numb="3"><span></span>Ściany</a>
            </div>
            <?php global $current_user; wp_get_current_user(); ?>
            <form id="form_cieplo" method="POST" action="<?php bloginfo('stylesheet_directory'); ?>/fromularz_cieplo/set_form_objects.php">
                <div class="formularz_box">            
                    <?php 
                    if ( is_user_logged_in() ) {
                        echo '<div id="tab_1" class="tab show" numb="1">';
                            get_template_part('./fromularz_cieplo/panels/panel-building'); 
                        echo '</div>';
                        echo '<div id="tab_2" class="tab" numb="2">'; 
                            get_template_part('./fromularz_cieplo/panels/panel-wall'); 
                        echo '</div>';
                    } else { 
                        print 'Formularz dostepny tylko dla zalogowanych użytkowników. <a href="#"> Zaloguj się </a> lub <a href="#"> zarejestruj </a> ';          
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