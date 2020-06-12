<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{

    public function initialize() {
        
        parent::initialize();
        
    }

    public function indexAction()
    {

        $this->ConstructView();
        
    }

}

