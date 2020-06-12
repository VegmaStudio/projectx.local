<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="/"><img src="/public/img/logo.png" height="40" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link m-link" href="#">Главная <span class="sr-only">(current)</span></a>
                </li>
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
                        <a class="dropdown-item" href="/id<?= $userId ?>">Моя страница</a>
                        <a class="dropdown-item" href="/profile">Профиль</a>
                        <a class="dropdown-item" href="/profile/animals">Питомцы</a> 
                        <a class="dropdown-item" href="/friends">Друзья и контакты</a>
                        <div class="dropdown-divider"></div>                        
                        <a class="dropdown-item" href="/friends">Мои закладки</a>                        
                        <a class="dropdown-item" href="/profile/settings">Настройки</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">Выход</a>
                    </div>
                </li>                                

                <?php } ?>

            </ul>
        </div>

    </div>
</nav>