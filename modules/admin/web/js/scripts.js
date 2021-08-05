$(function(){
    // Показать/скрыть блок поиска
	$('.search-icon').on('click',function () {

        $('.menu-logo').hide();
        $('.menu-search').removeClass('hidden');
        $('.menu-search').show();
    });

    $('.close-icon').on('click',function () {
        $('.menu-search').hide();
        $('.menu-search').addClass('hidden');
        $('.menu-logo').show();
    });
    // $('.collapse-a .collapse').collapse();

    // Второй раз клик по меню
    $('body').on('show.bs.dropdown', function (e) {
        $(e.relatedTarget).addClass('disabled')
    });
    $('body').on('hide.bs.dropdown', function (e) {
        $(e.relatedTarget).removeClass('disabled')
    });    // Второй раз клик по меню




});

// Яндекс карта
ymaps.ready(init);
var myMap,
    myPlacemark;

function init(){
    myMap = new ymaps.Map ("footer-maps", {
        center: [44.411270, 40.803255],
        zoom: 15
    });
    // добавляем метки на карте
    myPlacemark = new ymaps.Placemark([44.411270, 40.803255], {
            hintContent: 'Администрация МБУЗ Мостовская ЦРБ',
            balloonContent: 'Администрация МБУЗ Мостовская ЦРБ',
            preset: 'twirl#blueStretchyIcon'
        },{
            preset: 'twirl#redIcon'
        }
    );
    // добавляем метки на карте
    mySy = new ymaps.Placemark([44.410793, 40.803319], {
        hintContent: 'Станция скорой медицинской помощи',
        balloonContent: 'Станция скорой медицинской помощи'
    });
    // добавляем метки на карте
    mySy_stac = new ymaps.Placemark([44.425475, 40.777817], {
        hintContent: 'Стационар ГБУЗ Мостовская ЦРБ МЗ КК',
        balloonContent: 'Стационар ГБУЗ Мостовская ЦРБ МЗ КК'
    });
    // вызываем метки на карте
    myMap.geoObjects.add(mySy);
    myMap.geoObjects.add(myPlacemark);
    myMap.geoObjects.add(mySy_stac);
}// Яндекс карта


// $(function(){
//     $('#form,#form-message-hospital,#enter').validator({
//         // feedback: {
//         //     success: 'glyphicon-thumbs-up',
//         //     error: 'glyphicon-thumbs-down'
//         // }
//     });
// });