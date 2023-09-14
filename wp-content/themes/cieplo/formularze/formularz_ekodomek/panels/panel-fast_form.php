<!----- Ogólne  -->
<div class="row" building="not_apartment_hiden">
    <div class="div_form_title_section col-md-6">
        <p class="title_section_div_form"> Szybki formularz</p>
    </div>
</div>
<div id="div_form_fast_localization" class="div_form_fast tab_div_form_full">
    <p>Lokalizacja</p>
    <label class="label_small_title" for="localization">Proszę podać przybliżoną lokalizację</label>
    <input method="POST" action="<?php bloginfo('stylesheet_directory'); ?>/formularz_cieplo/class/miasta.php" type="text" name="city" list="cityname"><a id="search_city" class="button">Szukaj</a>
       <div id='searched_cities'>

       </div>
</div>
<div class="row" building="not_apartment">
    <div id="div_form_fast_heating_area" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            powierzchnia ogrzewana budynku 
        </label>
        <div class="col-sm-8">
            <select id="heating_area" name="heating_area" class="form-control">
                <option value="100-120">100 - 120</option>
                <option value="130-150">130 - 150</option>
                <option value="160-180">160 - 180</option>
                <option value="190-210">190 - 210</option>
                <option value="220-250">220 - 250</option>                
                <option value="260-300">260 - 300</option>                
                <option value="more">Więcej</option>                
            </select>
        </div>
    </div>     
</div>
<div class="row" building="not_apartment">
    <div id="div_form_fast_type_wall" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            budowa ściany
        </label>
        <div class="col-sm-8">
            <select id="type_wall" name="type_wall" class="form-control">
                <option value="solid_brick">cegła pełna</option>
                <option value="sieve_brick">cegła sitówka</option>
                <option value="aerated_concrete">gazobeton</option>
                <option value="other">inne</option>               
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment">
    <div id="div_form_fast_fat_wall" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Grubość ściany z izolacją
        </label>
        <div class="col-sm-8">
            <select id="fat_wall" name="fat_wall" class="form-control">
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
                <option value="45">45</option>
                <option value="50">50</option>
                <option value="more">Więcej</option>               
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment">
    <div id="div_form_fast_fat_isolation" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Grubość izolacji
        </label>
        <div class="col-sm-8">
            <select id="fat_isolation" name="fat_isolation" class="form-control">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
                <option value="25">25</option>             
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment">
    <div id="div_form_fast_type_windows" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Okna
        </label>
        <div class="col-sm-8">
            <select id="type_windows" name="type_windows" class="form-control">
                <option value="double_glass">dwuszybowe</option>
                <option value="triple_glass">trzyszybowe</option>           
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment">
    <div id="div_form_fast_main_heating_device" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Grubość ściany z izolacją
        </label>
        <div class="col-sm-8">
            <select id="main_heating_device" name="main_heating_device" class="form-control">
                <option value="solid_fuel_boiler">kocioł stałopalny</option>
                <option value="eco-pea_coal_boiler">kocioł ekogroszek</option>
                <option value="pellet_boiler">kocioł na pellet</option>
                <option value="gas_boiler">kocioł gazowy</option>
                <option value="wood_boiler">kocioł na drewno</option>                
                <option value="electric_boiler">kocioł elektryczny</option>          
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment">
    <div id="div_form_fast_power_boiler" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Moc kotła
        </label>
        <div class="col-sm-8">
            <select id="power_boiler" name="power_boiler" class="form-control">
                <option value="10">do 10 kW</option>
                <option value="12-14">12 - 14 kW</option>
                <option value="15-18">15 - 18 kW</option>
                <option value="20-22">20 - 22 kW</option>
                <option value="24-28">24 - 28 kW</option>
                <option value="30-35">30 - 35 kW</option> 
                <option value="more">Więcej</option>          
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment_hiden" >
    <div class="div_form_fast_power_boiler_more col-md-6">
        <label for="" class="label_small_title col-sm-4">
            wpisz ile  
        </label>
        <div class="col-sm-8">
            <input type="text" id="power_boiler_more" name="power_boiler_more">
            <span>kW</span>
        </div>        
    </div>
</div>
<div class="row" boiler="other">
    <div id="div_form_fast_fuel_consumption_other" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Zuzycie opału
        </label>
        <div class="col-sm-8">
            <select id="fuel_consumption_other" name="fuel_consumption_other" class="form-control">
                <option value="2">do 2 ton</option>
                <option value="2.5_3.0">2,5 - 3,0 tony</option>
                <option value="3.5-4.0">3,5 - 4,0 tony</option>
                <option value="4.5-5.0">4,5 - 5,0 ton</option>
                <option value="5.5-6.0">5,5 - 6,0 ton</option>
                <option value="more">Więcej</option>          
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment_hiden" >
    <div class="div_form_fast_fuel_consumption_other_more col-md-6">
        <label for="" class="label_small_title col-sm-4">
            wpisz ile  
        </label>
        <div class="col-sm-8">
            <input type="text" id="fuel_consumption_other_more" name="fuel_consumption_other_more">
            <span>ton</span>
        </div>        
    </div>
</div>
<div class="row" boiler="gas" style="display:none">
    <div id="div_form_fast_fuel_consumption_gas" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Zuzycie opału
        </label>
        <div class="col-sm-8">
            <select id="fuel_consumption_gas" name="fuel_consumption_gas" class="form-control">
                <option value="2">do 2,0 m3</option>
                <option value="2.5_3.0">2,5 - 3,0 m3</option>
                <option value="3.5-4.0">3,5 - 4,0 m3</option>
                <option value="4.5-5.0">4,5 - 5,0 m3</option>
                <option value="5.5-6.0">5,5 - 6,0 m3</option>
                <option value="more">Więcej</option>          
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment_hiden" >
    <div class="div_form_fast_fuel_consumption_gas_more col-md-6">
        <label for="" class="label_small_title col-sm-4">
            wpisz ile  
        </label>
        <div class="col-sm-8">
            <input type="text" id="fuel_consumption_gas_more" name="fuel_consumption_gas_more">
            <span>m3</span>
        </div>        
    </div>
</div>
<div class="row" boiler="wood" style="display:none">
    <div id="div_form_fast_fuel_consumption_wood" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Zuzycie opału
        </label>
        <div class="col-sm-8">
            <select id="fuel_consumption_wood" name="fuel_consumption_wood" class="form-control">
                <option value="2.5_3.0">2,5 - 3,0 m3</option>
                <option value="3.5-4.0">3,5 - 4,0 m3</option>
                <option value="4.5-5.0">4,5 - 5,0 m3</option>
                <option value="5.5-6.0">5,5 - 6,0 m3</option>
                <option value="more">Więcej</option>          
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment_hiden" >
    <div class="div_form_fast_fuel_consumption_wood_more col-md-6">
        <label for="" class="label_small_title col-sm-4">
            wpisz ile  
        </label>
        <div class="col-sm-8">
            <input type="text" id="fuel_consumption_wood_more" name="fuel_consumption_wood_more">
            <span>m3</span>
        </div>        
    </div>
</div>
<div class="row" boiler="electric" style="display:none">
    <div id="div_form_fast_fuel_consumption_electric" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Zuzycie opału
        </label>
        <div class="col-sm-8">
            <select id="fuel_consumption_electric" name="fuel_consumption_electric" class="form-control">
                <option value="2">2000 kWh</option>
                <option value="2.5-3.0">2500 - 3000 kWh</option>
                <option value="3.5-4.0">3500 - 4000 kWh</option>
                <option value="4.5-5.0">4500 - 5000 kWh</option>
                <option value="5.5-6.0">5500 - 6000 kWh</option>
                <option value="more">Więcej</option>          
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment_hiden" >
    <div class="div_form_fast_fuel_consumption_electric_more col-md-6">
        <label for="" class="label_small_title col-sm-4">
            wpisz ile  
        </label>
        <div class="col-sm-8">
            <input type="text" id="fuel_consumption_electric_more" name="fuel_consumption_electric_more">
            <span>kWh</span>
        </div>        
    </div>
</div>
<div class="row" >
    <div id="div_form_fast_heating_type" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Rodzaj instalacji grzewczej
        </label>
        <div class="col-sm-8">
            <select id="heating_type" name="heating_type" class="form-control">
                <option value="floor">ogrzrewanie podłogowe</option>
                <option value="radiator">ogrzewanie grzejnikowe</option>
                <option value="mix">ogrzew. mieszane grzejn. / podłog.</option>
            </select>
        </div>
    </div>
</div>
<div class="row" >
    <div id="div_form_fast_temperature_heating" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Temperatura zasilanie instalacji grzewczej
        </label>
        <div class="col-sm-8">
            <select id="temperature_heating" name="temperature_heating" class="form-control">
                <option value="40">do 40 stC</option>
                <option value="45">do 45 stC</option>
                <option value="50">do 50 stC</option>
                <option value="55">do 55 stC</option>
                <option value="60">do 60 stC</option>
                <option value="65">powyżej 60 stC</option>                
            </select>
        </div>
    </div>
</div>
<div class="row" >
    <div id="div_form_fast_water_use_person" class="div_form_fast col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Zapotrzebowanie na ciepłą wodę użytkową c.w.u. (ilość osób)
        </label>
        <div class="col-sm-8">
            <select id="water_use_person" name="water_use_person" class="form-control">
                <option value="2">2 os.</option>
                <option value="3-4">3 - 4 os.</option>
                <option value="5-6">5 - 6 os.</option>
                <option value="7">powyżej 6 os.</option>              
            </select>
        </div>
    </div>
</div>
<div class="tab_div_button"> 
    <a numb="3" class="button next_form">Dalej</a>
</div>