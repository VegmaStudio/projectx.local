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
                
                <div class="col-md-12">
                    
                    <a href="/profile/animal/{{ animal.id }}?status=2" type="button" class="btn btn-primary">Потерялся</a>
                    
                </div>
                
            </div>    
            
        <div>    
        
    </div>    

</div> 


<div class="container container-my" style="margin-top: 50px;"> 

    <div class="row">

        <div class="col-md-12">
            
            <h2>Журнал учёта и перемещения</h2>
            
        </div>    
       
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
    </tr>
  </thead>        
        
                        {% for v_journal in journal %}

  <tbody>
    <tr class="table-active">
      <th scope="row">Active</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr>
      <th scope="row">Default</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-primary">
      <th scope="row">Primary</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-secondary">
      <th scope="row">Secondary</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-success">
      <th scope="row">Success</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-danger">
      <th scope="row">Danger</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-warning">
      <th scope="row">Warning</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-info">
      <th scope="row">Info</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-light">
      <th scope="row">Light</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
    <tr class="table-dark">
      <th scope="row">Dark</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
  </tbody>
</table>                    
                
                {% endfor %}
        
        
        
    </div>    

</div>