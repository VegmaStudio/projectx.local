<div class="container container-my" style="padding-top: 60px; padding-bottom: 40px;">

    <div class="row">

        <div class="col-md-12">

            <h1 style="margin-top: 0; padding-top: 0;">Сообщить о безнадзорном животном</h1>

        </div>        

    </div>
</div>

<hr /> 
<div class="container container-my" style="margin-bottom: 30px;"> 

    <div class="row">
    
    <div class="col-md-6">
        
        {% if (userId == 0) %}
        
        <p class="lead">Вы не авторизованы. Представьтесь и оставьте свои контактные данные.</p>
        
        {% else %}
        
        {{  }} {{  }}
        
        {% endif %}
        
    </div>    
    
    <div class="col-md-6">
        
<div id="map"></div>            
        
    </div>    
        
    </div>    

</div>        