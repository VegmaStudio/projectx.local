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
            
            $Animals = new Animals();
            
            $Animals->id_kind = $this->request->getPost('kind');
            $Animals->id_species = Species::findByName( $this->request->getPost('poroda') , $Animals->id_kind )->id;
            $Animals->id_color = $this->request->getPost('color');
            $Animals->nickname = $this->request->getPost('name');
            $Animals->sex = $this->request->getPost('sex');
            $Animals->about = $this->request->getPost('about');
            
            $Animals->date_burn = $this->request->getPost('dateBurn');            
           
            $Animals->save();
            
            $this->response->redirect('/profile/animals/'.$Animals->id);
            return;
            
        }
        
        $this->ConstructView();        
        
    }
    
    public function pageAction( $id ) {
        
        $this->titlePage = $this->userName.' '.$this->userSurname;
        $this->ConstructView();         
        
    }

}