$(document).ready(function () {

    $('#inputCity').typeahead({
        source: function (query, result) {

            $.ajax({
                url: "/api/getTown",
                data: 'query=' + query,
                dataType: "json",
                type: "POST",
                success: function (data) {

                    result($.map(data, function (item) {
                        return item;
                    }));
                }
            });

        }
    });
    
    $('#inputPoroda').typeahead({
        source: function (query, result) {

            $.ajax({
                url: "/api/getPorodaList",
                data: 'query=' + query + '&kind=' + $('#kind-animal').val(),
                dataType: "json",
                type: "POST",
                success: function (data) {

                    result($.map(data, function (item) {
                        return item;
                    }));
                }
            });

        }
    });    

    $('#inputDateBurn').datetimepicker({
        
        uiLibrary: 'bootstrap4',
        modal: false,
        footer: true
        
    });
    
    $('.set-kind-animal').on( 'click', function() {
        
        $('.set-kind-animal').each( function() {
            
            $(this).removeClass('select-kind');
            
        });
        
        $('#kind-animal').val( $(this).attr('rel') );
        
        $(this).addClass('select-kind');
        
        return false;
        
    });

ymaps.ready(init);

function init() {
    var geolocation = ymaps.geolocation,
        myMap = new ymaps.Map('map', {
            center: [55, 34],
            zoom: 10
        }, {
            searchControlProvider: 'yandex#search'
        });

    // Сравним положение, вычисленное по ip пользователя и
    // положение, вычисленное средствами браузера.
    geolocation.get({
        provider: 'yandex',
        mapStateAutoApply: true
    }).then(function (result) {
        // Красным цветом пометим положение, вычисленное через ip.
        result.geoObjects.options.set('preset', 'islands#redCircleIcon');
        result.geoObjects.get(0).properties.set({
            balloonContentBody: 'Мое местоположение'
        });
        myMap.geoObjects.add(result.geoObjects);
    });

    geolocation.get({
        provider: 'browser',
        mapStateAutoApply: true
    }).then(function (result) {
        // Синим цветом пометим положение, полученное через браузер.
        // Если браузер не поддерживает эту функциональность, метка не будет добавлена на карту.
        result.geoObjects.options.set('preset', 'islands#blueCircleIcon');
        myMap.geoObjects.add(result.geoObjects);
    });
}
});
