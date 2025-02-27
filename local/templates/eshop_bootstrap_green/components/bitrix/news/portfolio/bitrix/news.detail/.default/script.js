$(function(){
	itemHeight();
	itemEffHeight();
	$(window).resize(function(){
		itemHeight();
		itemEffHeight();
	});
	function itemHeight(){
		$('.schemes-item .features').css('height','auto');
		var maxHeight = $('.schemes-item').eq(0).find('.features').height();
		$('.schemes-item').each(function(indx){
			maxHeight = ($(this).find('.features').height() > maxHeight) ? $(this).find('.features').height() : maxHeight;
		});
		$('.schemes-item .features').css('height',maxHeight);
	}
	function itemEffHeight(){
		$('.schemes-item .effective').css('height','auto');
		var maxHeightEf = $('.schemes-item').eq(0).find('.effective').height();
		$('.schemes-item').each(function(indx){
			maxHeightEf = ($(this).find('.effective').height() > maxHeightEf) ? $(this).find('.effective').height() : maxHeightEf;
		});
		$('.schemes-item .effective').css('height',maxHeightEf);
	}

});