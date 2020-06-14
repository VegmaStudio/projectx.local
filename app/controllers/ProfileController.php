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

class ProfileController extends ControllerBase {

    public function initialize() {
        parent::initialize();

        if (!$this->GetUserAuth()) {

            if ($this->request->has('from')) {

                if ($this->request->get('from') == 'find') {

                    $this->response->redirect('/login?from=find');
                        
                }
            } else {

                    $this->response->redirect('/login');
                    
            }

            $this->session->destroy();
            return;
        }
    }

    public function indexAction() {

        $this->titlePage = 'Профиль на Верном друге';
        $this->ConstructView();
    }

    public function animalsAction() {

     //   $this->view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_NO_RENDER);  
        
        $my_animals = $this->modelsManager->executeQuery("SELECT * FROM Animals WHERE id_user = :user:", array(
                'user' => $this->userId
            ));
        
        if ( count($my_animals) == 0 ) {
            
            $this->view->showAnimals = 0;
            
        } else {

            
            $this->view->showAnimals = 1;           
            
        }
        
        $this->titlePage = 'Мои питомцы';
        $this->view->myAnimals = $my_animals;

        $this->ConstructView();
    }

    public function animalAction($id) {

        $Animal = Animals::findFirst($id);        
        
        if ( $this->request->has('status') ) {
            
            $Animal->status = $this->request->get('status');
            $Animal->save();
        }

            $this->RegisterAnimalEvents([
                'animal' => $Animals->id,
                'id_events' => 2,
                'id_org' => 0,
                'date_start' => date("Y-m-d H:i:m"),
                'date_end' => date("Y-m-d H:i:m")
            ]);        

        $this->view->codeAnimal = $this->getUnicCode($Animal);
        $this->view->animal = $Animal;
        
        $this->view->journal = $this->modelsManager->executeQuery("SELECT * FROM AnimalsJournal WHERE id_animal = :id_animal:", array(
                'id_animal' => $Animal->id
            ));
        
        $this->titlePage = $this->view->codeAnimal . ' | ' . $Animal->nickname;

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

        if ($this->request->isPost()) {

            $Animals = new Animals();

            $Animals->id_kind = $this->request->getPost('kind');
            $Animals->id_species = Species::findByName($this->request->getPost('poroda'), $Animals->id_kind)->id;
            $Animals->id_color = $this->request->getPost('color');
            $Animals->nickname = $this->request->getPost('name');
            $Animals->sex = $this->request->getPost('sex');
            $Animals->about = $this->request->getPost('about');

            $Animals->id_user = $this->userId;
            $Animals->status = 1;

            $Animals->date_burn = $this->request->getPost('dateBurn');

            $image_result = $this->ImageUpload('photo', 1000, 1000, true, true);

            if (is_array($image_result)) {

                $Animals->id_photo = $image_result['id'];
                $Animals->photo_file = $image_result['name'];
            }

            $Animals->save();

            $this->RegisterAnimalEvents([
                'animal' => $Animals->id,
                'id_events' => 1,
                'id_org' => 0,
                'date_start' => date("Y-m-d H:i:m"),
                'date_end' => date("Y-m-d H:i:m")
            ]);

            $this->response->redirect('/profile/animal/' . $Animals->id);
            return;
        }

        $this->ConstructView();
    }

    public function pageAction($id) {

        $this->titlePage = $this->userName . ' ' . $this->userSurname;
        $this->ConstructView();
    }

}
