<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $titlePage ?></title>
        <link rel="stylesheet" href="/public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/public/css/common.css" /> 
        <link rel="stylesheet" href="/public/fonts/style.css" />         

        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />        
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="border-top: 3px #2196F3 solid;">
    <div class="container-fluid">

        <a class="navbar-brand" href="/"><img src="/public/img/logo.png" height="40" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link m-link" href="/find">Их ищут</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-link" href="/search">Забрать себе</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link m-link" href="/themselves">Сами по себе</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link m-link" href="/catalog">Организации</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-link" href="/help">Помочь животным</a>
                </li>
            </ul>
            <ul class="navbar-nav">

                <?php if ((!$userAuth)) { ?>

                <li class="nav-item">
                    <a class="nav-link m-link" href="/login">Вход</a>
                </li>                        
                <li class="nav-item">
                    <a class="nav-link m-link" href="/register">Регистрация</a>
                </li> 

                <?php } else { ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle u-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $userName ?> 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/profile/page/<?= $userId ?>" aria-hidden="true" data-icon="&#xe008;">Моя страница</a>
                        <a class="dropdown-item" href="/profile" aria-hidden="true" data-icon="&#xe0d1;">Профиль</a>
                        <a class="dropdown-item" href="/profile/animals" aria-hidden="true" data-icon="&#xe127;">Питомцы</a> 
                        <a class="dropdown-item" href="/friends" aria-hidden="true" data-icon="&#xe001;">Друзья и контакты</a>
                        <a class="dropdown-item" href="/messages" aria-hidden="true" data-icon="&#xe08c;">Сообщения</a>                        
                        <div class="dropdown-divider"></div>                        
                        <a class="dropdown-item" href="/profile/favorite/" aria-hidden="true" data-icon="&#xe026;">Мои закладки</a>                        
                        <a class="dropdown-item" href="/profile/settings" aria-hidden="true" data-icon="&#xe051;">Настройки</a>
                        <div class="dropdown-divider"></div> 
                        <a class="dropdown-item" href="/logout" aria-hidden="true" data-icon="&#xe075;">Выход</a>
                    </div>
                </li>                                

                <?php } ?>

            </ul>
        </div>

    </div>
</nav>        

        <?php echo $this->getContent(); ?>

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
