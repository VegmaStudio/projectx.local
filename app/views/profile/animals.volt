<div class="container container-my" style="padding-top: 20px; margin-bottom: 50px;">

    <div class="row">

        <div class="col-md-12">

            <h1>{{ userName }} {{ userSurname }} | Профиль</h1>

        </div>

    </div>
</div>    

<div class="container container-my" style="margin-bottom: 30px;"> 

    <div class="row">

        <div class="col-md-12">
            <h2 class="box-title">Мои питомцы <a href="/profile/animal_add" class="btn btn-primary btn-sm">Добавить</a></h2>
        </div>

        <hr />
        
        <div class="col-md-12 none-objects text-center">

            {% if ( showAnimals ) %}

                <p class="text-muted">У вас нет зарегистрированных питомцев.</p>
            
            {% endif %}
            
        </div>    
        
    </div>    

</div> 