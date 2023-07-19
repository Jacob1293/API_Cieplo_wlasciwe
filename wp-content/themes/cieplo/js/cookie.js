function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*30));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
} 

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
} 

function refreshCookies() {
	if (getCookie('ciasteczka') == 'bang!')
		return;

	var url_pp = '';
	var $div = $('<div/>', { class: 'cookies' }).html('<div class="container"><p class="left">W ramach naszej strony internetowej przetwarzamy Wasze dane osobowe i korzystamy z plików cookies w celu realizacji usług. Przebywając na tej stronie internetowej automatycznie akceptujesz warunki dotyczące przetwarzania danych osobowych i plików cookies zawarte w <a href="http://mtlstrony.com.pl/cosen/polityka-prywatnosci/" target="_blank">Polityce Prywatności</a></p><a class="closebutton" href="#">Akceptuję</a></div>');
	
	$('body').prepend($div).addClass('has-cookies-info');
	$div.find('.closebutton').click(function(e) {
		e.preventDefault();
		$div.remove();
		$('body').removeClass('has-cookies-info');
		$(window).scroll();
		setCookie('ciasteczka', 'bang!', 9999);
		$(window).resize();
	});
	$(window).resize(); 
}