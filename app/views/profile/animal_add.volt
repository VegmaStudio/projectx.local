<form action="" method="post">

    <div class="container container-my" style="padding-top: 60px; padding-bottom: 40px;">

        <div class="row">

            <div class="col-md-4">

                <h1 style="margin-top: 0; padding-top: 0;">Регистрация питомца</h1>

            </div>        

        </div>
    </div>
    <hr />

    <div class="container container-my" style="padding-top: 60px; padding-bottom: 40px;">

        <input type="hidden" name="kind" id="kind-animal" />
        
        <fieldset>
            <legend style="margin-bottom: 50px;">Выберите вид питомца</legend>    

            <div class="row">

                <div class="col-md-2">

                    <a href="" class="set-kind-animal" rel="1">            
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="/public/img/kinds/cat.svg" style="width: 64px" />
                                <h5 class="card-title" style="margin-top: 20px;"><strong>Кошки</strong></h5>
                            </div>
                            <img src="/public/img/incons/yes.png" class="yes-kind" />
                        </div>   
                    </a>    

                </div>    
                <div class="col-md-2">

                    <a href="" class="set-kind-animal" rel="2">            
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="/public/img/kinds/hamster.svg" style="width: 64px" />
                                <h5 class="card-title" style="margin-top: 20px;"><strong>Хомяки</strong></h5>
                            </div>
                            <img src="/public/img/incons/yes.png" class="yes-kind" />                            
                        </div> 
                        
                    </a>       

                </div>
                <div class="col-md-2">

                    <a href="" class="set-kind-animal" rel="3">            
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="/public/img/kinds/dog.svg" style="width: 64px" />
                                <h5 class="card-title" style="margin-top: 20px;"><strong>Собаки</strong></h5>
                                <img src="/public/img/incons/yes.png" class="yes-kind" />                                
                            </div>
                        </div>    
                    </a>            

                </div>
                <div class="col-md-2">

                    <a href="" class="set-kind-animal" rel="4">            
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="/public/img/kinds/horse.svg" style="width: 64px" />
                                <h5 class="card-title" style="margin-top: 20px;"><strong>Лошади</strong></h5>
                            </div>
                            <img src="/public/img/incons/yes.png" class="yes-kind" />                            
                        </div>    
                    </a>            

                </div>
                <div class="col-md-2">

                    <a href="" class="set-kind-animal" rel="5">            
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="/public/img/kinds/rat.svg" style="width: 64px" />
                                <h5 class="card-title" style="margin-top: 20px;"><strong>Крысы</strong></h5>
                            </div>
                            <img src="/public/img/incons/yes.png" class="yes-kind" />                            
                        </div>   
                    </a>            

                </div>
                <div class="col-md-2">

                    <a href="" class="set-kind-animal" rel="6">            
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="/public/img/kinds/32.svg" style="width: 64px" />
                                <h5 class="card-title" style="margin-top: 20px;"><strong>Попугаи</strong></h5>
                            </div>
                            <img src="/public/img/incons/yes.png" class="yes-kind" />                            
                        </div>    
                    </a>            

                </div>

            </div> 
        </fieldset>        



    </div>    



    <hr />

    <div class="container container-my" style="margin-bottom: 30px;"> 

        <div class="row" style="margin-top: 30px;">

            <div class="form-group col-md-6">
                <label for="inputName">Кличка</label>
                <input type="text" name="name" class="form-control form-control-lg" id="inputName">
            </div>            

        </div>    
        <div class="row" style="margin-top: 30px;">

            <div class="form-group col-md-6">
                <label for="inputDateBurn">Дата рождения</label>
                <input type="text" name="dateBurn" class="form-control form-control-lg" id="inputDateBurn">
            </div>   

        </div>

        <fieldset style="margin-top: 50px;">    
            <legend>Укажите пол, породу и окрас</legend>

            <div class="row" style="margin-top: 30px;">

                <div class="form-group col-md-6">
                    <label for="inputSex">Пол</label>
                    <select class="form-control form-control-lg" name="sex" id="inputSex">
                        <option value="1">Мужской</option>
                        <option value="2">Женский</option>
                    </select>
                </div>            

            </div>    
            <div class="row" style="margin-top: 30px;">                

                <div class="form-group col-md-6">
                    <label for="inputPoroda">Порода</label>
                    <input type="text" name="poroda" class="form-control form-control-lg" id="inputPoroda">
                </div>

            </div>    
            <div class="row" style="margin-top: 30px;">                

                <div class="form-group col-md-6">
                    <label for="inputColor">Окрас</label>
                    <input type="text" name="dateBurn" class="form-control form-control-lg" id="inputColor">
                </div>   

            </div>     

            <div class="row" style="margin-top: 30px;">                

                <div class="form-group col-md-6">
                    <label for="inputColor">Окрас</label>
                    <input type="text" name="dateBurn" class="form-control form-control-lg" id="inputColor">
                </div>   

            </div> 

            
            <div class="row" style="margin-top: 30px;"> 

                <div class="form-group col-md-6">
                  <label for="exampleTextarea">Опишите дополнительно внешность, привычки</label>
                  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>

            </div>               
            
            <div class="row" style="margin-top: 30px;"> 

                <div class="form-group col-md-6">
                    <label for="exampleInputFile">Выбрать фотографию</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                </div>

            </div>
         

            <div class="row" style="margin-top: 30px;">                

                <div class="form-group col-md-6">

                    <button type="submit" class="btn btn-success">Занести в единую базу</button>                    

                </div>   

            </div>             

        </fieldset> 
    </div> 

</form>    