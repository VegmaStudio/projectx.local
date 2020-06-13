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

class IndexController extends ControllerBase
{

    public function initialize() {
        
        parent::initialize();
        
    }

    public function indexAction()
    {
        
        if ( $this->request->has('ismobile') ) {
            
            if ( $this->request->get('ismobile') == 'yes' ) {
                
                $this->ismobile = true;
                $this->session->set('ismobile', true);
                
            }
            
        }
        
        $this->ConstructView();
        
    }

}

