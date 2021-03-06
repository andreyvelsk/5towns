var slider = tns({
    container: '.my-slider',
    items: 1,
    autoplay: true
});

$(function() {

    $('.slider').css('display', 'block');

    $(".sidebar_menu").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор блока с атрибута href
        let id  = $(this).attr('href');
        //узнаем высоту от начала страницы до блока на который ссылается якорь
        let top = $(id).offset().top;

        //анимируем переход на расстояние - top
        $('body,html').animate({scrollTop: top}, 700);

    });

    $('.menu_header').click(function() {
		$(this).next().slideToggle();
        $('.menu_header').not(this).next().slideUp();

        $('.menu_header').toggleClass('menu_header-active');
	});

});