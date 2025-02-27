$(function(){
$('body').prepend('<div id="loading"></div>');
var opts = {
  lines: 9 // The number of lines to draw
, length: 7 // The length of each line
, width: 11 // The line thickness
, radius: 17 // The radius of the inner circle
, scale: 0.5 // Scales overall size of the spinner
, corners: 1 // Corner roundness (0..1)
, color: '#000' // #rgb or #rrggbb or array of colors
, opacity: 0.25 // Opacity of the lines
, rotate: 0 // The rotation offset
, direction: 1 // 1: clockwise, -1: counterclockwise
, speed: 1 // Rounds per second
, trail: 60 // Afterglow percentage
, fps: 20 // Frames per second when using setTimeout() as a fallback for CSS
, zIndex: 2e9 // The z-index (defaults to 2000000000)
, className: 'spinner' // The CSS class to assign to the spinner
, top: '50%' // Top position relative to parent
, left: '50%' // Left position relative to parent
, shadow: false // Whether to render a shadow
, hwaccel: false // Whether to use hardware acceleration
, position: 'absolute' // Element positioning
}
var target = document.getElementById('loading')
var spinner = new Spinner(opts).spin(target);
 $(window).load(function() {
 $('#loading').fadeOut(700);
 });

	if ($(window).width() < 767) {
		var widthItem = 60;
	} else {
		var widthItem = 20;
	};
	var leftStep = $(window).width()*0.9;
	var countEl1 = $('#blockClients .clients-list .clients-item1').length;
	var countEl2 = $('#blockClients .clients-list .clients-item2').length;
	var countEl3 = $('#blockClients .clients-list .clients-item3').length;
	var countEl = countEl1+countEl2+countEl3;
	var widthAllEl = countEl*widthItem;
	$('#blockClients .clients-list').parents('div').eq(0).css({'width':widthAllEl+'vw'});
	$('#blockClients .clients-list.clients-list1').css({'width':countEl1*widthItem+'vw'});
	$('#blockClients .clients-list.clients-list2').css({'width':countEl2*widthItem+'vw'});
	$('#blockClients .clients-list.clients-list3').css({'width':countEl3*widthItem+'vw'});

//скролл
var element=document.getElementById('scroller');

	if(element){
		var leftMarginDef = $(window).width()*0.45;
		var win_w = $(window).width()*(countEl-1)*(widthItem/100);
		var img, margin, left,widthEl,widthElAll,widthVisible;
		new Hammer( $( "#scroller" )[ 0 ], {
		  domEvents: true
		} );
		$("#scroller").on("panstart", function(e){
		  img = $("#scroller");
		  margin = parseInt(img.css("margin-left"), 10);
		  left = parseInt(img.css("left"), 10);
		  widthEl=$('.clients-list .clients-item1').width();
		  widthElAll=$('.allClients').width();
		  widthVisible=$('.clientsOver').width();
		} );
		$("#scroller").on("pan", function(e){
		console.log("pan");
		  var delta = e.originalEvent.gesture.deltaX;
		  console.log( delta );
			if ((delta>0 && -margin>left && margin+delta<-left) || (delta<0 && -(margin+left-widthEl+delta-(widthVisible-widthEl))<=widthElAll)){
					if(delta>0){
						if((margin + widthEl)>-left){
							img.css({"margin-left":-left,"transition-duration":"200ms"});
						} 
						else{
							if(margin%widthEl==0){img.css({"margin-left":margin + widthEl,"transition-duration":"200ms"});}
							else{img.css({"margin-left":margin + widthEl-(margin%widthEl),"transition-duration":"200ms"});}
						} 
					}
				else{
					if(-(margin+left-widthEl+delta-(widthVisible-widthEl)-widthEl)>=widthElAll){
						img.css({"margin-left":-widthElAll + widthEl+(widthVisible-widthEl)-left,"transition-duration":"200ms"});
					} 
					else{
						if(margin%widthEl==0){img.css({"margin-left":margin - widthEl,"transition-duration":"200ms"});}
						else{img.css({"margin-left":margin - widthEl - (margin%widthEl),"transition-duration":"200ms"});}
					} 
				}
			}
		});
	}

    var img, margin;
var element0=$( ".makeMeScrollable" )[ 0 ];
	if(element0){

		new Hammer( $( ".makeMeScrollable" )[ 0 ], {
		  domEvents: true
		} );
		$( ".makeMeScrollable" ).eq(0).on( "panstart", function( e ) {
			img = $( ".makeMeScrollable" ).eq(0).find("img");
		  margin = parseInt( img.css( "margin-left" ), 10 );

		} );
		$( ".makeMeScrollable" ).eq(0).on( "pan", function( e ) {
		var number = 0;
		console.log( "pan" );
		  var delta = margin + e.originalEvent.gesture.deltaX;
		  console.log( delta );
		  if ( delta >= -600 && delta <= -10 ) {
			 img.css( {
			"margin-left": margin + e.originalEvent.gesture.deltaX
		  } ); 
		  }
			var paramDispBut= $(".makeMeScrollable").eq(number).find('.pull-button').css('display');
			if(paramDispBut=='block'){$(".makeMeScrollable").eq(number).find('.pull-button').css('display','none');}
		} );

	}

	$( ".makeMeScrollable" ).each(function(indx){
		window['element'+indx]=$( ".makeMeScrollable" )[indx];
		if(window['element'+indx]){
			new Hammer( $( ".makeMeScrollable" )[indx], {
			  domEvents: true
			} );
			$( ".makeMeScrollable" ).eq(indx).on( "panstart", function( e ) {
				img = $( ".makeMeScrollable" ).eq(indx).find("img");
			  margin = parseInt( img.css( "margin-left" ), 10 );
			} );
			$( ".makeMeScrollable" ).eq(indx).on( "pan", function( e ) {
			var number = indx;
			console.log( "pan" );
			  var delta = margin + e.originalEvent.gesture.deltaX;
			  console.log( delta );
			  if ( delta >= -600 && delta <= -10 ) {
				 img.css( {
				"margin-left": margin + e.originalEvent.gesture.deltaX
			  } ); 
			  }
				var paramDispBut= $(".makeMeScrollable").eq(number).find('.pull-button').css('display');
				if(paramDispBut=='block'){$(".makeMeScrollable").eq(number).find('.pull-button').css('display','none');}
			} );
		}
	});


$('.makeMeScrollable').append('<div class="pull-button"> </div>');



//звонок на телефон
	$('.bx-logo').after('<a href="tel:+66837884484" class="mobPhoneTop"></a>');
	$('.clients-item3:last div').css({'border':'none'});
//seo схемы разворачиваются
	$('.schemes-item').click(function(){
		if($(this).hasClass('default')){
			$(this).removeClass('default');
		}
		else{
			$(this).addClass('default');
		}
	});
//удалить всплывающие подсказки на главной
	$("div.clients-item").removeClass('clients-item');
//контакты выпадающие списки
	$('.staff-section .bx_catalog_text_title').click(function(){
		var paramIndex = $(this).index('.bx_catalog_text_title');
		var paramDisplay = $('.staff-section .containerThin').eq(paramIndex).css('display');
		if(paramDisplay=='none'){$('.staff-section .containerThin').eq(paramIndex).css('display','block');$(this).addClass('open');}
		else{$('.staff-section .containerThin').eq(paramIndex).css('display','none');$(this).removeClass('open');}
	})
//в контактах удалить карту
	$('.contacts_map.samara').remove();
	$('.contacts_map.moscow').remove();
	$('.contacts_map.bangkok').remove();
//в контактах добавить ссылки для мобильных
	$(".office.moscow .address").wrapInner("<a href='http://maps.apple.com/?address=Москва, ул. Большая Ордынка, д. 17'></a>");
	$(".office.samara .address").wrapInner("<a href='http://maps.apple.com/?address=Самара, ул. Советской Армии, д. 121/44'></a>");
	$(".office.bangkok .address").wrapInner("<a href='http://maps.apple.com/?address=3421/60 Rama 9 Motorway, Suanluang, Bangkok, 10250'></a>");

	$('.officeSectionEn').prepend('<h2>Offices</h2>');
//меню
	$('.block_menu_adapt').prependTo('.workarea');
//меню выпадающее отрывать подпункты по клику
	$('#horizontal-multilevel-menu li').each(function(indx){
		var htmlLi = $(this).html();
		if(htmlLi.indexOf('<ul>')>-1){
			$(this).addClass('parentLi');
			$(this).addClass('default');
		}
	});
	
	$('#horizontal-multilevel-menu>li.parentLi>a').click(function(){
		$('#horizontal-multilevel-menu li.parentLi>ul>li>ul').css('display','none');
		/*$(this).parents('li').eq(0).find('ul').eq(0).css('display','block');*/
		$(this).parents('li').eq(0).find('ul').eq(0).slideToggle("normal");
		
			if($(this).parent('li').hasClass('default')){
				$(this).parent('li').removeClass('default');
				$(this).parent('li').addClass('open');
			}
			else{
				$(this).parent('li').removeClass('open');
				$(this).parent('li').addClass('default');
			} 
			
		return false;
	});
	$('#horizontal-multilevel-menu>li>ul>li.parentLi>a').click(function(){
		$('#horizontal-multilevel-menu>li>ul>li.parentLi>ul>li>ul').css('display','none');
		$(this).parents('li').eq(0).find('ul').eq(0).slideToggle("normal");
		
		if($(this).parent('li').hasClass('default')){
				$(this).parent('li').removeClass('default');
				$(this).parent('li').addClass('open');
			}
			else{
				$(this).parent('li').removeClass('open');
				$(this).parent('li').addClass('default');
		} 
		
		return false;
	});

	$('.pull-button').each(function(){$(this).html('<span>Потяните</span>');});


});

/*seo схемы разворачиваются
	$('.schemes-item').click(function(){
		if($(this).hasClass('default')){
			$(this).removeClass('default');
		}
		else{
			$(this).addClass('default');
		}
	}); */

/* меню выпадающее отрывать подпункты по клику оригинал
	$('#horizontal-multilevel-menu li').each(function(indx){
		var htmlLi = $(this).html();
		if(htmlLi.indexOf('<ul>')>-1){
			$(this).addClass('parentLi');
			$(this).addClass('default');
		}
	});
	$('#horizontal-multilevel-menu>li.parentLi>a').click(function(){
		$('#horizontal-multilevel-menu li.parentLi>ul>li>ul').css('display','none');
		/*$(this).parents('li').eq(0).find('ul').eq(0).css('display','block');*/
	/*	$(this).parents('li').eq(0).find('ul').eq(0).slideToggle("normal");
		return false;
	});
	$('#horizontal-multilevel-menu>li>ul>li.parentLi>a').click(function(){
		$('#horizontal-multilevel-menu>li>ul>li.parentLi>ul>li>ul').css('display','none');
		$(this).parents('li').eq(0).find('ul').eq(0).slideToggle("normal");
		return false;
	});

	$('.pull-button').each(function(){$(this).html('<span>Потяните</span>');});

}); */