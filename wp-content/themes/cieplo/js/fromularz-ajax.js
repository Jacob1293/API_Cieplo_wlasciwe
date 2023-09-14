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
		var actualNumberTab = $('a[show="true"]').attr('numb');
		var numbNextButton = $(this).attr('numb');
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
			} else {
				numbNextButton = numbNextButton-1;
			}
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

/** Weryfikacja zmiany / zaznaczenie typu budynku */
jQuery(function($){ 
	var radioBuildingType = $('input[name="building_type"]');
	var radioShapeArea = $('input[name="building_shape"]');
	var radioSizeArea = $('input[name="building_area_size_option"]');	
	var radioConstructionType = $('input[name="construction_type"]');
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
	radioConstructionType.on("change", function() {
		var radioConstructionTypeChecked = $('input[name="construction_type"]:checked').val();	
		if(radioConstructionTypeChecked === 'traditional') {
			$('*[construction="traditional"]').css({"display":"block"});
		} else {
			$('*[construction="traditional"]').css({"display":"none"});
		}
	});
})

/** Checkbox : change */
jQuery(function($){ 
	var checkboxChecked = $('input[type="checkbox"]');
	checkboxChecked.on("change", function() {	
		var whichCheck = $(this).attr('id');
		var whichCheckStatus = $(this).is(':checked');
		alert(whichCheck+" ma status "+whichCheckStatus);
	})
})

/** Select : change */
jQuery(function($){ 
	var select = $('select', '.tab');
	select.on("change", function() {	
		var whichSelect = $(this).attr('id');	
		var selectedValue = $(this).val();			
		if(whichSelect === 'building_floors_apartment') {		
			alert(selectedValue);	
			$('#div_form_3_building_heated_floors_apartment > #building_floors_selected_apartment').css( {"display":"none"} );
			for (let i = 3; i >= selectedValue; i--) {
				$('#building_floors_selected_apartment[value="'+i+'"]').css({"display":"none"});
			}		
			for (let i = 1; i <= selectedValue; i++) {
				$('#building_floors_selected_apartment[value="'+i+'"]').css({"display":"block"});
			}			
		}
		if(whichSelect === 'building_floors_single_house') {			
			$('#div_form_3_building_heated_floors_single_house > #building_floors_selected_single_house').css( {"display":"none"} );
			for (let i = 5; i >= selectedValue; i--) {
				$('#building_floors_selected_single_house[value="'+i+'"]').css({"display":"none"});
			}		
			for (let i = 1; i <= selectedValue;) {
				$('#building_floors_selected_single_house[value="'+i+'"]').css({"display":"block"});
				i++;
			}			
		}
		if(whichSelect === 'building_roof') {
			if(selectedValue === 'steep') {
				$('#building_floors_selected_single_house[value="steep"]').css({"display":"block"});
			} else {
				$('#building_floors_selected_single_house[value="steep"]').css({"display":"none"});
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
				$true = 1;
			} else {
				$true = 0;
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
				$true = 1;
			} else {
				$true = 0;
			}	
		}
	}	
	/** div_form_4 */
	if(numbNextButton == 4 ) {
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
			if(selectedSecondaryWallMaterial != "") {
				$selectSecondaryWallMaterial = 1;
			} else {
				$selectSecondaryWallMaterial = 0;
				$('#div_form_4_secondary_wall_material').prev('span.alert_form_field').remove().end().before('<span class="col-sm-12 alert_form_field">*Proszę wybrać materiał</span>');
			}		
		}
		var checkedCheckboxInternalWallIsolation = $('input[type="checkbox"]:checked', '#div_form_'+numbNextButton+'_has_internal_wall_isolation', '.tab_'+numbNextButton).val();
		if(checkedCheckboxInternalWallIsolation == "1") {
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
		if(($selectInternalWallIsolationMaterial === 1 && $textInternalWallIsolationSize === 1 && $selectSecondaryWallMaterial === 1 && $selectPrimaryWallMaterial === 1)) {
			$true = 1;
		} else {
			$true = 0;
		}	
	}	

	/** sprawdzanie czy można przejść dalej */
	
	return $true;
}

