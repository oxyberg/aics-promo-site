$(document).ready(function(){
	



	// ------ SLIDER IMAGES ------ //
	var data = {
		threed: ['1', '2'],
		tech: ['1', '2', '3'],
		asu: ['1', '2', '3', '4', '5'],
		cals: ['1', '2']
	};

	$.each(data, function(key, value){
		$.each(value, function(index, value){
			$('.footer').append($('img').attr('src', 'images/slider/'+key+'/'+data[key][index]+'.jpg').attr('style','display:none'));
		});
	});


	// ------ SLIDER ANIMATION ------ //
	var duration = 4000;

	$('.nav a').click(function(){

		$('.nav a').removeClass('active');
		$(this).addClass('active');

		$('.slider .content').hide();
		$('.slider #'+$(this).attr('data-name')).show();

		var name = $(this).attr('data-name');

		clearInterval(intervalID);
		$('.slider').attr('style', 'background-image:'+'url(images/slider/'+name+'/'+data[name][0]+'.jpg');
		slider(name);

		return false;

	});

	function slider(name){
		var $slider = $('.slider');

		var i = 1;
		intervalID = setInterval(function(){
			if (i == data[name].length) i = 0;
			$slider.attr('style', 'background-image:'+'url(images/slider/'+name+'/'+data[name][i]+'.jpg');
			i++
		}, duration);

	}

	$('.slider .content').hide();
	$('.slider #threed').show();
	slider('threed');
	



	// ------ STAFF SPOILER ------ //
	$('.link a').click(function(){
		if ($(this).hasClass('showed')) {
			$('.spoiler').slideUp(500);
			$(this).text('Показать ассистентов кафедры');
			$(this).removeClass('showed');
		} else {
			$('.spoiler').slideDown(500);
			$(this).text('Скрыть ассистентов кафедры');
			$(this).addClass('showed');
		}
		return false;
	});
	



	// ------ MAP INTERACTION ------ //
	$('body > *').not('body > .tile.active').click(function(){
		$('.tile.active .popover').fadeOut(200);
		$(this).removeClass('active');
	});

	$('.tile').click(function(){
		$('.tile.active .popover').fadeOut(200);
		addr = $(this).attr('data-address');
		components = {
			address: $(this).find('.contents .address').text(),
			title: $(this).find('.contents .title').text()
		};
		$(this).find('.popover .stroked .address').html(components['address']);
		$(this).find('.popover .stroked .title').html(components['title']);
		$(this).find('.popover img').attr('src', 'images/popovers/'+addr+'.jpg');
		$(this).find('.popover').fadeIn(200);
		$(this).addClass('active');
		return false;
	});





});