/** Funckja główna/ wyświtlanie/ wysyłający danych POST */
jQuery(function($){
	$('.accept_form').on('click', function() {
		var filter = $('#form_cieplo');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), 
			type:filter.attr('method'),
			success:function(data){
				$('.wynik').html(data);
			}
		});
		return false;
	});
});

/*
jQuery(function($){
	$('.accept_form_cookies').on('click', function() {
		var filter = $('#form_cieplo_cookies');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), 
			type:filter.attr('method'),
			xhrFields: {
				withCredentials: true
			},
			success:function(data){
				$('#form_cieplo_cookies').html(data);
			}
		});
		return false;
	});
});
*/

/** Funckja ściągająca po API nazwy miast pasujących do wyszukiwanej frazy */
jQuery(function($){
	$('#search_city').on('click', function() {
		var filter = $('input[name="city"]');
		alert("klikniety oraz "+filter);
		$.ajax({			
			url:filter.attr('action'),
			data:filter.serialize(), 
			type:filter.attr('method'),
			success:function(data){
				$('#searched_cities').html(data);
			}
		});
		return false;
	});
});


/** Funkcja zmieniająca widok formularzu po kliknięciu w zakladki formularza */
jQuery(function($){
	var tabs = $('.tab_form').children('a');
	var form = $('.formularz_box').children('div');	
    tabs.on('click', function() { 
		/** pobieranie wartości z atrybutu numb obecnie aktywnej zakładki*/
		var actualNumberTab = $('a[show="true"]').attr('numb');
		/** pobieranie wartości z atrybutu numb kliknętej zakładki */
		var numbNextButton = $(this).attr('numb');
		/** jeśli cofamy zkładki pozwalaj */
		if(actualNumberTab >= numbNextButton) {
			$('span.alert_form_field').remove();
			tabs.removeAttr("show");
			$(this).attr("show","true");  		
			var id = "#".concat($(this).attr('id'));
			$('.formularz_box').children('.tab').removeClass('show');
			$('.formularz_box').children(id).addClass('show');
		} else {
			if(numbNextButton === 1 ) {
				numbNextButton = 1;
			}
			if(numbNextButton-actualNumberTab > 1) {
				alert('Proszę nie pomijać formatek - sprawdź uzupełnione dane');
				numbNextButton = 0;
			} else {
				numbNextButton = numbNextButton-1;
			}
			if(numbNextButton > 0) {
				if($.fn.validationForm(numbNextButton) == 1) {
					$('span.alert_form_field').remove();
					tabs.removeAttr("show");
					$(this).attr("show","true");  		
					var id = "#".concat($(this).attr('id'));
					$('.formularz_box').children('.tab').removeClass('show');
					$('.formularz_box').children(id).addClass('show');    
				} else {
					alert('Proszę uzupełnć wszystkie formatki');
				}       
			}			
		}				
    });
});

/** Funkcja zmieniająca widok formularzu po kliknięciu w przycisk dalej */
jQuery(function($){
	var next = $('.next_form');
    next.on('click', function() { 		
		/** pobieranie wartości z atrybutu numb kliknętego przycisku */
		var numbNextButton = $(this).attr('numb');
		/** wywołanie własnej utwrzonej funkcji i sprawdzenie warunku */
		if($.fn.validationForm(numbNextButton) == 1) {
			/** Usunięcie elementu */
			$('span.alert_form_field').remove();
			var tabs = $('.tab_form').children('a');
			var activTab = parseInt($('.tab_form').children('a[show="true"]').attr('numb'));
			/** przypisanie do zmiennej pobranej wcześnie zmienną zwiększoną o 1 */
			var newTabNumb = activTab+1;	
			tabs.removeAttr("show");
			var nextTab = $('.tab_form').children('a[numb="'+newTabNumb+'"]');
			/** do zmiennej dodaj atrubut show="true" */
			nextTab.attr("show","true");
			$('.formularz_box').children('.tab').removeClass('show');
			var newFormNumber = nextTab.attr('id');
			$('.formularz_box').children("#"+newFormNumber).addClass('show'); 	
		} else {
			alert('Proszę uzupełnć wszystkie formatki');
		}
    });
});

/** odznaczenie wszystkich radio po przeładowaniu strony */
jQuery(function($){
	$( document ).ready(function() {
		$("input[name='building_type']:radio").attr("checked", false);
	})
}),

/** Radio : change  */
jQuery(function($){ 
	var radioBuildingType = $('input[name="building_type"]');
	var radioShapeArea = $('input[name="building_shape"]');
	var radioSizeArea = $('input[name="building_area_size_option"]');	
	var radioConstructionType = $('input[name="construction_type"]');
	var radioRoofIsolation = $('input[name="top_isolation"]');
	var radioGroundIsolation = $('input[name="bottom_isolation"]');
	// Typ budynku div_form_1
	radioBuildingType.on("change", function() {		
		var radioBuildingTypeChecked = $('input[name="building_type"]:checked').val();		
		if(radioBuildingTypeChecked==='apartment') {
			alert(radioBuildingTypeChecked);
			$('*[building="apartment"]').css({"display":"block"});
			$('*[building="not_apartment"]').css({"display":"none"});
			$('*[optionsize="building_area_size_wall"]').css({"display":"none"});
			$('*[optionsize="building_area_size_area"]').css({"display":"block"});
			$('*[whats="no_apartment"]').css({"display":"none"});
		} else {
			$('*[building="apartment"]').css({"display":"none"});
			$('*[building="not_apartment"]').css({"display":"block"});
			$('*[whats="no_apartment"]').css({"display":"block"});
		}
		if(radioBuildingTypeChecked==='row_house') {
			$('*[building="row_house"]').css({"display":"block"});
		} else {
			$('*[building="row_house"]').css({"display":"none"});
		}
		if(radioBuildingTypeChecked==='multifamily') {
			$('*[building="multifamily"]').css({"display":"block"});
			$('*[building2="not_multifamily"]').css({"display":"none"});
		} else {
			$('*[building="multifamily"]').css({"display":"none"});
		}
	});
	// Typ regularności bryły budynku
	radioShapeArea.on("change", function() {	
		var radioSizeAreaChecked = $('input[name="building_shape"]:checked').val();			
		if(radioSizeAreaChecked==='regular') {
			$('*[optionshape="building_shape_regular"]').css({"display":"block"});
			$('*[optionshape="building_shape_irregular"]').css({"display":"none"});
		} else {
			$('*[optionshape="building_shape_irregular"]').css({"display":"block"});
			$('*[optionshape="building_shape_regular"]').css({"display":"none"});
			$('*[optionsize="building_area_size_wall"]').css({"display":"none"});
			$('*[optionsize="building_area_size_area"]').css({"display":"block"});
		}
	});
	// typ wymiarów budynku
	radioSizeArea.on("change", function() {	
		var radioSizeAreaChecked = $('input[name="building_area_size_option"]:checked').val();			
		if(radioSizeAreaChecked==='size_area') {
			$('*[optionsize="building_area_size_wall"]').css({"display":"none"});
			$('*[optionsize="building_area_size_area"]').css({"display":"block"});
		} else {
			$('*[optionsize="building_area_size_wall"]').css({"display":"block"});
			$('*[optionsize="building_area_size_area"]').css({"display":"none"});
		}
	});
	// Typ konstrukcji
	radioConstructionType.on("change", function() {
		var radioConstructionTypeChecked = $('input[name="construction_type"]:checked').val();	
		if(radioConstructionTypeChecked === 'traditional') {
			$('*[construction="traditional"]').css({"display":"block"});
		} else {
			$('*[construction="traditional"]').css({"display":"none"});
		}
	});
	// Czy jest izolacja dachu 
	radioRoofIsolation.on("change", function() {
		var radioRoofIsolationChecked = $('input[name="top_isolation"]:checked').val();	
		if(radioRoofIsolationChecked === 'true') {
			$('*[isolation="roof"]').css({"display":"block"});
		} else {
			$('*[isolation="roof"]').css({"display":"none"});
		}
	});
	// Czy jest izolacja podłogi parteru
	radioGroundIsolation.on("change", function() {
		var radioGroundIsolationChecked = $('input[name="bottom_isolation"]:checked').val();	
		if(radioGroundIsolationChecked === 'true') {
			$('*[isolation="ground"]').css({"display":"block"});
		} else {
			$('*[isolation="ground"]').css({"display":"none"});
		}
	});
})

/** Checkbox : change */
jQuery(function($){ 
	var checkboxChecked = $('input[type="checkbox"]');
	var checkboxBuildingHeatedFloors = $('input[name="building_heated_floors[]"]');
	var checkboxInternalIsolation = $('input[name="has_internal_wall_isolation"]');
	var checkboxExternalIsolation = $('input[name="has_external_wall_isolation"]');
	var checkboxTopIsolation = $('input[name="has_top_isolation_apartment"]');
	var checkboxBottomIsolation = $('input[name="has_bottom_isolation_apartment"]');
	// Czy ogrzewane poddasze 
	checkboxBuildingHeatedFloors.on("change", function() {
		if($(this).attr("floor") == "steep" && $(this).is(':checked')==true) {
			$('*[heatedfloor="steep"]').css({"display":"none"});
		} else {
			$('*[heatedfloor="steep"]').css({"display":"block"});
		}		
	});
	// Czy jest izolacja wewnętrzna ścian
	checkboxInternalIsolation.on("change", function() {
		if($(this).is(':checked')) {
			$('*[isolation="internal"]').css({"display":"block"});
			$('*[isolation="external_head"]').css({"display":"block"});
		} else {
			$('*[isolation="internal"]').css({"display":"none"});
			$('*[isolation="external_head"]').css({"display":"none"});
			$('*[isolation="external"]').css({"display":"none"});
		}		
	});
	// Czy jest izolacja wewnętrzna ścian
	checkboxExternalIsolation.on("change", function() {
		if($(this).is(':checked')) {
			$('*[isolation="external"]').css({"display":"block"});
		} else {
			$('*[isolation="external"]').css({"display":"none"});
		}		
	});
	checkboxTopIsolation.on("change", function() {
		if($(this).is(':checked')) {
			$('*[isolation="top"]').css({"display":"block"});
		} else {
			$('*[isolation="top"]').css({"display":"none"});
		}		
	});
	checkboxBottomIsolation.on("change", function() {
		if($(this).is(':checked')) {
			$('*[isolation="bottom"]').css({"display":"block"});
		} else {
			$('*[isolation="bottom"]').css({"display":"none"});
		}		
	});

})

/** Select : change */
jQuery(function($){ 
	var select = $('select', '.tab');
	select.on("change", function() {	
		var whichSelect = $(this);
		var whichSelectAttr = $(this).attr('id');	
		var selectedValue = $(this).val();		
		// Wybór pieter w select i zmiana changeboxów z piętrami	
		if(whichSelectAttr === 'building_floors_apartment') {					
			$('#div_form_3_building_heated_floors_apartment > #building_floors_selected_apartment').css( {"display":"none"} );
			for (let i = 3; i >= selectedValue; i--) {
				$('#building_floors_selected_apartment[value="'+i+'"]').css({"display":"none"});
			}		
			for (let i = 1; i <= selectedValue; i++) {
				$('#building_floors_selected_apartment[value="'+i+'"]').css({"display":"block"});
			}			
		}
		if(whichSelectAttr === 'building_floors_single_house') {			
			$('#div_form_3_building_heated_floors_single_house > #building_floors_selected_single_house').css( {"display":"none"} );
			for (let i = 6; i >= selectedValue; i--) {
				$('#building_floors_selected_single_house[value="'+i+'"]').css({"display":"none"});
				$('#building_heated_floors_roof').attr("value",i+1);
			}		
			for (let i = 1; i <= selectedValue;) {
				$('#building_floors_selected_single_house[value="'+i+'"]').css({"display":"block"});
				$('#building_heated_floors_roof').attr("value",i+1);
				i++;
			}			
		}
		if(whichSelectAttr === 'building_roof') {
			if(selectedValue === 'steep') {
				$('#building_floors_selected_single_house[value="steep"]').css({"display":"block"});
			} else {
				$('#building_floors_selected_single_house[value="steep"]').css({"display":"none"});
			}
		}
		// Sąsiednie mieszkania (ogrzewane czy nie) gdy apartment
		if(whichSelect.parent().find('select').attr('name') === 'whats_over' && selectedValue === 'unheated_room') {			
			$('*[unheated="top"]').css({"display":"block"});
		} 
		if(whichSelect.parent().find('select').attr('name') === 'whats_over' && selectedValue !== 'heated_room') {			
			$('*[whats="over"]').css({"display":"block"});
		} 
		if(whichSelect.parent().find('select').attr('name') === 'whats_over' && selectedValue === 'heated_room') {			
			$('*[whats="over"]').css({"display":"none"});
		} 
		if(whichSelect.parent().find('select').attr('name') === 'whats_over' && selectedValue !== 'unheated_room') {
			$('*[unheated="top"]').css({"display":"none"});
		}
		if(whichSelect.parent().find('select').attr('name') === 'whats_under' && selectedValue === 'unheated_room') {			
			$('*[unheated="bottom"]').css({"display":"block"});
		} 
		if(whichSelect.parent().find('select').attr('name') === 'whats_under' && selectedValue !== 'heated_room') {
			$('*[whats="under"]').css({"display":"block"});
		}
		if(whichSelect.parent().find('select').attr('name') === 'whats_under' && selectedValue === 'heated_room') {
			$('*[whats="under"]').css({"display":"none"});
		}
		if(whichSelect.parent().find('select').attr('name') === 'whats_under' && selectedValue !== 'unheated_room') {
			$('*[unheated="bottom"]').css({"display":"none"});
		}
		// Wybór instalacji grzewczej w ramach głównego źródła ogrzewania
		if(whichSelectAttr === 'main_heating_device') {
			if(selectedValue === 'heat_pump_air_air' || selectedValue === 'electric_non_accumulative' || 
			selectedValue === 'electric_accumulative' || selectedValue === 'stove') {
				$('*[mainheating="device"]').css({"display":"none"});
			} else {
				$('*[mainheating="device"]').css({"display":"block"});
			}
		}		
		// Maksymalna temperatura w ramach wybranej instalacji grzewczej
		if(whichSelectAttr === 'heating_system_type') {
			if(selectedValue === 'forty_forty' || selectedValue === 'heaters_mostly' || 
			selectedValue === 'heaters_only') {
				$('*[mainheating="system"]').css({"display":"block"});
			} else {
				$('*[mainheating="system"]').css({"display":"none"});
			}
		}
	})
})

/** Funkcja do walidacji */
$.fn.validationForm = function (numbNextButton) {
	/** div_form_1 */
	if(numbNextButton == 1 ) {
		var checkedRadioBuilding = $('input[type="radio"]:checked', '#div_form_'+numbNextButton+'_building', '.tab_'+numbNextButton).val();
		if(checkedRadioBuilding) {
			$radioBuilding = 1;
		} else {
			$radioBuilding = 0;
			$('#div_form_1_building').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę zaznaczyć budynek</span>');
		}
		if(($radioBuilding === 1)) {
			$true = 1;
		} else {
			$true = 0;
		}	
	}
	/** div_form_2 */
	if(numbNextButton == 2 ) {
		var checkedRadioLocalization = $('input[type="radio"]:checked', '#searched_cities','#div_form_'+numbNextButton+'_localization', '.tab_'+numbNextButton).val();
		if(checkedRadioLocalization) {
			$radioLocalization = 1;
		} else {
			$radioLocalization = 0;
			$('#div_form_2_localization').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać lokalizację</span>');
		}
		if(($radioLocalization === 1)) {
			$true = 1;
		} else {
			$true = 0;
		}	
	}
	/** div_form_3 */
	if(numbNextButton == 3 ) {
		// Typ wymiarów budynku 
		var trueArea;
		var checkedRadioAreaSizeOption = $('input[type="radio"]:checked', '#div_form_'+numbNextButton+'_building_area_size_option', '.tab_'+numbNextButton).val();
		if(checkedRadioAreaSizeOption == "size_area") {
			var inputTextAreaSizeLength = $('input[type="text"]','#div_form_'+numbNextButton+'_area_size', '.tab_'+numbNextButton).val().length;
			if(inputTextAreaSizeLength > 0) {
				$textAreaSize = 1;
			} else {
				$textAreaSize = 0;
				$('#div_form_3_area_size').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę podać powierzchnię</span>');
			}
			if(($textAreaSize === 1)) {
				trueArea = 1;
			} else {
				trueArea = 0;
			}	
		} else {
			var inputTextAreaLengthLength = $('input[type="text"]','#div_form_'+numbNextButton+'_area_length', '.tab_'+numbNextButton).val().length;
			var inputTextAreaWidthLength = $('input[type="text"]','#div_form_'+numbNextButton+'_area_width', '.tab_'+numbNextButton).val().length;
			if(inputTextAreaLengthLength > 0) {
				$textAreaLength = 1;
			} else {
				$textAreaLength = 0;
				$('#div_form_3_area_length').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę podać długość</span>');
			}
			if(inputTextAreaWidthLength > 0) {
				$textAreaWidth = 1;
			} else {
				$textAreaWidth = 0;
				$('#div_form_3_area_width').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę podać szerokość</span>');
			}
			if(($textAreaLength === 1 && $textAreaWidth === 1)) {
				trueArea = 1;
			} else {
				trueArea = 0;
			}	
		}
		// Gdzie umieszczony dom szeregowy (on corner)
		var checkRadioOnCorner;
		var radioBuildingTypeChecked = $('input[name="building_type"]:checked').val();	
		if(radioBuildingTypeChecked === 'row_house') {
			var checkedRadioOnCorner = $('input[type="radio"]:checked', '#div_form_'+numbNextButton+'_on_corner', '.tab_'+numbNextButton).val();
			if(checkedRadioOnCorner) { 
				checkRadioOnCorner = 1;
			} else {
				checkRadioOnCorner = 0;
				$('#div_form_3_on_corner').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wskazać położenie w szeregu</span>');
			}
			if(trueArea === 1 && checkRadioOnCorner === 1) {
				$true = 1;
			} else {
				$true = 0;
			}
		} else {
			if(trueArea === 1) {
				$true = 1;
			} else {
				$true = 0;
			}
		}		

	}	
	/** div_form_4 */
	if(numbNextButton == 4 ) {
		// Wybór typu konstrukcji
		var checkedRadioConstructionType = $('input[type="radio"]:checked', '#div_form_'+numbNextButton+'_construction_type', '.tab_'+numbNextButton).val();			
		if(checkedRadioConstructionType == "traditional") {
			var selectedPrimaryWallMaterial = $('select','#div_form_'+numbNextButton+'_primary_wall_material', '.tab_'+numbNextButton).val();
			var selectedSecondaryWallMaterial = $('select','#div_form_'+numbNextButton+'_secondary_wall_material', '.tab_'+numbNextButton).val();
			if(selectedPrimaryWallMaterial != "") {
				$selectPrimaryWallMaterial = 1;
			} else {
				$selectPrimaryWallMaterial = 0;
				$('#div_form_4_primary_wall_material').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
			}			
		}
		// Zaznaczenie izolacji wewnętrznej
		var checkedCheckboxInternalWallIsolation = $('input[type="checkbox"]', '#div_form_'+numbNextButton+'_has_internal_wall_isolation', '.tab_'+numbNextButton);		
		if(checkedCheckboxInternalWallIsolation.prop('checked') == true) {
			var selectedInternalWallIsolationMaterial = $('select','#div_form_'+numbNextButton+'_internal_wall_isolation_material', '.tab_'+numbNextButton).val();
			var inputTextInternalWallIsolationSizeLength = $('input[type="text"]','#div_form_'+numbNextButton+'_internal_wall_isolation_size', '.tab_'+numbNextButton).val().length;
			if(selectedInternalWallIsolationMaterial != "") {
				$selectInternalWallIsolationMaterial = 1;
			} else {
				$selectInternalWallIsolationMaterial = 0;
				$('#div_form_4_internal_wall_isolation_material').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
			}
			if(inputTextInternalWallIsolationSizeLength > 0) {
				$textInternalWallIsolationSize = 1;
			} else {
				$textInternalWallIsolationSize = 0;
				$('#div_form_4_internal_wall_isolation_size').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
			}		
		}
		// Zaznaczenie izolacji zewnnętrznej
		var checkedCheckboxExternalWallIsolation = $('input[type="checkbox"]', '#div_form_'+numbNextButton+'_has_external_wall_isolation', '.tab_'+numbNextButton);		
		if(checkedCheckboxExternalWallIsolation.prop('checked') == true) {
            var selectedExternalWallIsolationMaterial = $('select','#div_form_'+numbNextButton+'_external_wall_isolation_material', '.tab_'+numbNextButton).val();
            var inputTextExternalWallIsolationSizeLength = $('input[type="text"]','#div_form_'+numbNextButton+'_external_wall_isolation_size', '.tab_'+numbNextButton).val().length;
            if(selectedExternalWallIsolationMaterial != "") {
                $selectExternalWallIsolationMaterial = 1;
            } else {
                $selectExternalWallIsolationMaterial = 0;
                $('#div_form_4_external_wall_isolation_material').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
            }
            if(inputTextExternalWallIsolationSizeLength > 0) {
                $textExternalWallIsolationSize = 1;
            } else {
                $textExternalWallIsolationSize = 0;
                $('#div_form_4_external_wall_isolation_size').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
            }       
        }
		// Grubość ściany
		var inputTextWallSize = $('input[type="text"]','#div_form_'+numbNextButton+'_wall_size', '.tab_'+numbNextButton).val().length;
		if(inputTextWallSize > 0) {
			$textWallSize = 1;
		} else {
			$textWallSize = 0;
			$('#div_form_4_wall_size').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wprowadzić grubość</span>');
		}	
		// Liczba okien
		var inputTextNumberWindows = $('input[type="number"]','#div_form_'+numbNextButton+'_number_windows', '.tab_'+numbNextButton).val();
		if(inputTextNumberWindows.length > 0 && inputTextNumberWindows > 0) {
			$textNumberWindows = 1;
		} else {
			$textNumberWindows = 0;
			$('#div_form_4_number_windows').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wprowadzić liczbę okien (liczba powinna być większa od 0)</span>');
		}		
		// Liczba drzwi balkonowych
		var inputTextNumberBalcony = $('input[type="number"]','#div_form_'+numbNextButton+'_number_balcony_doors', '.tab_'+numbNextButton).val().length;
		if(inputTextNumberBalcony > 0) {
			$textNumberBalcony = 1;
		} else {
			$textNumberBalcony = 0;
			$('#div_form_4_number_balcony_doors').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wprowadzić liczbę drzwi balkonowych</span>');
		}		
		// Liczba dużych przeszkleń
		var inputTextNumberHugeGlazings = $('input[type="number"]','#div_form_'+numbNextButton+'_number_huge_glazings', '.tab_'+numbNextButton).val().length;
		if(inputTextNumberHugeGlazings > 0) {
			$textNumberHugeGlazings = 1;
		} else {
			$textNumberHugeGlazings = 0;
			$('#div_form_4_number_huge_glazings').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wprowadzić liczbę dużych przeszkleń</span>');
		}	
		// Liczba drzwi zewnętrznych
		var inputTextNumberDoors = $('input[type="number"]','#div_form_'+numbNextButton+'_number_doors', '.tab_'+numbNextButton).val().length;
		if(inputTextNumberDoors > 0) {
			$textNumberDoors = 1;
		} else {
			$textNumberDoors = 0;
			$('#div_form_4_number_doors').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wprowadzić liczbę drzwi zewnętrznych</span>');
		}	
		// Obsługa przycisku dalej -> czy puszczać do kolejnej zakładki
		if (checkedRadioConstructionType == "traditional" && checkedCheckboxInternalWallIsolation.prop('checked') == false && checkedCheckboxExternalWallIsolation.prop('checked') == false) {
			if($selectPrimaryWallMaterial === 1 && $textNumberWindows === 1 && $textNumberBalcony === 1 &&
				$textNumberHugeGlazings === 1 && $textNumberDoors === 1 && $textWallSize === 1) {
				$true = 1;
			} else {
				$true = 0;
			}
		} else if(checkedRadioConstructionType == "traditional" && checkedCheckboxInternalWallIsolation.prop('checked') == true && checkedCheckboxExternalWallIsolation.prop('checked') == false) {
			if($selectPrimaryWallMaterial === 1 && $selectInternalWallIsolationMaterial === 1 && 
				$textInternalWallIsolationSize === 1 && $textNumberWindows === 1 && $textNumberBalcony === 1 && $textNumberHugeGlazings === 1 &&
				$textNumberDoors === 1 && $textWallSize === 1) {
				$true = 1;
			} else {
				$true = 0;
			}
		} else if(checkedRadioConstructionType == "traditional" && checkedCheckboxInternalWallIsolation.prop('checked') == true && checkedCheckboxExternalWallIsolation.prop('checked') == true) {
			if($selectPrimaryWallMaterial === 1 && $selectInternalWallIsolationMaterial === 1 && 
				$textInternalWallIsolationSize === 1 && $selectExternalWallIsolationMaterial === 1 && $textExternalWallIsolationSize === 1 && 
				$textNumberWindows === 1 && $textNumberBalcony === 1 && $textNumberHugeGlazings === 1 && $textNumberDoors === 1 &&
				$textWallSize === 1) {
				$true = 1;
			} else {
				$true = 0;
			}
		}
	}	
	/** div_form_5 */
	if(numbNextButton == 5 ) {
		var radioBuildingTypeChecked = $('input[name="building_type"]:checked').val();	
		if(radioBuildingTypeChecked === 'apartment') {
			// Nieogrzewany lokal powyzej 
			var trueTopIsolationApartment;
			var selectedTopIsolationWhat = $('select','#div_form_'+numbNextButton+'_top_isolation', '.tab_'+numbNextButton).val();
			if(selectedTopIsolationWhat === 'heated_room') {
				trueTopIsolationApartment = 1;
			} else {
				var checkedCheckboxHasTopIsolationApartment = $('input[type="checkbox"]', '#div_form_'+numbNextButton+'_has_top_isolation_apartment', '.tab_'+numbNextButton);		
				if(checkedCheckboxHasTopIsolationApartment.prop('checked') == true) {
					var selectedTopIsolationMaterialApartment = $('select','#div_form_'+numbNextButton+'_top_isolation_material_apartment', '.tab_'+numbNextButton).val();	
					var inputTextTopIsolationSizeApartment = $('input[type="text"]','#div_form_'+numbNextButton+'_top_isolation_size_apartment', '.tab_'+numbNextButton).val().length;
					if(selectedTopIsolationMaterialApartment != "") {
						$selectTopIsolationMaterialApartment = 1;
					} else {
						$selectTopIsolationMaterialApartment = 0;
						$('#div_form_5_top_isolation_material_apartment').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
					}
					if(inputTextTopIsolationSizeApartment > 0) {
						$textTopIsolationSizeApartment = 1;
					} else {
						$textTopIsolationSizeApartment = 0;
						$('#div_form_5_top_isolation_size_apartment').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wpisać grubość </span>');
					}		
					if($selectTopIsolationMaterialApartment === 1 && $textTopIsolationSizeApartment === 1) {
						trueTopIsolationApartment = 1
					}  else {
						trueTopIsolationApartment = 0;
					}			
				} else {
					trueTopIsolationApartment = 1;
				}			
			}
			// Nieogrzewany lokal ponizej
			var trueBottomIsolationApartment;
			var selectedBottomIsolationWhat = $('select','#div_form_'+numbNextButton+'_bottom_isolation', '.tab_'+numbNextButton).val();
			if(selectedBottomIsolationWhat === 'heated_room') {
				trueBottomIsolationApartment = 1;
			} else {
				var checkedCheckboxHasBottomIsolationApartment = $('input[type="checkbox"]', '#div_form_'+numbNextButton+'_has_bottom_isolation_apartment', '.tab_'+numbNextButton);		
				if(checkedCheckboxHasBottomIsolationApartment.prop('checked') == true) {
					var selectedBottomIsolationMaterialApartment = $('select','#div_form_'+numbNextButton+'_bottom_isolation_material_apartment', '.tab_'+numbNextButton).val();	
					var inputTextBottomIsolationSizeApartment = $('input[type="text"]','#div_form_'+numbNextButton+'_bottom_isolation_size_apartment', '.tab_'+numbNextButton).val().length;
					if(selectedBottomIsolationMaterialApartment != "") {
						$selectBottomIsolationMaterialApartment = 1;
					} else {
						$selectBottomIsolationMaterialApartment = 0;
						$('#div_form_5_bottom_isolation_material_apartment').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
					}
					if(inputTextBottomIsolationSizeApartment > 0) {
						$textBottomIsolationSizeApartment = 1;
					} else {
						$textBottomIsolationSizeApartment = 0;
						$('#div_form_5_bottom_isolation_size_apartment').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wpisać grubość </span>');
					}
					if($selectBottomIsolationMaterialApartment === 1 && $textBottomIsolationSizeApartment === 1) {
						trueBottomIsolationApartment = 1
					}  else {
						trueBottomIsolationApartment = 0;
					}
				} else {
					trueBottomIsolationApartment = 1;
				}			
			}
			if(trueBottomIsolationApartment === 1 && trueTopIsolationApartment === 1) {
				$true = 1;
			} else {
				$true = 0;
			}

		} else {
			// Izlacja dachu  
			var selectTopIsolationMaterialHouse;
			var textTopIsolationSizeHouse;
			var trueTopIsolationHouse;
			var checkedRadioTopIsolationHouse = $('input[type="radio"]:checked', '#div_form_'+numbNextButton+'_top_isolation_house', '.tab_'+numbNextButton).val();
			if(checkedRadioTopIsolationHouse === 'true') { 
				var selectedTopIsolationHouse = $('select','#div_form_'+numbNextButton+'_top_isolation_material', '.tab_'+numbNextButton).val();
				if(selectedTopIsolationHouse !== "") {
					selectTopIsolationMaterialHouse = 1;
				} else {
					selectTopIsolationMaterialHouse = 0;
					$('#div_form_5_top_isolation_material').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
				}
				var inputTextTopIsolationSizeHouse = $('input[type="text"]','#div_form_'+numbNextButton+'_top_isolation_size', '.tab_'+numbNextButton).val().length;
				if(inputTextTopIsolationSizeHouse > 0) {
					textTopIsolationSizeHouse = 1;
				} else {
					textTopIsolationSizeHouse = 0;
					$('#div_form_5_top_isolation_size').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
				}
				if(selectTopIsolationMaterialHouse === 1 && textTopIsolationSizeHouse === 1) {
					trueTopIsolationHouse = 1;
				} else {
					trueTopIsolationHouse = 0;
				}
			} else {
				trueTopIsolationHouse = 1;				
			}		
			// Izlacja podłogi  
			var selectBottomIsolationMaterialHouse;
			var textBottomIsolationSizeHouse;
			var trueBottomIsolationHouse;
			var checkedRadioBottomIsolationHouse = $('input[type="radio"]:checked', '#div_form_'+numbNextButton+'_bottom_isolation_house', '.tab_'+numbNextButton).val();
			if(checkedRadioBottomIsolationHouse === 'true') { 
				var selectedBottomIsolationHouse = $('select','#div_form_'+numbNextButton+'_bottom_isolation_material', '.tab_'+numbNextButton).val();
				if(selectedBottomIsolationHouse !== "") {
					selectBottomIsolationMaterialHouse = 1;
				} else {
					selectBottomIsolationMaterialHouse = 0;
					$('#div_form_5_bottom_isolation_material').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
				}
				var inputTextBottomIsolationSizeHouse = $('input[type="text"]','#div_form_'+numbNextButton+'_bottom_isolation_size', '.tab_'+numbNextButton).val().length;
				if(inputTextBottomIsolationSizeHouse > 0) {
					textBottomIsolationSizeHouse = 1;
				} else {
					textBottomIsolationSizeHouse = 0;
					$('#div_form_5_bottom_isolation_size').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
				}
				if(selectBottomIsolationMaterialHouse === 1 && textBottomIsolationSizeHouse === 1) {
					trueBottomIsolationHouse = 1;
				} else {
					trueBottomIsolationHouse = 0;
				}
			} else {
				trueBottomIsolationHouse = 1;				
			}		
			if(trueTopIsolationHouse === 1 && trueBottomIsolationHouse === 1) {
				$true = 1;
			} else {
				$true = 0;
			}		
		}
	}
	/** div_form_6 */
	if(numbNextButton == 6 ) {
		var selectMainHeatingDevice;
		var textIndoorTemperature;
		var trueHeatingSystemType;
		var selectedMainHeatingDevice = $('select','#div_form_'+numbNextButton+'_main_heating_device', '.tab_'+numbNextButton).val();
		var inputTextIndoorTemperature = $('input[type="text"]','#div_form_'+numbNextButton+'_indoor_temperature', '.tab_'+numbNextButton).val().length;
		if(selectedMainHeatingDevice != "") {
			if(selectedMainHeatingDevice === 'heat_pump_air_air' || selectedMainHeatingDevice === 'electric_non_accumulative' ||
			selectedMainHeatingDevice === 'electric_accumulative' || selectedMainHeatingDevice === 'stove') {
				trueHeatingSystemType = 1;
			}  else {
				var selectHeatingSystemType;
				var selectHeatingSystemTemperature;
				var selectedHeatingSystemType = $('select','#div_form_'+numbNextButton+'_heating_system_type', '.tab_'+numbNextButton).val();	
				if(selectedHeatingSystemType != "") {					
					if(selectedHeatingSystemType === 'heaters_only' || selectedHeatingSystemType === 'heaters_mostly' ||
					selectedHeatingSystemType === 'forty_forty') {
						var selectedHeatingSystemTemperature = $('select','#div_form_'+numbNextButton+'_heating_system_temperature', '.tab_'+numbNextButton).val();	
						if(selectedHeatingSystemTemperature !== "") {
							selectHeatingSystemType = 1;
						} else {
							selectHeatingSystemType = 0;
							$('#div_form_6_heating_system_temperature').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać temperaturę</span>');
						}		
					} else {
						selectHeatingSystemType = 1;
					}
				} else {
					selectHeatingSystemType = 0;
					$('#div_form_6_heating_system_type').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać rodzaj instalacji</span>');
				}
				if(selectHeatingSystemType === 1) {
					trueHeatingSystemType = 1;
				} else {
					trueHeatingSystemType = 0;
				}
			}
		} else {
			trueHeatingSystemType = 0;
			$('#div_form_6_main_heating_device').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać urządzenie</span>');
		}
		if(inputTextIndoorTemperature > 0) {
			textIndoorTemperature = 1;
		} else {
			textIndoorTemperature = 0;
			$('#div_form_6_indoor_temperature').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
		}  
		

		if(trueHeatingSystemType === 1 && textIndoorTemperature === 1) {
			$true = 1;
		} else {
			$true = 0;
		}
	}

	/** sprawdzanie czy można przejść dalej */
	
	return $true;
}

