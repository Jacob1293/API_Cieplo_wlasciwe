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


jQuery(function($){
	$( document ).ready(function() {
		$("input:radio").attr("checked", false);
	})
}),


$.fn.validationForm = function (numbNextButton) {
	/** div_form_1 */
	var checkedRadioBuilding = $('input[type="radio"]:checked', '#div_form_'+numbNextButton+'_building', '.tab_'+numbNextButton).val();
	if(checkedRadioBuilding) {
		$radioBuilding = 1;
	} else {
		$radioBuilding = 0;
		$('#div_form_1_building').prev('span.alert_form_field').remove().end().before('<span class="alert_form_field">*Proszę zaznaczyć budynek</span>');
	}
	/** div_form_2 */
	var checkedRadioLocalization = $('input[type="radio"]:checked', '#searched_cities','#div_form_'+numbNextButton+'_localization', '.tab_'+numbNextButton).val();
	if(checkedRadioLocalization) {
		$radioLocalization = 1;
	} else {
		$radioLocalization = 0;
		$('#div_form_2_localization').prev('span.alert_form_field').remove().end().before('<span class="alert_form_field">*Proszę wybrać lokalizację</span>');
	}
	/** sprawdzanie czy można przejść dalej */
	if(($radioBuilding === 1) || ($radioLocalization === 1)) {
		$true = 1;
	} else {
		$true = 0;
	}	
	return $true;
}
