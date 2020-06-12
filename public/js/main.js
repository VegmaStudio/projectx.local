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

    $('#inputDateBurn').datetimepicker({
        
        uiLibrary: 'bootstrap4',
        modal: false,
        footer: true
        
    });
    
    $('.set-kind-animal').on( 'click', function() {
        
        $('.select-kind').removeClass('.select-kind');
        $(this).addClass('.select-kind'); 
        
        return false;
        
    });

});