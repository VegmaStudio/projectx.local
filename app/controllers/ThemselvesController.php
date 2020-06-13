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

class ThemselvesController extends ControllerBase
{
    
    public function initialize() {
        parent::initialize();
    }

    public function indexAction()
    {

        $this->titlePage = 'Гулют сами по себе, могут быть опасны!';
        $this->ConstructView();
        
    }
    
    public function requiestAction() 
    {
        
        $this->view->isPost = false;
        
        $this->titlePage = 'Сообщить о безнадзорном животном';
        
        if ( $this->request->isPost() ) {
            
            $req = new Themselves();
            
            $req->about = $this->request->getPost('about');
            $req->count = $this->request->getPost('count');
            $req->data = date("Y-m-d H:i:m");
            $req->adress = $this->request->getPost('adress');

            if ( $this->userId != 0 ) {
                
                $req->id_user = $this->userId;
                $req->fio = $this->userName." ".$this->userSurname;
                $req->tel = '123123123';
                
            } else {
                
                $req->id_user = 0;
                $req->fio = $this->request->getPost('name');
                $req->tel = $this->request->getPost('tel');
                
            }
            
            $req->show = 0;
            $req->read = 0;
            
            $image_result = $this->ImageUpload('photo', 1000, 1000, true, true);

            if (is_array($image_result)) {

                $req->id_photo = $image_result['id'];
                $req->file_photo = $image_result['name'];
            }            
            
            $this->titlePage = 'Спасибо, ваша заявка принята';
            
            $req->save();

            $this->view->isPost = true;
            
        }
        
        $this->ConstructView();        
        
    }

}
