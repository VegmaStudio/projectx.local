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
            $Animals->id_species = Species::findByName( $this->request->getPost('poroda') , $kind);
            $Animals->id_color = $this->request->getPost('id_color');
            $Animals->nickname = $this->request->getPost('name');
            $Animals->about = $this->request->getPost('sex');
            
            $Animals->about = $this->request->getPost('dateburn');            

            $files = $this->request->getUploadedFiles();
            
            foreach ($files as $u_file) {
                
                $fileName = BASE_PATH.'/public/img/animals/'.sha1().'jpg';
                
                $u_file->moveTo( $fileName);
                
                $Photo = new Photos();
                $Photo->file = '/public/img/animals/'.sha1().'jpg';
                $Photo->title = 'test';
                $Photo->about = 'test';
                $Photo->save();
                
            }
            
            $Animals->id_photo = $Photo->id;
            
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