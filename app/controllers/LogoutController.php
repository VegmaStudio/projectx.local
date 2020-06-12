<?php
declare(strict_types=1);

class LogoutController extends ControllerBase
{

    public function indexAction()
    {

        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);  
        
        $this->session->destroy();
        $this->response->redirect('/');
        
        return;
        
    }

}
