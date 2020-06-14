<div class="container container-my" style="padding-top: 20px; margin-bottom: 50px;">

    <div class="row">

        <div class="col-md-6">

            <h1>Карточка животного - {{ animal.nickname }} <br /><small class="text-muted">{{ codeAnimal }}</small></h1>

        </div>
        <div class="col-md-6">

            

        </div>        

    </div>
</div>    

<div class="container container-my" style="margin-bottom: 30px;"> 

    <div class="row">

        <div class="col-md-2 col-sm-6 text-center">
            
            <img src="{{ animal.photo_file }}" class="animal_avatar" alt="" title="" />
            
        </div>
            
        <div class="col-md-10 text-right">    
            
            <div class="row">
                
                <div class="col-md-4">
                    
                    <a href="/profile/animal/{{ animal.id }}?status=2" type="button" class="btn btn-primary">Потерялся</a>
                    
                </div>
                
            </div>    
            
        <div>    
        
    </div>    

</div> 


<div class="container container-my" style="margin-bottom: 50px;"> 

    <div class="row">

        <div class="col-md-12">
            
            <h2>Журнал учёта и перемещения</h2>
            
        </div>    
        
        
        
    </div>    

</div>