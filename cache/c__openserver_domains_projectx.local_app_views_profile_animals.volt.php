<div class="container container-my" style="padding-top: 20px; margin-bottom: 50px;">

    <div class="row">

        <div class="col-md-12">

            <h1><?= $userName ?> <?= $userSurname ?> | Мои питомцы</h1>

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

            <?php if (($showAnimals == 0)) { ?>

                <p class="text-muted">У вас нет зарегистрированных питомцев.</p>
            
            <?php } else { ?>    

            <div class="row">
            
                <?php foreach ($myAnimals as $animal) { ?>

                <div class="col-md-3">

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $animal->nickname ?></h5>
                                    <h6 class="card-subtitle text-muted"><strong>FN_UID: </strong>R56K<?= $animal->id_kind ?>S<?= $animal->id_species ?>Y<?php date('Y', $animal->date_burn)?><?= $animal->id ?></h6>
                                </div>
                                <a href="/profile/animal/<?= $animal->id ?>"><img style="width: 100%; display: block;" src="<?= $animal->photo_file ?>" alt="Card image" /></a>
                                <div class="card-footer text-muted">
                                    <a href="/profile/animal/<?= $animal->id ?>">Открыть карточку</a>
                                </div>
                            </div>            

                        </div>                     
                
                <?php } ?>
            
            </div>    
                
            <?php } ?>
            
        </div>    
        
    </div>    

</div> 