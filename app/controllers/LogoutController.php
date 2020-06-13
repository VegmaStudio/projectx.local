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

class LogoutController extends ControllerBase
{

    public function indexAction()
    {

        $saveparam = false;
        
        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);  
        
        if ( $this->session->has('ismobile') ) {
            
            $saveparam = true;
            
        }
        
        $this->session->destroy();
        
        $this->session->set('ismobile', true);
        
        $this->response->redirect('/');
        
        return;
        
    }

}

