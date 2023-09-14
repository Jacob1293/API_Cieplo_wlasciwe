
<?php 
/* Template Name: Summary */

if (!empty( get_query_var('summary_id'))){
    $idApi = get_query_var('summary_id');
    //echo 'Wybrano rekord: '.$q_show;
}


get_template_part('./panel-summary', null, array('idApi' => $idApi));

get_template_part('./panel-heat_pump_loop', null, array('idApi' => $idApi));

?>