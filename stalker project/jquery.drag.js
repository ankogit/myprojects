// ----------------------------------------------------------------------------
// Drag, jQuery plugin
// v 1.0
// ----------------------------------------------------------------------------
// Copyright (C) 2010 recens
// http://recens.ru/jquery/plugin_drag.html
// ----------------------------------------------------------------------------
(function($){
	$.fn.drag = function(o){
		var o = $.extend({
			start:function(){},   // при начале перетаскивания
			stop:function(){} // при завершении перетаскивания
		}, o);
		return $(this).each(function(){
			var d = $(this); // получаем текущий элемент
			d.mousedown(function(e){ // при удерживании мыши
				d.css('position','absolute');
				$(document).unbind('mouseup'); // очищаем событие при отпускании мыши
				o.start(d); // выполнение пользовательской функции
				var f = d.offset(), // находим позицию курсора относительно элемента
				x = e.pageX - f.left,  // слева
				y = e.pageY - f.top;  // и сверху

	            $(document).mousemove(function(a){ // при перемещении мыши
					d.css({'top' : a.pageY - y + 'px','left' : a.pageX - x + 'px'}); // двигаем блок
				});
				$(document).mouseup(function(){  // когда мышь отпущена
					$(document).unbind('mousemove'); // убираем событие при перемещении мыши
					o.stop(d); // выполнение пользовательской функции
				});
				return false;
			});
		});
	}
})(jQuery);
$(document).ready(function(){
	$('#ex1').drag();
	$('#ex2').drag({		start:function(e){			e.html('Блок удерживается');
		}, stop:function(e){			e.html('Блок отпущен');
	}});      /*
	$('#ex3').drag({stop:function(e){
			var f = e.offset(),
			r = $('#red').offset(),
			o = $('#orange').offset(),
			y = $('#yellow').offset();
            if (f.top < r.top || f.top > r.top + 150) {
            	e.html('none');            	return;
            }
			if (f.left > r.left && f.left < o.left) e.hide().css('background-color',);
			if (f.left > o.left && f.left < y.left) e.html('o');
			if (f.left > y.left && f.left < y.left + 150) e.html('y');
	}}); */
});