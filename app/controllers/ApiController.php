<?php

/*
 * 
 * Author: Prikazchikov Alex, 
 *         Oleg Vegera. Vegma studio.
 *          
 *         2020  
 * 
 */

declare(strict_types = 1);

class ApiController extends ControllerBase {

    public function indexAction() {
        
    }

    public function getTownAction() {

        $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);  
        
        if ($this->request->isAjax()) {

            $letter = $this->request->get('query');

            $Citis = $this->modelsManager->executeQuery("SELECT * FROM City WHERE id_region = 43 and name LIKE :name:", array(
                'name' => '%' . $letter . '%'
            ));

            $mas = array();

            foreach ($Citis as $str) {

                $mas[] = $str->name;
            }

            print (json_encode($mas));
        }
    }

}
