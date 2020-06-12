<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    public $titlePage;
    public $userName = '';
    public $userSurname = '';
    private $userAuth;

    public function initialize() {
        
        if ( $this->session->has('userAuth') ) {
            
            $this->userAuth = true;
            $this->userName = $this->session->get('userName');
            $this->userSurname = $this->session->get('userSurname');
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
    
    protected function ConstructView() {
        
        $this->view->titlePage = $this->titlePage;
        $this->view->userName = $this->userName;
        $this->view->userSurname = $this->userSurname;
        
    }
    
}