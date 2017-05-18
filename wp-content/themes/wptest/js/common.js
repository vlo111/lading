$(document).ready(function() {

	var is_ok_4 = true;
	$('.fa-bars').click(function(){
		if (is_ok_4){
			document.getElementById("mySidenav").style.width = "250px";
			is_ok_4 = false;
		}
		else{
			document.getElementById("mySidenav").style.width = "0";
			is_ok_4 = true;
		}
	});

	$('.closebtn').click(function(){
		document.getElementById("mySidenav").style.width = "0";
		is_ok_4 = true;
	});

		$("#owl-demo").owlCarousel({

			autoPlay: false, //Set AutoPlay to 3 seconds
			navigation :true,
			items : 3,
			itemsDesktop : [1199,3],
			itemsDesktopSmall : [979,3]

		});

	$('#zayavka-button').click(function(){
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var phoneReg = /[0-9]{5,15}/;

			if($('#input-1').val()===''){
				$('#input-1-inf').html('введите ваш e-mail адрес');
			}else{
				if(emailReg.test($('#input-1').val())){
					$('#input-1-inf').html('');
				}else{
					$('#input-1-inf').html('ваш e-mail адрес неверно');
				}
			}
			if ($('#input-2').val()===''){
				$('#input-2-inf').html('введите ваш Телефонни номер');
			}else{
				if(phoneReg.test($('#input-2').val())){
					$('#input-2-inf').html('');
				}else{
					$('#input-2-inf').html('ваш Телефонни номер неверно');
				}
			}
		if($('#input-0').val()==='' || $('#input-0').val().length < 3){
			$('#input-0-inf').html('введите Ваше имя');
		}else{

				$('#input-0-inf').html('');

		}


	});

	$('.item').mouseover(function(){
		$(this).find('.div').css('display','block');
		$(this).find('.div').css('transition','all 2s linear');
	});
	$('.item').mouseout(function(){
		$(this).find('.div').css('display','none');
	});

	$('.slayder-img').mouseover(function(){
		$(this).find('.absolute-img-1').css('display','block');
		$(this).find('.absolute-img-1').css('transition','all 2s linear');
		$(this).find('.zoom-icon-text-block p').css('text-shadow','1px 1px #000');
	});
	$('.slayder-img').mouseout(function(){
		$(this).find('.absolute-img-1').css('display','none');
	});

	$('.images-block-4').mouseover(function(){
		$(this).find('.absolute-img-2').css('display','block');
	});
	$('.images-block-4').mouseout(function(){
		$(this).find('.absolute-img-2').css('display','none');
	});
	$('.images-block-3').mouseover(function(){
		$(this).find('.absolute-img-2').css('display','block');
	});
	$('.images-block-3').mouseout(function(){
		$(this).find('.absolute-img-2').css('display','none');
	});
	$('.images-block-2').mouseover(function(){
		$(this).find('.absolute-img-2').css('display','block');
	});
	$('.images-block-2').mouseout(function(){
		$(this).find('.absolute-img-2').css('display','none');
	});
	$('.images-block-1').mouseover(function(){
		$(this).find('.absolute-img-2').css('display','block');
	});
	$('.images-block-1').mouseout(function(){
		$(this).find('.absolute-img-2').css('display','none');
	});

	var is_ok = true;
	$('#click').click(function(){
		if(is_ok){
			$('.image-ul-2').show(1000);
			is_ok = false;
			$('#click').html('СКРЫТЬ');
		}else{
			$('.image-ul-2').hide(1000);
			is_ok = true;
			$('#click').html('Ещё');
		}
	});

	//Таймер обратного отсчета
	//Документация: http://keith-wood.name/countdown.html
	//<div class="countdown" date-time="2015-01-07"></div>
	var austDay = new Date($(".countdown").attr("date-time"));
	$(".countdown").countdown({until: austDay, format: 'yowdHMS'});

	//Попап менеджер FancyBox
	//Документация: http://fancybox.net/howto
	//<a class="fancybox"><img src="image.jpg" /></a>
	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
	$(".fancybox").fancybox();

	//Навигация по Landing Page
	//$(".top_mnu") - это верхняя панель со ссылками.
	//Ссылки вида <a href="#contacts">Контакты</a>
	$(".top_mnu").navigation();

	//Добавляет классы дочерним блокам .block для анимации
	//Документация: http://imakewebthings.com/jquery-waypoints/
	$(".block").waypoint(function(direction) {
		if (direction === "down") {
			$(".class").addClass("active");
		} else if (direction === "up") {
			$(".class").removeClass("deactive");
		};
	}, {offset: 100});

	//Плавный скролл до блока .div по клику на .scroll
	//Документация: https://github.com/flesler/jquery.scrollTo
	$("a.scroll").click(function() {
		$.scrollTo($(".div"), 800, {
			offset: -90
		});
	});

	//Каруселька
	//Документация: http://owlgraphic.com/owlcarousel/
	var owl = $(".carousel");
	owl.owlCarousel({
		items : 4
	});
	owl.on("mousewheel", ".owl-wrapper", function (e) {
		if (e.deltaY > 0) {
			owl.trigger("owl.prev");
		} else {
			owl.trigger("owl.next");
		}
		e.preventDefault();
	});
	$(".next_button").click(function(){
		owl.trigger("owl.next");
	});
	$(".prev_button").click(function(){
		owl.trigger("owl.prev");
	});

	//Кнопка "Наверх"
	//Документация:
	//http://api.jquery.com/scrolltop/
	//http://api.jquery.com/animate/
	$("#top").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});

});