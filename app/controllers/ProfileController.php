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

        $this->titlePage = 'Профиль на Верном друге';
        $this->ConstructView();
        
    }

    public function animalsAction() {
        
        $this->titlePage = 'Мои питомцы';
        $this->ConstructView();        
        
    }
    
    public function favoriteAction() {
        
        $this->titlePage = 'Закладки';
        $this->ConstructView();        
        
    }    

    public function settingsAction() {
        
        $this->titlePage = 'Настройки';
        $this->ConstructView();        
        
    }
    
    public function animaladdAction() {
        
        $this->titlePage = 'Регистрация питомца';
        
        if ( $this->request->isPost() ) {
            
            
            
        }
        
        $this->ConstructView();        
        
    }
    
    public function pageAction( $id ) {
        
        $this->titlePage = $this->userName.' '.$this->userSurname;
        $this->ConstructView();         
        
    }

}