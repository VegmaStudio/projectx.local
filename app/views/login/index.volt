<div class="container" style="min-height: 600px;">
    <div class="row" style="padding-top: 15px; padding-bottom: 25px;">    

        <div class="col-md-12">

            <h1 class="display-3">Авторизация</h1>

            {% if (messageShow) %} 
            
            <p>Извините. :( Данное действие доступно только авторизованным пользователям.<br />Авторизуйтесь и выберите питомца, которого потеряли.</p>
            
            {% endif %}
            
            {{ helloText }}

        </div>

    </div>

    <form action="" method="post">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">E-mail</label>
                <input type="email" name="email" value="{{ userEmail }}" class="form-control form-control-lg" id="inputEmail" autofocus="" >
            </div>    
        </div> 
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPass">Пароль</label>
                <input type="password" name="pass" class="form-control form-control-lg" id="inputPass" >
            </div> 
        </div>

        <div class="form-row">

            <div class="col-md-12 text-left">

                {{ errorText }}
                
                <button type="submit" class="btn btn-success btn-lg">Вход</button>          
                <a href="/register" class="btn btn-link btn-lg">Регистрация</a>    


            </div>  

        </div>

    </form>    

</div>