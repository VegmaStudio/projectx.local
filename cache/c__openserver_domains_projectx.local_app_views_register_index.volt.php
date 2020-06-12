<div class="container">


    <div class="row" style="padding-top: 15px; padding-bottom: 25px;">

        <div class="col-md-12">

            <h1 class="display-3">Регистрация</h1>
            <p class="lead">Мы настоятельно рекомендуем вам указать реальное имя пользователя.<br />Только так вы сможете подвердить, что вы владелец животного.</p>

        </div>

    </div>

    <form action="" method="post" id="registerForm">
        <div class="form-row">


            <?php

            if ( isset($regError['email']) ) {

            ?>
            <div class="form-group col-md-6 has-danger">
                <label for="inputEmail">E-mail (будет использоваться при авторизации)</label>
                <input type="email" name="email" class="form-control form-control-lg is-invalid" value="<?= $userEmail ?>" id="inputEmail">
                <div class="invalid-feedback">Укажите ваш e-mail.</div>
            </div>
            <?php

            } else {

            ?>
            <div class="form-group col-md-6">
                <label for="inputEmail">E-mail (будет использоваться при авторизации)</label>
                <input type="email" name="email" class="form-control form-control-lg" value="<?= $userEmail ?>" id="inputEmail">
            </div>

            <?php }

            if ( isset($regError['city']) ) {

            ?>            

                <div class="form-group col-md-6 has-danger">
                    <label for="inputCity">Населённый пункт</label>
                    <input type="text" name="city" class="form-control form-control-lg  is-invalid" value="<?= $userCity ?>" id="inputCity">
                    <div class="invalid-feedback">Укажите ваш город.</div>
                </div>
            
            <?php } else { ?>

                <div class="form-group col-md-6">
                    <label for="inputCity">Населённый пункт</label>
                    <input type="text" name="city" class="form-control form-control-lg" value="<?= $userCity ?>"  id="inputCity">
                </div>            
            
            <?php } ?>
            
        </div>
        
        <div class="form-row">
        
            <?php

                if ( isset($regError['surname']) ) {

            ?> 
            
                <div class="form-group col-md-4 has-danger">
                    <label for="inputSurname">Фамилия</label>
                    <input type="text" name="surname" class="form-control form-control-lg is-invalid" value="<?= $userSurname ?>"  id="inputSurname">
                    <div class="invalid-feedback">Заполните поле.</div>                    
                </div>
            
            <?php } else { ?>

                <div class="form-group col-md-4">
                    <label for="inputSurname">Фамилия</label>
                    <input type="text" name="surname" class="form-control form-control-lg" value="<?= $userSurname ?>" id="inputSurname">
                </div>            
            
            <?php }

                if ( isset($regError['name']) ) {

            ?>             
            
            <div class="form-group col-md-4 has-danger">
                <label for="inputName">Имя</label>
                <input type="text" name="name" class="form-control form-control-lg is-invalid" value="<?= $userName ?>" id="inputName">
                    <div class="invalid-feedback">Заполните поле.</div>                 
            </div>
            
            <?php } else { ?>

            <div class="form-group col-md-4">
                <label for="inputName">Имя</label>
                <input type="text" name="name" class="form-control form-control-lg" value="<?= $userName ?>" id="inputName">
                
            </div>            
            
            <?php } ?>             
            
            <div class="form-group col-md-4">
                <label for="inputPatronumic">Отчество</label>
                <input type="text" name="patronumic" class="form-control form-control-lg" id="inputPatronumic">
            </div>
        </div>
        <hr />
        <div class="form-row">
            
            <?php

                if ( isset($regError['pass']) ) {

            ?>            
            
            <div class="form-group col-md-6 has-danger">
                <label for="inputPass">Придумайте пароль</label>
                <input type="password" name="pass" class="form-control form-control-lg is-invalid" id="inputPass">
                <div class="invalid-feedback">Без пароля увы никак... :(</div>                 
            </div>
            
            <?php } else { ?>

            <div class="form-group col-md-6">
                <label for="inputPass">Придумайте пароль</label>
                <input type="password" name="pass" class="form-control form-control-lg" id="inputPass">
            </div>            
            
            <?php }

                if ( isset($regError['pass2']) ) {

            ?>
            
            <div class="form-group col-md-6 has-danger">
                <label for="inputPass2">Повторите пароль (для уверенности)</label>
                <input type="password" name="pass2" class="form-control form-control-lg  is-invalid" id="inputPass2">
                <div class="invalid-feedback">Пароли не совпадают.</div>                  
            </div>
            
            <?php } else { ?>

            <div class="form-group col-md-6">
                <label for="inputPass">Придумайте пароль</label>
                <input type="password" name="pass2" class="form-control form-control-lg" id="inputPass">
            </div>            
            
            <?php } ?>            

        </div>

        <hr />
        <div class="form-row">

            <div class="col-md-12 text-right">

                <button type="submit" class="btn btn-success btn-lg">Регистрироваться</button>

            </div>

        </div>

    </form>

</div>