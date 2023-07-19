/*
jQuery(function($) {
	$('.accept_form').on('click', function() {
        var data = $('#form_cieplo').serializeArray(); // convert form to array
        $.ajax({
            //url: $('#form_cieplo').attr('action'),
            method: "POST",
            dataType: "html",
            data: $.param(data),           
            success: function (data) {
                $('.wynik').html(data);
            }            
        })               
    });    
}); 
*/

/**  
jQuery(function($){
	$('.get_form').on('click', function() {
		var filter = $('.get_form');
		$.ajax({
			url:filter.attr('action'),
			data:{name: "page"}, 
			type:filter.attr('method'),
			success:function(data){
				$('.wynik').html(data);
			}
		});
		return false;
	});
});
*/

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

/** Funkcja zmieniająca widok formularzu po kliknięciu w zakladki formularza */
jQuery(function($){
	var tabs = $('.tab_form').children('a');
	var form = $('.formularz_box').children('div');
    tabs.on('click', function() { 
        tabs.removeAttr("show");
        $(this).attr("show","true");  		
		var id = "#".concat($(this).attr('id'));
		$('.formularz_box').children('.tab').removeClass('show');
		$('.formularz_box').children(id).addClass('show');    
    });
});

/** Funkcja zmieniająca widok formularzu po kliknięciu w przycisk dalej */
jQuery(function($){
	var next = $('.next_form');
    next.on('click', function() { 
		var tabs = $('.tab_form').children('a');
		var activTab = parseInt($('.tab_form').children('a[show="true"]').attr('numb'));
		var newTabNumb = activTab+1;	
        tabs.removeAttr("show");
		var nextTab = $('.tab_form').children('a[numb="'+newTabNumb+'"]');
		nextTab.attr("show","true");
		$('.formularz_box').children('.tab').removeClass('show');
		var newFormNumber = nextTab.attr('id');
		$('.formularz_box').children("#"+newFormNumber).addClass('show'); 			
    });
});



