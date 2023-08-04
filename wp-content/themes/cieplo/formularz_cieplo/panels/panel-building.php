
<div id="div_form_1_building" class="div_form_1 col-md-6" numb="1">
    <div class="radio">
        <label class=" ">
            <input type="radio" id="building_type_single_house" name="building_type" required="required" class="" value="single_house">
            <span class="circle"></span>
            <span class="check"></span>
            Dom jednorodzinny wolnostojący
        </label>
    </div>
    <div class="radio">
        <label class=" ">
            <input type="radio" id="building_type_double_house" name="building_type" required="required" class="" value="double_house">
            <span class="circle"></span>
            <span class="check"></span>
            Zabudowa bliźniacza
        </label>
    </div>
    <div class="radio">
        <label class=" ">
            <input type="radio" id="building_type_row_house" name="building_type" required="required" class="" value="row_house">
            <span class="circle"></span>
            <span class="check"></span>
            Segment w zabudowie szeregowej
        </label>
    </div>
    <div class="radio">
        <label class=" ">
            <input type="radio" id="building_type_apartment" name="building_type" required="required" class="" value="apartment">
            <span class="circle"></span>
            <span class="check"></span>
            Mieszkanie
        </label>
    </div>
    <div class="radio">
        <label class=" ">
            <input type="radio" id="building_type_multifamily" name="building_type" required="required" class="" value="multifamily">
            <span class="circle"></span>
            <span class="check"></span>
            Budynek wielorodzinny
        </label>
    </div>    
</div>

<div class="col-md-6">
    Im dokładniejsze informacje masz na temat tego jak zbudowany jest dom, tym precyzyjniejszy wynik obliczeń otrzymasz.
    Będziesz potrzebować m.in takich informacji:
    zewnętrzna długość/szerokość budynku
    grubość ścian zewnętrznych i materiały użyte do ich budowy
    materiały użyte do izolacji dachu/podłogi na parterze czy w piwnicy
</div>

<div class="tab_div_button">
    <a numb="1" action="<?php bloginfo('stylesheet_directory'); ?>/formularz_cieplo/panels/panel-size.php" method="GET" class="button next_form">Dalej</a>
</div>



