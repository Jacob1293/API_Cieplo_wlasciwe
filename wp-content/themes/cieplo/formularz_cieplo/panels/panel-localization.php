<div id="div_form_2_year" class="div_form_2 tab_div_form_full" numb="2">
    <p>Rok budowy</p>
    <label class="label_small_title" for="construction_year">Podaj rok budowy</label><select id="construction_year" name="construction_year" class=" form-control">
        <option value="2023">2023+</option>
        <option value="2022">2022</option>
        <option value="2021">2021</option>
        <option value="2011">lata 2011 – 2020</option>
        <option value="2000">lata 2000 – 2010</option>
        <option value="1990">lata 90-te</option>
        <option value="1980">lata 80-te</option>
        <option value="1970">lata 70-te</option>
        <option value="1960">lata 60-te</option>
        <option value="1950">lata 50-te</option>
        <option value="1940">lata 40-te</option>
        <option value="1939">gdzieś przed II wojną</option>
        <option value="1914">gdzieś przed I wojną</option>
    </select>
</div>
<div id="div_form_2_localization" class="div_form_2 tab_div_form_full" numb="2">
    <p>Lokalizacja</p>
    <label class="label_small_title" for="localization">Proszę podać przybliżoną lokalizację</label>
    <input method="POST" action="<?php bloginfo('stylesheet_directory'); ?>/formularz_cieplo/class/miasta.php" type="text" name="city" list="cityname"><a id="search_city" class="button">Szukaj</a>
       <div id='searched_cities'>

       </div>
</div>
<div class="tab_div_button"> 
    <a numb="2" action="<?php echo bloginfo('stylesheet_directory'); ?>/formularz_cieplo/panels/panel-sizes.php" method="GET" class="button next_form">Dalej</a>
</div>