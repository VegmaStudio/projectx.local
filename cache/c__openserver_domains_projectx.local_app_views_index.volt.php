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
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="/"><img src="/public/img/logo.png" height="40" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link m-link" href="#">Их ищут</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-link" href="#">Забрать себе</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link m-link" href="#">Организации</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link m-link" href="#">Помочь животным</a>
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
                        <?= $userName ?> <?= $userSurname ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/id<?= $userId ?>" aria-hidden="true" data-icon="&#xe008;"> Моя страница</a>
                        <a class="dropdown-item" href="/profile" aria-hidden="true" data-icon="&#xe0d1;">Профиль</a>
                        <a class="dropdown-item" href="/profile/animals" aria-hidden="true" data-icon="&#xe127;">Питомцы</a> 
                        <a class="dropdown-item" href="/friends" aria-hidden="true" data-icon="&#xe001;">Друзья и контакты</a>
                        <a class="dropdown-item" href="/messages" aria-hidden="true" data-icon="&#xe08c;">Сообщения</a>                        
                        <div class="dropdown-divider"></div>                        
                        <a class="dropdown-item" href="/friends" aria-hidden="true" data-icon="&#xe026;">Мои закладки</a>                        
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
    <p>&copy; 2020 <a href="">Vegma</a> &middot; <a href="#">Правовая информация</a> &middot; <a href="#">Персональные данные</a></p>
  </footer>        
        
<!-- Dependencies -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap 4 Autocomplete -->
<script src="/public/js/typeahead.js"></script>
    
        <script src="/public/js/main.js"></script>

    </body>
    
</html>
