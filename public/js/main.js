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

});



