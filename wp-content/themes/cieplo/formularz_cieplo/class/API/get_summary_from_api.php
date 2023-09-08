<?php
namespace form\class\API;

$path = preg_replace( '/wp-content.*$/', '', __DIR__ );

require_once($path.'wp-load.php');

class GetSummaryApi
{
    public static function getSummaryApi(string $jsonArrayFormsFields) {
        $token = '30f1471723446fc5b7c5321ae3d5f50353e637f1';
        $url = 'https://cieplo.app/api/calculation?token=';
    
        if ($jsonArrayFormsFields) {            
            $response = wp_remote_post($url.$token, array(
                'headers'     => array('Content-Type' => 'application/json; charset=utf-8'),
                'body'        => $jsonArrayFormsFields,
                'method'      => 'POST'
            ));
            
            $responseBody = wp_remote_retrieve_body($response);
            
            $decoded = json_decode($responseBody, true);

            if($decoded['errors']) {
                $srraySummaryApi = $decoded['errors'];
            } else {
                $srraySummaryApi = $decoded;
            }            

            return $srraySummaryApi;
            
        }
    }
}
?>