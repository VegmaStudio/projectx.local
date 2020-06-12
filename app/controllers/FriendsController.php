<?php
declare(strict_types=1);

class FriendsController extends ControllerBase
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

        $this->titlePage = 'Мои друзья';
        $this->ConstructView();
        
    }
    
}

