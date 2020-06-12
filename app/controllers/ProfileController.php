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

class ProfileController extends ControllerBase
{

    public function initialize() {
        parent::initialize();
        
        if ( !$this->GetUserAuth() ) {
            
            $this->response->redirect('/login');
            $this->session->destroy();
            return;
            
        }
        
    }    
    
    public function indexAction()
    {

        $this->titlePage = $this->userName.' '.$this->userSurname.' на Верном друге';
        $this->ConstructView();
        
    }
    
    public function animaladdAction() {
        
        $this->titlePage = 'Регистрация питомца';
        $this->ConstructView();        
        
    }
    
    public function pageAction( $id ) {
        
        
        
    }

}