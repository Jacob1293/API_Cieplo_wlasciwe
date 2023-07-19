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

jQuery(function($){
	var next = $('.next_form');
	var activTab = parseInt($('.tab_form').children('a[show="true"]').attr('numb'));
    next.on('click', function() { 
		alert(activTab+1);
		/*
        tabs.removeAttr("show");
        $(this).attr("show","true");  		
		var id = "#".concat($(this).attr('id'));
		$('.formularz_box').children('.tab').removeClass('show');
		$('.formularz_box').children(id).addClass('show');    
		*/
    });
});



