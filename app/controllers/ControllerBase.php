<?php

/*
 * 
 * Author: Prikazchikov Alex, 
 *         Oleg Vegera. Vegma studio.
 *          
 *         2020  
 * 
 */

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    public $titlePage;
    public $userId = 0;
    public $userName = '';
    public $userSurname = '';
    private $userAuth;

    public function initialize() {
        
        if ( $this->session->has('userAuth') ) {
            
            $this->userAuth = true;
            $this->userName = $this->session->get('userName');
            $this->userSurname = $this->session->get('userSurname');
            $this->userId = $this->session->get('userId');            
            $this->view->userAuth = true;
            
        } else {
            
            $this->userAuth = false;
            $this->view->userAuth = false;            

        }
        
        $this->titlePage = 'Мы в ответе за тех, кого приручили';
        
    }

    protected function GetUserAuth() {
        
        return $this->userAuth;
        
    }
    
    protected function RegisterAnimalEvents( $params ) {
        
        $RegisterEvents = new AnimalsJournal();

        $RegisterEvents->id_animal = $params['animal'];
        $RegisterEvents->id_events = $params['id_events'];
        $RegisterEvents->id_organization = $params['id_org'];
        $RegisterEvents->id_users = $this->userId;
        $RegisterEvents->date_start = $params['date_start'];
        $RegisterEvents->date_end = $params['date_end'];

        $RegisterEvents->save();
        
    }
    
    protected function ImageUpload( $name, $width, $height, $resize = false, $crop = false ) {
        
        
        
    }


    protected function ConstructView() {
        
        $this->view->titlePage = $this->titlePage;
        $this->view->userName = $this->userName;
        $this->view->userId = $this->userId;
        $this->view->userSurname = $this->userSurname;
        
        $this->view->newYear = date('Y');
        
    }
    
}