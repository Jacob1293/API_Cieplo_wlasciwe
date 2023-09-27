<!-- Ogrzewanie budynku -->
<div class="row" building="not_apartment_hiden">
    <div class="div_form_title_section col-md-6">
        <p class="title_section_div_form"> Ogrzewanie budynku </p>
    </div>
</div>
<!-- Główne źrodło ciepła -->
<div class="row">
    <div id="div_form_6_main_heating_device" class="div_form_6 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Główne źródło ciepła 
        </label>
        <div class="col-sm-8">
            <select id="main_heating_device" name="main_heating_device" class=" form-control">
                <option value="" selected="selected">– proszę wybrać –</option>
                <option value="heat_pump_air_water">Pompa ciepła powietrze-woda</option>
                <option value="heat_pump_air_air">Pompa ciepła powietrze-powietrze (klimatyzacja)</option>
                <option value="heat_pump_ground">Pompa ciepła gruntowa</option>
                <option value="wood_boiler_buffer">Kocioł&nbsp;na drewno z buforem ciepła</option>
                <option value="wood_boiler">Kocioł&nbsp;na drewno</option>
                <option value="wood_pellet_boiler">Kocioł na pellet drzewny</option>
                <option value="wood_chips_boiler">Kocioł na zrębkę drzewną</option>
                <option value="gas_boiler_condensing">Kocioł&nbsp;gazowy kondensacyjny</option>
                <option value="gas_boiler">Kocioł&nbsp;gazowy niekondensacyjny</option>
                <option value="coal_boiler_buffer">Kocioł&nbsp;węglowy bez podajnika z buforem ciepła</option>
                <option value="coal_boiler">Kocioł&nbsp;węglowy bez podajnika</option>
                <option value="coal_boiler_automatic">Kocioł&nbsp;węglowy z podajnikiem</option>
                <option value="electric_non_accumulative">Prąd: promienniki podczerwieni / maty grzewcze</option>
                <option value="electric_accumulative">Prąd: piec akumulacyjny / bufor wodny z grzałkami</option>
                <option value="oil_boiler">Kocioł&nbsp;olejowy</option>
                <option value="stove">Piec (kaflowy, kuchenny, koza itp.)</option>
                <option value="fireplace">Kominek</option>
                <option value="district_heating">Sieć ciepłownicza</option>
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment_hiden">
    <div id="div_form_6_indoor_temperature" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Temperatura w pomieszczeniach ogrzewanych
        </label>
        <div class="col-sm-8">
            <input type="text" id="indoor_temperature" name="indoor_temperature">
            <span>°C</span>
        </div>        
    </div>
</div>
<div class="row">
    <div id="div_form_6_ventilation_type" class="div_form_6 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Rodzaj wentylacji 
        </label>
        <div class="col-sm-8">                    
            <select id="ventilation_type" name="ventilation_type" class=" form-control">
                <option value="natural" selected="selected">Naturalna lub grawitacyjna</option>
                <option value="mechanical">Mechaniczna</option>
                <option value="mechanical_recovery">Mechaniczna z odzyskiem ciepła</option>
            </select>
        </div>
    </div>
</div>
<!-- instalacja grzewcza -->
<div class="row" mainheating="device" style="display: none;">
    <div class="div_form_title_subsection col-md-6">
        <p class="subsection_div_form"> Instalacja grzewcza</p>        
    </div>
</div>
<div class="row" mainheating="device" style="display: none;">
    <div id="div_form_6_heating_system_type" class="div_form_6 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Rodzaj instalacji centralnego ogrzewania 
        </label>
        <div class="col-sm-8">
            <select id="heating_system_type" name="heating_system_type" class=" form-control">
                <option value="" selected="selected">– proszę wybrać –</option>
                <option value="heaters_only">100% grzejniki</option>
                <option value="heaters_mostly">Przewaga grzejników + nieco podłogowego/ściennego</option>
                <option value="forty_forty">Mniej więcej po równo grzejników i podłogowego/ściennego</option>
                <option value="floor_mostly">Przewaga podłogowego/ściennego + nieco grzejników</option>
                <option value="floor">100% podłogowe/ścienne</option>
                <option value="other">Ogrzewanie nadmuchowe</option>
                <option value="none">Brak centralnego ogrzewania</option>
            </select>
        </div>
    </div>
</div>
<div class="row" mainheating="system" style="display: none;">
    <div id="div_form_6_heating_system_temperature" class="div_form_6 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Maksymalna temperatura zasilania instalacji 
        </label>
        <div class="col-sm-8">
            <select id="heating_system_temperature" name="heating_system_temperature" class=" form-control">
                <option value="" selected="selected">– proszę wybrać –</option>
                <option value="0">Nie wiem</option>
                <option value="35">Do 35 st.C</option>
                <option value="45">Do 45 st.C</option>
                <option value="55">Do 55 st.C</option>
                <option value="99">Ponad 60 st.C</option>
            </select>            
        </div>
    </div>
</div>
<!-- Ciepła woda kranowa -->
<div class="row" building="not_apartment_hiden">
    <div class="div_form_title_subsection col-md-6">
        <p class="subsection_div_form"> Ciepła woda kranowa</p>        
    </div>
</div>
<div class="row">
    <div id="div_form_6_has_include_hot_water" class="div_form_6 col-md-6">
        <label for="has_include_hot_water" class="label_small_title col-sm-4">
            Oblicz zapotrzebowanie energii na podgrzewanie CWU
        </label>
        <div class="col-sm-8">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="has_include_hot_water" name="has_include_hot_water" value="true" data-gtm-form-interact-field-id="2">
                    <span class="checkbox-material">
                        <span class="check">

                        </span>
                    </span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row" building="not_apartment_hiden">
    <div class="div_form_6_hot_water_persons col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Ile osób używa ciepłej wody?
        </label>
        <div class="col-sm-8">
            <input type="text" id="hot_water_persons" name="hot_water_persons">
        </div>        
    </div>
</div>
<div class="row" >
    <div id="div_form_6_hot_water_use" class="div_form_6 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Jak intensywnie używana jest ciepła woda? 
        </label>
        <div class="col-sm-8">
            <select id="hot_water_use" name="hot_water_use" class=" form-control">
                <option value="">– proszę wybrać –</option>
                <option value="shower">Tylko prysznice</option>
                <option value="shower_bath">Głównie prysznice, czasem wanna</option>
                <option value="bath">Najczęściej wanna</option>
            </select>
        </div>
    </div>
</div>
<div class="tab_div_button"> 
    <a numb="6" class="button next_form">Dalej</a>
</div>