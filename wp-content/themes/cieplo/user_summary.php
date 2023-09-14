<?php 

include_once(__DIR__ .'/formularz_cieplo/class/DB/selecting.php');

use form\class\DB\SelectDataFromDB;


$selectDataFromDb = new SelectDataFromDB();

$userId = get_current_user_id();
$column = null;
$clausule = null;
 ?>
<h3> Wyniki obliczeń </h3>
<?php 
$columns = '*';
$table = 'users_summary';
$clausule = 'WHERE';
$columnClausule = 'ID_USER';
$arraySelectedData = $selectDataFromDb->selectData($columns, $table, $clausule, $columnClausule, $userId);

?>
    <div> 
    <table class="tg">
        <thead>
            <tr>
                <th class="tg-0lax"> ID</th>
                <th class="tg-0lax">Powierzchnia ogrzewania</th>
                <th class="tg-0lax">Max moc ogrzewania</th>
                <th class="tg-0lax">Średnia moc ogrzewania</th>
                <th class="tg-0lax">Link</th>
            </tr>
        </thead>
        <tbody>
<?php
foreach($arraySelectedData as $valData ) {
    ?>
               
            <tr>
                <td class="tg-0lax"><?php echo $valData['ID'] ?></td>
                <td class="tg-0lax"><?php echo round($valData['TOTAL_AREA'],2) ?></td>
                <td class="tg-0lax"><?php echo round($valData['MAX_HTG_PWR'],2) ?></td>
                <td class="tg-0lax"><?php echo round($valData['AVG_HTG_PWR'],2) ?></td>
                <td class="tg-0lax"><a href="<?php echo get_home_url().'/wynik-obliczania/?summary_id='.$valData['ID_API']?>">Podgląd</a></td>
            </tr>      

    <?php
}

?>

</tbody>
    </table>       
    </div>
