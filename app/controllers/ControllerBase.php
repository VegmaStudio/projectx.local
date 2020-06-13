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

class ControllerBase extends Controller {

    public $titlePage;
    public $userId = 0;
    public $userName = '';
    public $userSurname = '';
    private $userAuth;

    public function initialize() {

        if ($this->session->has('userAuth')) {

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

    protected function RegisterAnimalEvents($params) {

        $RegisterEvents = new AnimalsJournal();

        $RegisterEvents->id_animal = $params['animal'];
        $RegisterEvents->id_events = $params['id_events'];
        $RegisterEvents->id_organization = $params['id_org'];
        $RegisterEvents->id_users = $this->userId;
        $RegisterEvents->date_start = $params['date_start'];
        $RegisterEvents->date_end = $params['date_end'];

        $RegisterEvents->save();
    }

    protected function ImageUpload($name, $width, $height = 0, $resize = false, $crop = false) {

        if (isset($_FILES[$name])) {

            $foo = new Upload($_FILES[$name]);

            if ($foo->uploaded) {

                $foo->process(BASE_PATH . '/public/temp/');

                $foo->file_new_name_body = sha1(time() . $width);
                $foo->image_resize = $resize;
                $foo->image_ratio_crop = $crop;
                $foo->image_x = $width;

                if ( $height == 0 ) {

                    $foo->image_ratio_y = true;
                } else {
                    
                    $foo->image_y = $height;
                    
                }

                $foo->image_unsharp         = true;
                $foo->image_unsharp_amount  = 70;
                $foo->image_unsharp_radius  = 1;
                $foo->image_unsharp_threshold = 2;                
                
                $image_name = '/public/img/users/id' . $this->userId . '/'.$foo->file_new_name_body.'.jpg';
                
                $foo->process($image_name);
                if ($foo->processed) {
                    $foo->clean();
                } else {
                    
                }
            }
        }

        if ($image_name != '') {

            $Photo = new Photos();

            $Photo->file = $image_name;
            $Photo->id_user = $this->userId;
            $Photo->Save();

            return [
                'name' => $image_name,
                'id' => $Photo->id
            ];
            
        } else {

            return 0;
            
        }
    }

    protected function ConstructView() {

        $this->view->titlePage = $this->titlePage;
        $this->view->userName = $this->userName;
        $this->view->userId = $this->userId;
        $this->view->userSurname = $this->userSurname;

        $this->view->newYear = date('Y');
    }

}
