$(function () {
//окошко Подать заявку
	$('.button.feedback, .context-button').click(function () {
		var paramMenuDisplay = $('.block_menu_adapt').css('display');
		if (paramMenuDisplay != 'none' && $(window).width() < 950) {
			$('.block_menu_adapt').css('display', 'none');
		}

		if ($(this).hasClass('context-button')) {
			$('.modaleFeedback .modalTabs').hide();
			$('.modalTabsContent>div').eq(0).css('display', 'none');
			$('.modalTabsContent>div').eq(1).css('display', 'block');
			var sendObject = {
				title: 'crm_form_addon',
				place: $(this).attr('data-place'),
				manager: $(this).attr('data-manager')
			};
			window.frames['bx_form_iframe_8'].postMessage(sendObject, "*");
		} else {
			$('.modaleFeedback .modalTabs').show();
			$('.modaleFeedback .modalTabs span.active').removeClass('active');
			$('.modaleFeedback .modalTabs span').eq(0).addClass('active');
			$('.modalTabsContent>div').eq(0).css('display', 'block');
			$('.modalTabsContent>div').eq(1).css('display', 'none');
		}

		$(".modalBg").css({display: 'block'}).animate({opacity: 1}, 50, function () {
			$('div.modalClose').click(function () {//исчезновение
				$(".modalBg").css({display: 'none'}).animate({opacity: 0}, 50, function () {});
			});
			$('.modaleFeedback .modalTabs span').click(function () {
				var tabClass = $(this).attr('class');
				if (tabClass != 'active') {
					$('.modaleFeedback .modalTabs span.active').removeClass('active');
					$(this).addClass('active');
					var tabNumber = $('.modalTabs span').index(this);
					console.log(tabNumber);
					$('.modalTabsContent>div').css('display', 'none');
					$('.modalTabsContent>div').eq(tabNumber).css('display', 'block');
				}
			});
		});
	});

//среди наших клиентов всплывающие подсказки
	$(".index.seventhBlock .clients-list>div.clients-item").each(function () {
		var nameClient = $(this).find('img').attr('alt');
		var textClient = $(this).attr('title');
		var tooltipText = '<div class="tooltipName">' + nameClient + '</div><div class="tooltipText">' + textClient + '</div>';
		$(this).tooltip({txt: tooltipText});
	});
//мобильное меню
	$('.mob_menu').click(function () {
		var paramMenuDisp = $('.block_menu_adapt').css('display');
		$('.block_menu_adapt').slideToggle("normal");
		/*if(paramMenuDisp=='none'){$('.block_menu_adapt').css({'display':'block'});}
		 else{$('.block_menu_adapt').css({'display':'none'});}*/
	});
//фиксированое меню
	var $menu = $("div.top_menu");
	$(window).scroll(function () {
		if ($(this).scrollTop() > 130 && $menu.hasClass("default") && $(window).width() > 950) {
			$menu.fadeOut('fast', function () {
				$('.top_block_address').addClass('fixedMenu');
				$(this).removeClass("default").addClass("fixed transbg").fadeIn('fast');
			});
		} else if ($(this).scrollTop() <= 130 && $menu.hasClass("fixed") && $(window).width() > 950) {
			$menu.fadeOut('fast', function () {
				$('.top_block_address').removeClass('fixedMenu');
				$(this).removeClass("fixed transbg").addClass("default").fadeIn('fast');
			});
		}
	});

//разворачивающееся меню десктопное

	$('#horizontal-multilevel-menu>li').hover(
			function () {
				var $this = $(this);
				$this.addClass('is-hover');
				setTimeout(function () {
					if ($this.hasClass('is-hover')) {
						$this.addClass('active');
					}
				}, 200);
			}, function () {
		var $this = $(this);
		$this.removeClass('is-hover');
		setTimeout(function () {
			if (!$this.hasClass('is-hover')) {
				$this.removeClass('active');
			}
		}, 300);

	});


	$('#horizontal-multilevel-menu>li>ul>li').hover(
			function () {
				var $this = $(this);
				$this.addClass('is-hover');
				setTimeout(function () {
					if ($this.hasClass('is-hover')) {
						$this.addClass('active');
					}
				}, 200);
			}, function () {
		var $this = $(this);
		$this.removeClass('is-hover');
		setTimeout(function () {
			if (!$this.hasClass('is-hover')) {
				$this.removeClass('active');
			}
		}, 300);

	});

//табы на странице контактов
	//$('.officeSection').prepend('<div class="officeSectionTop"><div id="moscow-tab" class="officeCity"><span>Москва</span></div><div id="samara-tab" class="officeCity def"><span>Самара</span></div><div id="bangkok-tab" class="officeCity def"><span>Бангкок</span></div></div>');
	$('.officeSection').prepend('<div class="officeSectionTop"><div id="bangkok-tab" class="officeCity def"><span>Бангкок</span></div></div>');
	if (document.location.hash && document.location.hash == '#moscow' || document.location.hash == '#samara' || document.location.hash == '#bangkok') {
		contactsTab($(document.location.hash + '-tab'));
	}
	$('.officeCity.def').click(function () {
		contactsTab($(this));
		$('.officeCity.def').click(function () {
			contactsTab($(this));
		});
	});
	function contactsTab(element) {
		var paramIndex = $(element).index();
		$('.officeCity').removeClass("def");
		if (paramIndex == 0) {
			$('.officeCity').eq(1).addClass("def");
			$('.officeCity').eq(2).addClass("def");
		} else if (paramIndex == 1) {
			$('.officeCity').eq(0).addClass("def");
			$('.officeCity').eq(2).addClass("def");
		} else {
			$('.officeCity').eq(0).addClass("def");
			$('.officeCity').eq(1).addClass("def");
		}
		$('.office').css('display', 'none');
		$('.office').eq(paramIndex).css('display', 'block');
		$('.contacts_map').css('display', 'none');
		$('.contacts_map').eq(paramIndex).css('display', 'block').css('position', 'unset');
	}
	$('a.modalWindow').fancybox();

//клиенты
	clientsDetail(window.location.hash);
	$('.clientItem a').click(function () {
		clientsDetail($(this).attr('href'));
	});
//табы
	$('.page-tabs .page-tabs-title').click(function () {
		$(this).siblings(".page-tabs-title.activeTab").removeClass('activeTab');
		$(this).addClass('activeTab');
		$(this).siblings("ul").removeClass('activeContent');
		$(this).siblings("ul").eq($(this).index()).addClass('activeContent');
	});
//табы2
	$('.portfolio-detail .tabs').each(function (indx) {
		$(this).find('span').eq(0).addClass('activeTab');
	});
	$('.portfolio-detail .tabs span').click(function () {
		$(this).siblings("span.activeTab").removeClass('activeTab');
		$(this).addClass('activeTab');
		$(this).siblings("img").removeClass('top-picture');
		$(this).siblings("img").eq($(this).index() - 2).addClass('top-picture');
	});

	$('.tab-portfolio span').click(function () {
		var data = $(this).attr("data-tab");
		$(this).siblings("span.-active").removeClass('-active');
		$(this).addClass('-active');
		$(".tab-portfolio-block").removeClass('-active');
		$(".tab-portfolio-block[data-tab='" + data + "']").addClass('-active');
	});

	/*ReachGoals*/
	//Нажата нопка "Подать заявку"

	$('.button.feedback').click(function () {
		yaCounter136265.reachGoal('press_button_feedback');

		$('#bx_form_iframe_7').css('height', 'auto');
		$('#bx_form_iframe_8').css('height', 'auto');
	});

	//Успешная отправка формы заказа услуг
	$('body').on('services_order_form--success', function () {
		yaCounter136265.reachGoal('services_order_form--success-submit');
	});

	//Успешная отправка формы заказа обратного звонка
	$('body').on('phone_order_form--success', function () {
		yaCounter136265.reachGoal('phone_order_form--success-submit');
		console.log('Captain’s Log');
	});

	// Любое взаимодействие с формой заказа услуг
	var servicesOrderFormInput = function (event) {
		yaCounter136265.reachGoal('services_order_form--input');
		// Что бы засчитать только одно событие, т.е первое 
		$('body').off('input keyup keydown keypress paste change', '.js-reach-goal__services-order-form__input', servicesOrderFormInput);
	};
	$('body').one('input keyup keydown keypress paste change', '.js-reach-goal__services-order-form__input', servicesOrderFormInput);

	// Любое взаимодействие с формой заказа обратного звонка
	var servicesOrderFormInput = function (event) {
		yaCounter136265.reachGoal('phone_order_form--input');
		// Что бы засчитать только одно событие, т.е первое 
		$('body').off('input keyup keydown keypress paste change', '.js-reach-goal__phone-order-form__input', servicesOrderFormInput);
	};
	$('body').one('input keyup keydown keypress paste change', '.js-reach-goal__phone-order-form__input', servicesOrderFormInput);

});

function clientsDetail($link) {
	var urlPage = window.location.href;
	if (urlPage.indexOf('/clients/') > -1) {
		var elementCode1 = $link;
		if (elementCode1) {
			var elementCode = elementCode1.slice(1);
			if ($('div').hasClass('mobile')) {
				$.ajax({
					type: 'POST',
					url: "/local/templates/eshop_bootstrap_green/ajax/clients_mobile.php",
					data: {elementCode: elementCode},
					success: function (dataClients) {
						$('.clientsPage').html(dataClients);
						$('#cur_review_ind').html($(dataClients).find('#new_reviews_ind').text());

						$('.page-title .clientItem.prev a').attr('href', $(dataClients).find('.clientList .clientItem.prev a').attr('href'));
						$('.page-title .clientItem.next a').attr('href', $(dataClients).find('.clientList .clientItem.next a').attr('href'));

						$('html, body').animate({scrollTop: 0}, 'slow');
						$('a.modalWindow').fancybox();
						//$('.clientItem a').click(function () {
						//clientsDetail($(this).attr('href'));
						//});
					}
				})
			} else {
				$.ajax({
					type: 'POST',
					url: "/local/templates/eshop_bootstrap_green/ajax/clients.php",
					data: {elementCode: elementCode},
					success: function (dataClients) {
//			console.log($(dataClients).find('#new_reviews_ind'));
						$('.clientsPage').html(dataClients);
						$('#cur_review_ind').html($(dataClients).find('#new_reviews_ind').text());
						$('a.modalWindow').fancybox();
						$('.clientItem a').click(function () {
							clientsDetail($(this).attr('href'));
						});
					}
				})
			}

		}

	}

}
