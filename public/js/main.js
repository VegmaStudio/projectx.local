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

});