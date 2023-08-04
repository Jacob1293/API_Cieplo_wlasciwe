<div class="row" building="not_apartment">
    <div id="div_form_3_building_shape" class="div_form_3 col-md-6" numb="3">
        <label class="label_small_title col-sm-4" for="">Obrys budynku jest: </label>
        <div class="div_checkbox col-sm-8">
            <div class="radio">
                <label class=" ">
                    <input type="radio" id="building_shape_regular" name="building_shape" required="required" class="" value="regular" checked>
                    <span class="circle"></span>
                    <span class="check"></span>
                    Regularny - prostokątny
                </label>
            </div>
            <div class="radio">
                <label class=" ">
                    <input type="radio" id="building_shape_irregular" name="building_shape" required="required" class="" value="irregular">
                    <span class="circle"></span>
                    <span class="check"></span>
                    Nieregularny (wszelkie inne kształty)
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row" building="not_apartment" optionshape="building_shape_regular">
    <div id="div_form_3_building_area_size_option" class="div_form_3 col-md-6" numb="3">
        <label class="label_small_title col-sm-4" for="">Wymiary obrysu budnyku: </label>
        <div class="div_checkbox col-sm-8">
            <div class="radio">
                <label class=" ">
                    <input type="radio" id="building_area_size_area" name="building_area_size_option" required="required" class="" value="size_area">
                    <span class="circle"></span>
                    <span class="check"></span>
                    Znam powierzchnię zabudowy
                </label>
            </div>
            <div class="radio">                
                <label class=" ">
                    <input type="radio" id="building_area_size_wall" name="building_area_size_option" required="required" class="" value="size_wall">
                    <span class="circle"></span>
                    <span class="check"></span>
                    Znam wymiary zewnętrzne budynku
                </label>
            </div>            
        </div>
    </div>
</div>
<div class="row" building="apartment">
    <div id="div_form_3_building_floors" class="div_form_3 col-md-6" numb="3">    
        <label class="label_small_title col-sm-4" for="building_floors">Mieszkanie jest</label>    
        <div class="col-sm-8">    
            <select id="building_floors" name="building_floors" class="form-control">
                <option value="1" selected="selected">Jednopoziomowe</option>
                <option value="2">Dwupoziomowe</option>
                <option value="3">Trzypoziomowe</option>
            </select>        
        </div>
    </div>
</div>
<div class="row" building="all" optionsize="building_area_size_area">
    <div class="div_form_3 col-md-6">
        <label for="" class="label_small_title col-sm-4" building="not_apartment">
            Powierzchnia zabudowy
        </label>
        <label for="" class="label_small_title col-sm-4" building="apartment">
            Powierzchnia jednego poziomu
        </label>
        <div class="col-sm-8">
            <input type="text" id="floor_area" name="floor_area">
            <span>mkw.</span>
        </div>        
    </div>
</div>
<div class="row" building="all" optionsize="building_area_size_wall" style="display: none;">
    <div class="div_form_3 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Długość obrysu budynku
        </label>
        <div class="col-sm-8">
            <input type="text" id="building_length" name="building_length">
            <span>m</span>
        </div>        
    </div>
</div>
<div class="row" building="all" optionsize="building_area_size_wall" style="display: none;">
    <div class="div_form_3 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Szerokość obrysu budynku
        </label>
        <div class="col-sm-8">
            <input type="text" id="building_width" name="building_width">
            <span>m</span>
        </div>        
    </div>
</div>
<div class="row" building="apartment">
    <div id="div_form_3_building_heated_floors" class="div_form_3 col-md-6" numb="3">
        <label class="label_small_title col-sm-4" for="">Które poziomy mieszkania są ogrzewane? </label>
        <div class="div_checkbox col-sm-8">
            <label class="label_checkbox" id="building_floors_selected" value="1">
                <input type="checkbox" id="building_heated_floors_0" name="building_heated_floors[]" class="" value="0">
                <span class="checkbox-material">
                    <span class="check">                    
                    </span>
                </span>
                I poziom
            </label>
            <label style="display:none" id="building_floors_selected" class="label_checkbox" value="2">
                <input type="checkbox" id="building_heated_floors_1" name="building_heated_floors[]" class="" value="1">
                <span class="checkbox-material">
                    <span class="check">                    
                    </span>
                </span>
                II poziom
            </label>
            <label style="display:none" id="building_floors_selected" class="label_checkbox" value="3">
                <input type="checkbox" id="building_heated_floors_2" name="building_heated_floors[]" class="" value="2">
                <span class="checkbox-material">
                    <span class="check">                    
                    </span>
                </span>
                III poziom
            </label>
        </div>
    </div>
</div>
<div class="row">
    <div class="div_form_3 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Długość obrysu budynku
        </label>
        <div class="col-sm-8">
            <select id="building_floors" name="building_floors">
                <option value="1" selected="selected">Parterowy</option>
                <option value="2">Jednopiętrowy</option>
                <option value="3">Dwupiętrowy</option>
                <option value="4">Trzypiętrowy</option>
                <option value="5">Czteropiętrowy</option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="div_form_3 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Dach jest
        </label>    
        <div class="col-sm-8">
            <select id="building_roof" name="building_roof">
                <option value="flat">Płaski</option>
                <option value="oblique">Skośny bez poddasza</option>
                <option value="steep" selected="selected">Skośny z poddaszem</option>
            </select>
            <p class="help-block"><b>Dach skośny bez poddasza</b> dotyczy sytuacji gdy bezpośrednio pod ten dach nie da się wejść&nbsp;wcale lub tylko na czworaka (np. gdy na pierwotnie płaskim dachu dobudowano dach skośny najprościej jak się&nbsp;dało).<br><b>Dach skośny z poddaszem</b> to każda inna sytuacja gdy bezpośrednio pod dachem istnieje prawie pełnowymiarowa kondygnacja (zamieszkała lub nie).</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="div_form_3 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Dom jest podpiwniczony
        </label>
        <div class="col-sm-8">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="has_basement" name="has_basement">
                    <span class="checkbox-material">
                        <span class="check">
                        </span>
                    </span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div id="div_form_3_floor_height" class="div_form_3 col-md-6" numb="3" building="all">    
        <label class="label_small_title col-sm-4" for="floor_height">Mieszkanie jest</label>    
        <div class="col-sm-8">    
            <select id="floor_height" name="floor_height" class="form-control">
                <option value="2.3">Niskie (poniżej 2,5m)</option>
                <option value="2.6" selected="selected">Standardowe (ok. 2,6m)</option>
                <option value="3.1">Wysokie (3m i więcej)</option>
                <option value="4.1">Bardzo wysokie (4m i więcej)</option>
            </select>        
        </div>
    </div>
</div>
<div class="tab_div_button"> 
    <a numb="3" class="button next_form">Dalej</a>
</div>

