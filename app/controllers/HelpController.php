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

class HelpController extends ControllerBase
{

    public function initialize() {
        parent::initialize();
    }

    public function indexAction()
    {

        $this->titlePage = 'Помочь животным';
        $this->ConstructView();
        
    }

}

