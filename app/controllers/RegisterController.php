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

class RegisterController extends ControllerBase {

    protected $reg_error;

    public function initialize() {
        parent::initialize();
    }

    public function ConstructView() {

        $this->view->regError = $this->reg_error;
    }

    protected function ValidPost($User) {

        $this->reg_error = [];

        if ($User->name == '') {

            $this->reg_error['name'] = 'Вы не ввели имя';
        }

        if ($User->surname == '') {

            $this->reg_error['surname'] = 'Вы не ввели фамилию';
        }

        if ($User->email == '') {

            $this->reg_error['email'] = 'Вы не ввели email';
        }

        if ($this->request->getPost('city') == '') {

            $this->reg_error['city'] = 'Вы не указали город';
        }

        if ($User->pass == '') {

            $this->reg_error['pass'] = 'Вы не ввели пароль';
        } elseif ($User->pass != $this->request->getPost('pass2')) {

            $this->reg_error['pass2'] = 'Пароли не совпадают';
        }
    }

    protected function ConstructUserDataView($name, $surname, $city, $email) {

        $this->view->userName = $name;
        $this->view->userSurname = $surname;
        $this->view->userCity = $city;
        $this->view->userEmail = $email;
    }

    protected function RegisterErrors() {

        $this->ConstructView();
    }

    protected function StartSessionFrom() {

        $this->session->set('userName', $User->name);
        $this->session->set('userSurname', $User->surname);
        $this->session->set('userEmail', $User->email);
        $this->session->set('from', 'register');
    }

    public function indexAction() {

        $this->titlePage = 'регистрация на Верном друге';

        if ($this->request->isPost()) {

            $User = new Users();

            $User->pass = $this->request->getPost('pass');
            $User->name = $this->request->getPost('name');
            $User->surname = $this->request->getPost('surname');
            $User->patronumic = $this->request->getPost('patronumic');
            $User->email = $this->request->getPost('email');

            $this->ValidPost($User);

            if (sizeof($this->reg_error) == 0) {

                $userCity = City::findByName($this->request->getPost('city'));

                $User->pass = md5(sha1($User->pass) . 'my_best_irina');
                $User->id_town = $userCity->id_city;

                $User->save();

                $this->StartSessionFrom();

                $this->response->redirect("/login");
                return;
            } else {

                $this->ConstructUserDataView($User->name, $User->surname, $this->request->getPost('city'), $User->email);

                $this->titlePage = 'Ошибка в регистрации на Верном друге';
                $this->ConstructView();
            }
        } else {

            $this->ConstructUserDataView('', '', '', '', '');
        }

        parent::ConstructView();
    }

}
