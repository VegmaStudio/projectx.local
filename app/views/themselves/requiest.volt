<div class="container container-my" style="padding-top: 60px; padding-bottom: 40px;">

    <div class="row">

        <div class="col-md-12">

            <h1 style="margin-top: 0; padding-top: 0;">Сообщить о безнадзорном животном</h1>

        </div>        

    </div>
</div>

<hr /> 
<div class="container container-my" style="margin-bottom: 30px;"> 

    <form action="" method="post" enctype="multipart/form-data">    

        <div class="row">

            <div class="col-md-6">

                {% if (userId == 0) %}

                <p class="lead">Вы не авторизованы. Представьтесь и оставьте свои контактные данные.</p>

                {% else %}

                <p class="lead"><strong>{{ userName }}</strong>, благодарим за бдительность и участие. Как проблема будет решена. Мы Вам сообщим.</p>

                {% endif %}
                
        <fieldset style="margin-top: 50px;">    
            <legend>Опишите ситуацию и количество животных:</legend>  
            
            <div class="row" style="margin-top: 30px;"> 

                <div class="form-group col-md-12">
                  <label for="exampleTextarea">Текст сообщения</label>
                  <textarea class="form-control" name="about" id="exampleTextarea" rows="3"  required></textarea>
                </div>

            </div>               
            
            <div class="row" style="margin-top: 30px;"> 

                <div class="form-group col-md-12">
                  <label for="inputCount">Количество животных</label>
                  <input type="number" name="count" class="form-control form-control-lg" id="inputCount" required>
                </div>

            </div>             

            
            <div class="row" style="margin-top: 30px;"> 

                <div class="form-group col-md-12">
                    <label for="exampleInputFile">Выбрать фотографию</label>
                    <input type="file" name="photo" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" required>
                </div>

            </div>
            

        </fieldset>                

            </div>    

            <div class="col-md-6">

                <div id="map"></div>            

                <p id="adress" style="margin-top: 15px;"><strong>Подождите... Определяем ваше месторасположения...</strong></p>
                
            </div>    

        </div>    
         

            <div class="row" style="margin-top: 30px;">                

                <div class="form-group col-md-12">

                    <button type="submit" class="btn btn-success">Сообщить</button>                    

                </div>   

            </div>         
        
    </form>    

</div>        