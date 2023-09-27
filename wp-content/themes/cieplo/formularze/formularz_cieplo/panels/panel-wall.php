<!----- Ściany zewnetrzne  -->
<div class="row" building="not_apartment_hiden">
    <div class="div_form_title_section col-md-6">
        <p class="title_section_div_form"> Ściany zewnętrzne</p>
    </div>
</div>
<div class="row">
    <div id="div_form_4_construction_type" class="div_form_4 col-md-6" numb="4">
        <label class="label_small_title col-sm-4" for="">Rodzaj konstrukcji budynku: </label>
        <div class="div_checkbox col-sm-8">
            <div class="radio">
                <label class=" ">
                    <input type="radio" id="building_construction_type" name="construction_type" required="required" class="" value="traditional" checked>
                    <span class="circle"></span>
                    <span class="check"></span>
                    Tradycyjna - murowana lub drewniana
                </label>
            </div>
            <div class="radio">
                <label class=" ">
                    <input type="radio" id="building_construction_type" name="construction_type" required="required" class="" value="canadian">
                    <span class="circle"></span>
                    <span class="check"></span>
                    Szkieletowa - dom kanadyjski
                </label>
            </div>
        </div>
    </div>
</div>
<!-- Materiał w ramach construction type = traditional -->
<div class="row" building="not_apartment_hiden">
    <div id="div_form_4_wall_size" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Całkowita grubość ścian zewnętrznych
        </label>
        <div class="col-sm-8">
            <input type="text" id="wall_size" name="wall_size">
            <span>cm</span>
        </div>        
    </div>
</div>
<div class="row" construction="traditional">
    <div class="div_form_itle_subsection col-md-6">
        <p class="subsection_div_form"> Materiały</p>
    </div>
</div>
<div class="row" construction="traditional">
    <div id="div_form_4_primary_wall_material" class="div_form_3 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Podstawowy materiał 
        </label>
        <div class="col-sm-8">
            <select id="building_primary_wall_material" name="primary_wall_material" class=" form-control">
                <option value=""></option>
                <option value="51">Beton</option>
                <option value="54">Beton komórkowy</option>
                <option value="96">Bloczek silikatowy</option>
                <option value="58">Cegła dziurawka</option>
                <option value="62">Cegła klinkierowa</option>
                <option value="59">Cegła kratówka</option>
                <option value="57">Cegła pełna</option>
                <option value="61">Cegła silikatowa dziurawka</option>
                <option value="60">Cegła silikatowa pełna</option>
                <option value="98">Celuloza</option>
                <option value="56">Drewno iglaste</option>
                <option value="55">Drewno liściaste</option>
                <option value="93">Glina</option>
                <option value="77">Granit</option>
                <option value="76">Kamień polny</option>
                <option value="97">Keramzytobeton</option>
                <option value="78">Marmur</option>
                <option value="79">Piaskowiec</option>
                <option value="95">PIR</option>
                <option value="84">Porotherm</option>
                <option value="86">PUR</option>
                <option value="85">Pustak keramzytowy</option>
                <option value="53">Pustak żużlobetonowy</option>
                <option value="63">Pustaki ceramiczne</option>
                <option value="70">Styropian</option>
                <option value="88">Styropian grafitowy</option>
                <option value="71">Styropian twardy (XPS)</option>
                <option value="90">Termalica 300/400</option>
                <option value="91">Termalica 600/650</option>
                <option value="92">Thermomur</option>
                <option value="80">Wapień</option>
                <option value="94">Wełna drzewna</option>
                <option value="68">Wełna mineralna</option>
                <option value="83">Wiórobeton</option>
                <option value="89">Ytong</option>
                <option value="52">Żelbet</option>
            </select>
        </div>
    </div>
</div>
<div class="row" construction="traditional">
    <div id="div_form_4_secondary_wall_material" class="div_form_3 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Dodatkowy materiał 
        </label>
        <div class="col-sm-8">
            <select id="building_secondary_wall_material" name="secondary_wall_material" class=" form-control">
                <option value=""></option>
                <option value="51">Beton</option>
                <option value="54">Beton komórkowy</option>
                <option value="96">Bloczek silikatowy</option>
                <option value="58">Cegła dziurawka</option>
                <option value="62">Cegła klinkierowa</option>
                <option value="59">Cegła kratówka</option>
                <option value="57">Cegła pełna</option>
                <option value="61">Cegła silikatowa dziurawka</option>
                <option value="60">Cegła silikatowa pełna</option>
                <option value="98">Celuloza</option>
                <option value="56">Drewno iglaste</option>
                <option value="55">Drewno liściaste</option>
                <option value="93">Glina</option>
                <option value="77">Granit</option>
                <option value="76">Kamień polny</option>
                <option value="97">Keramzytobeton</option>
                <option value="78">Marmur</option>
                <option value="79">Piaskowiec</option>
                <option value="95">PIR</option>
                <option value="84">Porotherm</option>
                <option value="86">PUR</option>
                <option value="85">Pustak keramzytowy</option>
                <option value="53">Pustak żużlobetonowy</option>
                <option value="63">Pustaki ceramiczne</option>
                <option value="70">Styropian</option>
                <option value="88">Styropian grafitowy</option>
                <option value="71">Styropian twardy (XPS)</option>
                <option value="90">Termalica 300/400</option>
                <option value="91">Termalica 600/650</option>
                <option value="92">Thermomur</option>
                <option value="80">Wapień</option>
                <option value="94">Wełna drzewna</option>
                <option value="68">Wełna mineralna</option>
                <option value="83">Wiórobeton</option>
                <option value="89">Ytong</option>
                <option value="52">Żelbet</option>
            </select>
        </div>
    </div>
</div>
<!-- Izolacja wewnętrzna ściany -->
<div class="row" building="not_apartment_hiden">
    <div class="div_form_title_subsection col-md-6">
        <p class="subsection_div_form"> Izolacja wewnątrz ściany</p>
    </div>
</div>
<div class="row">
    <div id="div_form_4_has_internal_wall_isolation" class="div_form_4 col-md-6">
        <label for="has_internal_wall_isolation" class="label_small_title col-sm-4">
            Ściana ma izolację w środku
        </label>
        <div class="col-sm-8">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="has_internal_wall_isolation" name="has_internal_wall_isolation" value="1" data-gtm-form-interact-field-id="2">
                    <span class="checkbox-material">
                        <span class="check">

                        </span>
                    </span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row" isolation="internal" style="display: none;">
    <div id="div_form_4_internal_wall_isolation_material" class="div_form_4 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Izolacja wewnątrz ściany 
        </label>
        <div class="col-sm-8">
            <select id="internal_wall_isolation_material" name="internal_wall_isolation_material" class=" form-control">
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
<div class="row" isolation="internal" style="display: none;">
    <div id="div_form_4_internal_wall_isolation_size" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Grubość
        </label>
        <div class="col-sm-8">
            <input type="text" id="internal_wall_isolation_size" name="internal_wall_isolation_size">
            <span>cm</span>
        </div>        
    </div>
</div>
<!-- Docieplenie -->
<div class="row" isolation="external_head" style="display: none;">
    <div class="div_form_title_subsection col-md-6">
        <p class="subsection_div_form"> Docieplenie </p>
    </div>
</div>
<div class="row" isolation="external_head" style="display: none;">
    <div id="div_form_4_has_external_wall_isolation" class="div_form_4 col-md-6">
        <label for="has_external_wall_isolation" class="label_small_title col-sm-4">
            Dom jest docieplony
        </label>
        <div class="col-sm-8">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="has_external_wall_isolation" name="has_external_wall_isolation" value="1" data-gtm-form-interact-field-id="2">
                    <span class="checkbox-material">
                        <span class="check">

                        </span>
                    </span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row" isolation="external" style="display: none;">
    <div id="div_form_4_external_wall_isolation_material" class="div_form_4 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Docieplenie od zewnątrz
        </label>
        <div class="col-sm-8">
            <select id="external_wall_isolation_material" name="external_wall_isolation_material" class=" form-control">
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
<div class="row" isolation="external" style="display: none;">
    <div id="div_form_4_external_wall_isolation_size" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Grubość
        </label>
        <div class="col-sm-8">
            <input type="text" id="external_wall_isolation_size" name="external_wall_isolation_size">
            <span>cm</span>
        </div>        
    </div>
</div>

<!----- Okna  -->
<div class="row" building="not_apartment_hiden">
    <div class="div_form_title_section col-md-6">
        <p class="title_section_div_form"> Okna </p>
    </div>
</div>
<!-- all -->
<div class="row">
    <div id="div_form_4_windows_type" class="div_form_4 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Rodzaj okien
        </label>
        <div class="col-sm-8">
            <select id="windows_type" name="windows_type" class=" form-control">
                <option value="old_single_glass">Stare z pojedynczą szybą</option>
                <option value="old_double_glass">Stare z min. dwiema szybami</option>
                <option value="semi_new_double_glass">Starsze (10+ lat) ale z szybami zespolonymi</option>
                <option value="new_double_glass" selected="selected">Współczesne dwuszybowe</option>
                <option value="new_triple_glass">Współczesne trójszybowe</option>
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment_hiden">
    <div id="div_form_4_number_windows" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Liczba okien
        </label>
        <div class="col-sm-8">
            <input type="number" id="number_windows" name="number_windows" maxlength="2" pattern=".{1,}" class="form-control" data-gtm-form-interact-field-id="5">
            <span>szt.</span>
        </div>        
    </div>
</div>
<div class="row" building="not_apartment_hiden" >
    <div id="div_form_4_number_balcony_doors" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Liczba drzwi balkonowych 
        </label>
        <div class="col-sm-8">
            <input type="number" id="number_balcony_doors" name="number_balcony_doors" maxlength="2" pattern=".{1,}">
            <span>szt.</span>
        </div>        
    </div>
</div>
<div class="row" building="not_apartment_hiden" >
    <div id="div_form_4_number_huge_glazings" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Liczba duzych przeszkleń
        </label>
        <div class="col-sm-8">
            <input type="number" id="number_huge_glazings" name="number_huge_glazings" maxlength="2" pattern=".{1,}">
            <span>szt.</span>
        </div>        
    </div>
</div>

<!----- Drzwi  -->
<div class="row" building="not_apartment_hiden">
    <div class="div_form_title_section col-md-6">
        <p class="title_section_div_form"> Drzwi </p>
    </div>
</div>
<!-- all -->
<div class="row">
    <div id="div_form_4_doors_type" class="div_form_4 col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Rodzaj drzwi zewnętrznych 
        </label>
        <div class="col-sm-8">
            <select id="doors_type" name="doors_type" class=" form-control">
                <option value=""></option>
                <option value="old_wooden">Stare drewniane</option>
                <option value="old_metal">Stare metalowe</option>
                <option value="new_wooden" selected="selected">Nowe drewniane</option>
                <option value="new_metal">Nowe metalowe</option>
                <option value="new_pvc">Nowe z tworzywa</option>
            </select>
        </div>
    </div>
</div>
<div class="row" building="not_apartment_hiden">
    <div id="div_form_4_number_doors" class="col-md-6">
        <label for="" class="label_small_title col-sm-4">
            Liczba drzwi zewnętrznych
        </label>    
        <div class="col-sm-8">
            <input type="number" id="number_doors" name="number_doors" maxlength="2" pattern=".{1,}" class="form-control" data-gtm-form-interact-field-id="5">
            <span>szt.</span>
        </div>        
    </div>
</div>
<div class="tab_div_button"> 
    <a numb="4" class="button next_form">Dalej</a>
</div>