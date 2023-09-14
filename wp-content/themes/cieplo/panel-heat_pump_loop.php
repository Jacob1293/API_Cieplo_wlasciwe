<?php
include_once(__DIR__ .'/formularz_cieplo/class/DB/selecting.php');

use form\class\DB\SelectDataFromDB;


$selectDataFromDb = new SelectDataFromDB();

if($args['idApi']) {
    $idApi = $args['idApi'];
}

$columns = '*';
$table = 'users_summary';
$clausule = 'WHERE';
$columnClausule = 'ID_API';
$arraySelectedData = $selectDataFromDb->selectData($columns, $table, $clausule, $columnClausule, $idApi);

foreach($arraySelectedData as $valData) {
    $energyAvgPump = $valData['AVG_HTG_PWR'];
    $energyMaxPump = $valData['MAX_HTG_PWR'];
}

$argsp = array(
    'post_type'         => 'product',
    'posts_per_page'    => '16',
    'post_status'       => 'publish',
    //"paged" => max(1,$page),
    'orderby' => 'date', // we will sort posts by date
    'order'	=>  'DESC', // ASC or DESC
    'meta_query'  => array(  
        'relation'  => 'AND'          
    ),
                         
);

$argPower = array(0 => $energyAvgPump, 1 => $energyMaxPump );

if(!empty($argPower)) {
    $argsp['meta_query'] += array ( 0 =>
        array(
        'key' => 'product_energia',
        'value' => implode(",", $argPower),
        'type'    => 'numeric',
        'compare' => 'BETWEEN'));
}
print_r($argsp);
$query = new WP_Query( $argsp );
	$products = '';
	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();			
            $products .= wc_get_template_part( 'content', 'product' );
        endwhile;  
    endif;
        
die();     
?>