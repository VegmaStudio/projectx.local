<div class="container container-my" style="padding-top: 20px; margin-bottom: 50px;">

    <div class="row">

        <div class="col-md-12">

            <h1>{{ userName }} {{ userSurname }} | Мои питомцы</h1>

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

            {% if ( showAnimals == 0 ) %}

                <p class="text-muted">У вас нет зарегистрированных питомцев.</p>
            
            {% else %}    

            <div class="row">
            
                {% for animal in myAnimals %}

                <div class="col-md-3">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                </div>
                                <img style="width: 100%; display: block;" src="{{ animal.photo_file }}" alt="Card image">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer text-muted">
                                    <a href="/profile/animal/id">Открыть карточку</a>
                                </div>
                            </div>            

                        </div>                     
                
                {% endfor %}
            
            </div>    
                
            {% endif %}
            
        </div>    
        
    </div>    

</div> 