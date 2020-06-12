<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                        <?= $userName ?> <?= $userSurname ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/profile/page/<?= $userId ?>" aria-hidden="true" data-icon="&#xe008;"> Моя страница</a>
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