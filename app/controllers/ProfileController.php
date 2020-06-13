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

            $this->response->redirect('/login');
            $this->session->destroy();
            return;
        }
    }

    public function indexAction() {

        $this->titlePage = 'Профиль на Верном друге';
        $this->ConstructView();
    }

    public function animalsAction() {

        $this->titlePage = 'Мои питомцы';

        $my_animals = Animals::find([
        ]);

        $this->ConstructView();
    }

    public function animalAction( $id ) {
        
        $Animal = Animals::findFirst( $id );
        
        print_r ( $Animal );

        $this->view->codeAnimal = $this->getUnicCode( $Animal );
        $this->view->animal = $Animal;
        
        $this->titlePage = $this->view->codeAnimal.' | '.$Animal->nickname;

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