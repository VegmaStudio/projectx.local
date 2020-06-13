<?php

/*
 * 
 * Author: Prikazchikov Alex, 
 *         Oleg Vegera. Vegma studio.
 *          
 *         2020  
 * 
 */

declare(strict_types=1);

class ThemselvesController extends ControllerBase
{
    
    public function initialize() {
        parent::initialize();
    }

    public function indexAction()
    {

        $this->titlePage = 'Гулют сами по себе, могут быть опасны!';
        $this->ConstructView();
        
    }
    
    public function requiestAction() 
    {
        
        
        
    }

}
