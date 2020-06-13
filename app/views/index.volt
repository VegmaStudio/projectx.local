<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ titlePage }}</title>
        <link rel="stylesheet" href="/public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/public/css/common.css" /> 
        <link rel="stylesheet" href="/public/fonts/style.css" />         

        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />        

    </head>
    <body>

        {% include 'layouts/global/navigate.volt' %}        

        {{ content() }}

        <hr/>      

        <!-- FOOTER -->
        <footer class="container" style="padding-top: 20px;">
            
            <div class="row">
            
                <div class="col-md-7">
                
                    <p><a href="#">Правовая информация</a> &middot; <a href="#">Персональные данные</a></>
                    <p>&copy; 2020 <a href="">Vegma</a>/<i>С любовью из Оренбурга...</i> </p>
            
                </div>
                <div class="col-md-5 text-right">
                
                    <p style="line-height: 9pt;"><small>Поделитесь ссылкой на сервис.<br />Будьте добрее к животным и людям.</small></p>
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter,viber,whatsapp,telegram"></div>
            
                </div>
                
            </div>
            
        </footer>        

        <!-- Dependencies -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <!-- Bootstrap 4 Autocomplete -->
        <script src="/public/js/typeahead.js"></script>
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <script src="/public/js/main.js"></script>
        <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="https://yastatic.net/share2/share.js"></script>
        
        
    </body>

</html>
