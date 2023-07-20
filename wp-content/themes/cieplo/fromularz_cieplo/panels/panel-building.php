
<div>
<p>Rodzaj zabudowy</p>
    <input type="radio" id="building_type_single_house" name="building_type" value='single_house'><label for="building_type_single_house">Dom jednorodzinny wolnostojący</label></br>
    <input type="radio" id="building_type_double_house" name="building_type" value='double_house'><label for="building_type_double_house"> Zabudowa bliźniacza</label></br>
    <input type="radio" id="building_type_row_house" name="building_type" value='row_house'><label for="building_type_row_house"> Dom w zabudowie szeregowej</label></br>
    <input type="radio" id="building_type_apartment" name="building_type" value='apartment'><label for="building_type_apartment"> Mieszkanie</label></br>
</div>
<div>
    <p>Rok budowy</p>
    <label for="construction_year">Podaj rok budowy</label><input type="text" id="construction_year" name="construction_year">
</div>
<div>
    <p>Lokalizacja</p>
    <label for="localization">Proszę podać przybliżoną lokalizację</label>
    <input method="POST" action="<?php bloginfo('stylesheet_directory'); ?>/fromularz_cieplo/class/miasta.php" type="text" name="city" list="cityname"><a id="search_city" class="button">Szukaj</a>
       <div id='searched_cities'>

       </div>
</div>
<a class="button next_form">Dalej</a>


