$(document).ready(function() {

	$(".detail").animated("fadeInUp", "fadeOutDown");

	$(".reward img").animated("fadeInLeft", "fadeOutDown");
	$(".person").animated("zoomIn", "fadeOutDown");
	$(".one").animated("zoomIn", "fadeOutDown");
	$(".two").animated("fadeInLeft", "fadeOutDown");
	$(".tree").animated("fadeInRight", "fadeOutDown");
	$(".four").animated("zoomIn", "fadeOutDown");

		//Навигация по Landing Page
	//$(".top_mnu") - это верхняя панель со ссылками.
	//Ссылки вида <a href="#contacts">Контакты</a>
	$(".menu ul li a").mPageScroll2id();
});
$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};
		$(".auth_buttons").click(function() {
		$(this).next().slideToggle();
	});
	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});
		//Кнопка "Наверх"
	//Документация:
	//http://api.jquery.com/scrolltop/
	//http://api.jquery.com/animate/
	$(".button_up").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	//Chrome Smooth Scroll
	/*try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};*/

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
	
});

$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

});
