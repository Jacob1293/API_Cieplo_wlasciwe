<?php

/*
Plugin Name: EkoLicznik
Description: Wtyczka, która ma za zadanie pobrać dane z Ciepła właściwego po API i zaprezentować odbiorcy  
Version: 1.0
Author: Jacob1293
Author URI: https://tojekmek.pl
*/

require_once(ABSPATH . 'wp-admin/includes/image.php');

require 'functions.php';

add_action('admin_menu', 'import_plugin_create_menu');

function import_plugin_create_menu()
{

    //create new top-level menu

    add_menu_page('Deante API', 'Deante API', 'administrator', __FILE__, 'import_options_page', plugins_url('icon.png', __FILE__));

    add_submenu_page(__FILE__, 'Empik', 'Empik', 'manage_options', __FILE__.'/Empik_Crone', 'empik_crone');

    //call register settings function

    add_action('admin_init', 'register_import_system_settings');
}

function register_import_system_settings() {
	register_setting('import_system_option', 'api-token');			
}


function import_options_page () {
    wp_head();
?>
	<div class="wrap">
		<h1>Deante API</h1>
		<div id="col-container">
			<div class="postbox-container">
				<div class="col-wrap">
					<h2>Ustawienia</h2>
					<div class="form-wrap">
						<form method="post" action="options.php">
							<?php settings_fields('import_system_option'); ?>
							<?php do_settings_sections('import_system_option'); ?>
							<div class="form-field">
						    	<label>Klucz API Deante</label>
								<input type="password" placeholder="Token do API" name="api-token" value="<?php echo esc_attr(get_option('api-token')); ?>" />
								<hr>
							</div>
							<?php submit_button(); 
							?>
						</form>
						<h2>Akcje</h2>
						<form method="post" method="POST" action="">
                            <p><?php echo date('H:i:s'); ?></p>
                            <p><?php echo $_SERVER['REQUEST_URI']; ?></p>
                            <p><?php $current_user = wp_get_current_user();
                            printf( __( 'Username: %s', 'textdomain' ), esc_html( $current_user->user_login ) ) . '<br />';?></p>
							<button name="download-products" id="download-products" class="button">
								Pobierz aktualną listę produktów
							</button>
                            <button name="download-test" id="download-test" class="button">
								Testy
							</button>
                            </br>
                            <p class="sale_price"><b>Aktualizacja ceny</b></p>
                            <div class="div_lwart"><p>Wartość</p><input type="text" id="lwart" name="lwart" pattern="[0-9]"> </div>                            
                            <button name="sale_prc" id="sale_prc" class="button">
								Obniż w % <span style="padding-top:3px" class="dashicons dashicons-arrow-down-alt"></span>
							</button>       
                            <button name="sale_zl" id="sale_zl" class="button">
								Obniż w zł <span style="padding-top:3px" class="dashicons dashicons-arrow-down-alt"></span>
							</button>       
                            <button name="catalog_price" id="catalog_price" class="button">
								Cena katalogowa <span style="padding-top:3px" class="dashicons dashicons-arrow-up-alt"></span>
							</button>                                                  
						</form>
					</div>
                    
                    <div class="db_data">
                        <table >
                            <tr> 
                                <td style="width: 68px">ID_Prod.</td>
                                <td style="width: 76px">Data_aktu.</td>
                                <td style="width: 70px">Price_bef</td>
                                <td style="width: 70px">Price_aft</td>
                                <td style="width: 60px">Quant_bef</td>
                                <td style="width: 60px">Quant_aft</td>
                                <td style="width: 80px">UID</td>
                            </tr>
                        </table>
                        <div class="db_data_table">
                            <table >
                               
                                <?php 
                                    $connection = OpenCon();
                                    $query = "
                                        SELECT MUP.product_id, MU.reg_date ,MUP.cena_przed, MUP.cena_po, MUP.ilosc_przed, MUP.ilosc_po, WPO.meta_value 
                                        FROM mndesign_update_data MUP
                                        JOIN mndesign_update MU ON MUP.mtlupd_id = MU.id
                                        JOIN wp_postmeta WPO ON MUP.product_id = WPO.post_id 
                                                               AND WPO.meta_key = '_sku'
                                        WHERE MU.reg_date > SYSDATE() - INTERVAL 2 DAY
                                        ORDER BY MUP.id DESC
                                        ";
                                    $stmt = $connection->prepare($query);
                                    try {
                                        $stmt->execute();
                                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                            $field1name = $row["product_id"];
                                            $field2name = $row["reg_date"];
                                            $field3name = $row["cena_przed"];
                                            $field4name = $row["cena_po"];
                                            $field5name = $row["ilosc_przed"];
                                            $field6name = $row["ilosc_po"];
                                            $field7name = $row["meta_value"];
                                            echo '
                                        <tr>
                                                    <td style="width: 68px"><b>'.$field1name.'</b></td> 
                                                    <td style="width: 64px">'.$field2name.'</td>
                                                    <td style="width: 70px">'.$field3name.'</td>
                                                    <td style="width: 70px">'.$field4name.'</td>
                                                    <td style="width: 60px">'.$field5name.'</td>
                                                    <td style="width: 60px">'.$field6name.'</td>
                                                    <td style="width: 60px">'.$field7name.'</td>
                                            </tr>
                                            ';
                                        }
                                        
                                    }
                                    catch(PDOException $e) {
                                        die($e->getMessage());
                                        print $e."Błędny select id"; 
                                    }    

                                ?>    
                                
                            </table>  
                        </div>                  
                    </div>                    
				</div>
			</div>
		</div>
	</div>
<?php 
 wp_footer();
}
