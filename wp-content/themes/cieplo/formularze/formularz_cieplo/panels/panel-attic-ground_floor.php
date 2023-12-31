<!--------------------------------------------------------- Poddasze i parter -->
<div class="row" building="not_apartment_hiden" whats='no_apartment'>
    <div class="div_form_title_section col-md-6">
        <p class="title_section_div_form"> Poddasze i parter </p>
    </div>
</div>
<!-- Nieogrzewane poddasze -->
<div class="row" building="not_apartment" heatedfloor="steep"   style="display: none;" >
    <div class="div_form_title_subsection col-md-6">
        <p class="subsection_div_form"> Nieogrzewane poddasze </p>
    </div>
</div>
<div class="row" building="not_apartment" heatedfloor="steep"  style="display: none;" >
    <div id="div_form_5_top_isolation_material_steep" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Jak wygląda sytuacja na nieogrzewanym poddaszu? 
        </label>
        <div class="col-sm-8">        
            <select id="unheated_space_over_type" name="unheated_space_over_type" class=" form-control">
                <option value="worst" selected="selected">Hula tam wiatr</option>
                <option value="poor">Wiatr nie hula ale ocieplenia dachu brak</option>
                <option value="medium">Ocieplenie dachu jest, ale stare/kiepskie/mało</option>
                <option value="great">Dach jest świetnie ocieplony, w planach jest tam pomieszczenie mieszkalne</option>    
            </select>
        </div>
    </div>
</div>
<!-- Izolacja dachu -->
<div class="row" building="not_apartment_hiden" whats='no_apartment'>
    <div class="div_form_title_subsection col-md-6">
        <p class="subsection_div_form"> Izolacja dachu </p>
    </div>
</div>
<div class="row" building="not_apartment" whats='no_apartment'>
    <div id="div_form_5_top_isolation_house" class="div_form_5 col-md-6" numb="5">
        <label class="label_small_title col-sm-4" for="">Czy jest jakakolwiek izolacja dachu?: </label>
        <div class="div_checkbox col-sm-8">
            <div class="radio">
                <label class=" ">
                    <input type="radio" id="top_isolation_true" name="top_isolation" required="required" class="" value="true">
                    <span class="circle"></span>
                    <span class="check"></span>
                    Tak - jest jakaś izolacja
                </label>
            </div>
            <div class="radio">
                <label class=" ">
                    <input type="radio" id="top_isolation_false" name="top_isolation" required="required" class="" value="false" checked>
                    <span class="circle"></span>
                    <span class="check"></span>
                    Nie, nie ma zadnej izloacji
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row"  isolation="roof" style="display: none;">
    <div id="div_form_5_top_isolation_material" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Materiał
        </label>
        <div class="col-sm-8">
            <select id="top_isolation_material" name="top_isolation_material" class=" form-control">
                <option value=""></option>
                <option value="98">Celuloza</option>
                <option value="87">Ekofiber</option>
                <option value="64">Korek</option>
                <option value="81">Padzierz lniany</option>
                <option value="95">PIR</option>
                <option value="86">PUR</option>
                <option value="82">Pustka powietrzna</option>
                <option value="65">Słoma</option>
                <option value="70">Styropian</option>
                <option value="88">Styropian grafitowy</option>
                <option value="71">Styropian twardy (XPS)</option>
                <option value="66">Trzcina</option>
                <option value="94">Wełna drzewna</option>
                <option value="68">Wełna mineralna</option>
                <option value="69">Wełna mineralna granulowana</option>
                <option value="83">Wiórobeton</option>
            </select>
        </div>
    </div>
</div>
<div class="row" isolation="roof" style="display: none;">
    <div id="div_form_5_top_isolation_size" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Grubość
        </label>
        <div class="col-sm-8">
            <input type="text" id="top_isolation_size" name="top_isolation_size">
            <span>cm</span>
        </div>        
    </div>
</div>
<!-- Izolacja podłagi parteru -->
<div class="row" building="not_apartment" whats='no_apartment'>
    <div class="div_form_title_subsection col-md-6">
        <p class="subsection_div_form"> Izolacja podłogi parteru </p>
    </div>
</div>
<div class="row" building="not_apartment" whats='no_apartment'>
    <div id="div_form_5_bottom_isolation_house" class="div_form_5 col-md-6" numb="5">
        <label class="label_small_title col-sm-4" for="">Czy jest jakakolwiek izolacja podłogi paretru?: </label>
        <div class="div_checkbox col-sm-8">
            <div class="radio">
                <label class=" ">
                    <input type="radio" id="bottom_isolation_true" name="bottom_isolation" required="required" class="" value="true">
                    <span class="circle"></span>
                    <span class="check"></span>
                    Tak - jest jakaś izolacja
                </label>
            </div>
            <div class="radio">
                <label class=" ">
                    <input type="radio" id="bottom_isolation_false" name="bottom_isolation" required="required" class="" value="false" checked>
                    <span class="circle"></span>
                    <span class="check"></span>
                    Nie, nie ma zadnej izloacji
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row" isolation="ground" style="display: none;">
    <div id="div_form_5_bottom_isolation_material" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Materiał
        </label>
        <div class="col-sm-8">
            <select id="bottom_isolation_material" name="bottom_isolation_material" class=" form-control">
                <option value=""></option>
                <option value="98">Celuloza</option>
                <option value="87">Ekofiber</option>
                <option value="64">Korek</option>
                <option value="81">Padzierz lniany</option>
                <option value="95">PIR</option>
                <option value="86">PUR</option>
                <option value="82">Pustka powietrzna</option>
                <option value="65">Słoma</option>
                <option value="70">Styropian</option>
                <option value="88">Styropian grafitowy</option>
                <option value="71">Styropian twardy (XPS)</option>
                <option value="66">Trzcina</option>
                <option value="94">Wełna drzewna</option>
                <option value="68">Wełna mineralna</option>
                <option value="69">Wełna mineralna granulowana</option>
                <option value="83">Wiórobeton</option>
            </select>
        </div>
    </div>
</div>
<div class="row" isolation="ground" style="display: none;">
    <div id="div_form_5_bottom_isolation_size" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Grubość
        </label>
        <div class="col-sm-8">
            <input type="text" id="bottom_isolation_size" name="bottom_isolation_size">
            <span>cm</span>
        </div>        
    </div>
</div>

<!--------------------------------------------------------- Sąsiedztwo (gdy building apartment)-->
<div class="row" building="apartment" whats='apartment'>
    <div class="div_form_title_section col-md-6">
        <p class="title_section_div_form"> Sąsiedztwo </p>
    </div>
</div>
<!-- Co powyżej, co poniżej -->
<div class="row" building="apartment" whats='apartment'>
    <div class="div_form_title_subsection col-md-6">
        <p class="subsection_div_form"> Co powyżej, co poniżej </p>
    </div>
</div>
<!----- Nad mieszkaniem -->
<div class="row" building="apartment" whats='apartment'>
    <div id="div_form_5_top_isolation" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Co znajduje się nad twoim mieszkaniem? 
        </label>
        <div class="col-sm-8">        
            <select id="whats_over" name="whats_over" class=" form-control">
                <option value="heated_room">Ogrzewany lokal</option>
                <option value="unheated_room">Nieogrzewany lokal</option>
                <option value="outdoor">Świat zewnętrzny</option>
            </select>
        </div>
    </div>
</div>
<div class="row" building="apartment" unheated="top" style="display: none;" >
    <div id="div_form_5_unheated_space_over_type_apartment" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Jak wygląda sytuacja w pomieszczeniu powyżej mieszkania?
        </label>
        <div class="col-sm-8">        
            <select id="unheated_space_over_type_apartment" name="unheated_space_over_type_apartment" class=" form-control">
                <option value="worst" selected="selected">Hula tam wiatr</option>
                <option value="medium">Pomieszczenie jest dość&nbsp;szczelne, ale ocieplone słabiej niż mieszkanie</option>
                <option value="great">To pomieszczenie mieszkalne ocieplone nie gorzej jak nasze, tylko chwilowo nikt tam nie mieszka</option>
            </select>
        </div>
    </div>
</div>
<div class="row" building="apartment" whats="over"  style="display: none;">
    <div id="div_form_5_has_top_isolation_apartment" class="div_form_5 col-md-6">
        <label for="has_top_isolation_apartment" class="label_small_title col-sm-4">
            Strop jest docieplony ?
        </label>
        <div class="col-sm-8">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="has_top_isolation_apartment" name="has_top_isolation_apartment" value="1">
                    <span class="checkbox-material">
                        <span class="check">

                        </span>
                    </span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row" building="apartment" isolation="top" style="display: none;">
    <div id="div_form_5_top_isolation_material_apartment" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Materiał 
        </label>
        <div class="col-sm-8">
            <select id="top_isolation_material_apartment" name="top_isolation_material_apartment" class=" form-control">
                <option value=""></option>
                <option value="98">Celuloza</option>
                <option value="87">Ekofiber</option>
                <option value="64">Korek</option>
                <option value="81">Padzierz lniany</option>
                <option value="95">PIR</option>
                <option value="86">PUR</option>
                <option value="82">Pustka powietrzna</option>
                <option value="65">Słoma</option>
                <option value="70">Styropian</option>
                <option value="88">Styropian grafitowy</option>
                <option value="71">Styropian twardy (XPS)</option>
                <option value="66">Trzcina</option>
                <option value="94">Wełna drzewna</option>
                <option value="68">Wełna mineralna</option>
                <option value="69">Wełna mineralna granulowana</option>
                <option value="83">Wiórobeton</option>
            </select>
        </div>
    </div>
</div>
<div class="row" building="apartment" isolation="top" style="display: none;">
    <div id="div_form_5_top_isolation_size_apartment" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Grubość
        </label>
        <div class="col-sm-8">
            <input type="text" id="top_isolation_size_apartment" name="top_isolation_size_apartment">
            <span>cm</span>
        </div>        
    </div>
</div>
<!----- Pod mieszkaniem -->
<div class="row" building="apartment" whats='apartment'>
    <div id="div_form_5_bottom_isolation" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Co znajduje się pod twoim mieszkaniem?
        </label>
        <div class="col-sm-8">        
            <select id="whats_under" name="whats_under" class=" form-control">
                <option value="heated_room">Ogrzewany lokal</option>
                <option value="unheated_room">Nieogrzewany lokal</option>
                <option value="outdoor">Świat zewnętrzny</option>
                <option value="ground">Grunt</option>
            </select>
        </div>
    </div>
</div>
<div class="row" unheated="bottom" style="display: none;">
    <div id="div_form_5_unheated_space_under_type_apartment" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Jak wygląda sytuacja w pomieszczeniu poniżej mieszkania?
        </label>
        <div class="col-sm-8">        
            <select id="unheated_space_under_type_apartment" name="unheated_space_under_type_apartment" class=" form-control">
                <option value="worst" selected="selected">Hula tam wiatr</option>
                <option value="medium">Pomieszczenie jest dość&nbsp;szczelne, ale ocieplone słabiej niż mieszkanie</option>
                <option value="great">To pomieszczenie mieszkalne ocieplone nie gorzej jak nasze, tylko chwilowo nikt tam nie mieszka</option>
            </select>
        </div>
    </div>
</div>
<div class="row" whats="under"  style="display: none;">
    <div id="div_form_5_has_bottom_isolation_apartment" class="div_form_5 col-md-6">
        <label for="has_bottom_isolation_apartment" class="label_small_title col-sm-4">
            Podłoga mieszkania jest docieplona ?
        </label>
        <div class="col-sm-8">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="has_bottom_isolation_apartment" name="has_bottom_isolation_apartment" value="1">
                    <span class="checkbox-material">
                        <span class="check">

                        </span>
                    </span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row" isolation="bottom" style="display: none;">
    <div id="div_form_5_bottom_isolation_material_apartment" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Materiał
        </label>
        <div class="col-sm-8">
            <select id="bottom_isolation_material_apartment" name="bottom_isolation_material_apartment" class=" form-control">
                <option value=""></option>
                <option value="98">Celuloza</option>
                <option value="87">Ekofiber</option>
                <option value="64">Korek</option>
                <option value="81">Padzierz lniany</option>
                <option value="95">PIR</option>
                <option value="86">PUR</option>
                <option value="82">Pustka powietrzna</option>
                <option value="65">Słoma</option>
                <option value="70">Styropian</option>
                <option value="88">Styropian grafitowy</option>
                <option value="71">Styropian twardy (XPS)</option>
                <option value="66">Trzcina</option>
                <option value="94">Wełna drzewna</option>
                <option value="68">Wełna mineralna</option>
                <option value="69">Wełna mineralna granulowana</option>
                <option value="83">Wiórobeton</option>
            </select>
        </div>
    </div>
</div>
<div class="row" isolation="bottom" style="display: none;">
    <div id="div_form_5_bottom_isolation_size_apartment" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Grubość
        </label>
        <div class="col-sm-8">
            <input type="text" id="bottom_isolation_size_apartment" name="bottom_isolation_size_apartment">
            <span>cm</span>
        </div>        
    </div>
</div>
<!-- Za ścianą -->
<div class="row" building="apartment" whats='apartment'>
    <div class="div_form_title_subsection col-md-6">
        <p class="subsection_div_form"> Za ścianą </p>
    </div>
</div>
<div class="row" building="apartment" whats='apartment'>
    <div id="div_form_5_whats_north" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Ściana #1 
        </label>
        <div class="col-sm-8">        
            <select id="whats_north" name="whats_north" class=" form-control">
                <option value="heated_room">Ogrzewany lokal</option>
                <option value="unheated_room">Nieogrzewany lokal</option>
                <option value="outdoor">Świat zewnętrzny</option>
            </select>
        </div>
    </div>
</div>
<div class="row" building="apartment" whats='apartment'>
    <div id="div_form_5_whats_south" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Ściana #2
        </label>
        <div class="col-sm-8">        
            <select id="whats_south" name="whats_south" class=" form-control">
                <option value="heated_room">Ogrzewany lokal</option>
                <option value="unheated_room">Nieogrzewany lokal</option>
                <option value="outdoor">Świat zewnętrzny</option>
            </select>
        </div>
    </div>
</div>
<div class="row" building="apartment" whats='apartment'>
    <div id="div_form_5_whats_east" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Ściana #3
        </label>
        <div class="col-sm-8">        
            <select id="whats_east" name="whats_east" class=" form-control">
                <option value="heated_room">Ogrzewany lokal</option>
                <option value="unheated_room">Nieogrzewany lokal</option>
                <option value="outdoor">Świat zewnętrzny</option>
            </select>
        </div>
    </div>
</div>
<div class="row" building="apartment" whats='apartment'>
    <div id="div_form_5_whats_west" class="div_form_5 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Ściana #4
        </label>
        <div class="col-sm-8">        
            <select id="whats_west" name="whats_west" class=" form-control">
                <option value="heated_room">Ogrzewany lokal</option>
                <option value="unheated_room">Nieogrzewany lokal</option>
                <option value="outdoor">Świat zewnętrzny</option>
            </select>
        </div>
    </div>
</div>

<div class="tab_div_button"> 
    <a numb="5" class="button next_form">Dalej</a>
</div>