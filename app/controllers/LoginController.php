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

class LoginController extends ControllerBase {

    public function initialize() {
        parent::initialize();
    }

    public function ValidPostData() {

        if (( $this->request->getPost('email') == '' ) || ( $this->request->getPost('pass') == '' )) {

            return false;
        }

        return true;
    }

    protected function ShowErrorLogin() {

        if ($this->view->helloText != '') {

            $this->view->errorText = '<p class="text-danger">' . $this->session->get('userName') . ' e-mail или пароль не верный.</p>';
        } else {

            $this->view->errorText = '<p class="text-danger">E-mail или пароль не верный.</p>';
        }
    }

    public function indexAction() {

        $this->view->errorText = '';
        $this->view->userEmail = '';
        $this->view->helloText = '';

        if ($this->session->has('from')) {

            if ($this->session->get('from') == 'register') {

                $this->view->helloText = '<p class="text-primary">' . $this->session->get('userName') . ' мы рады, что Вы с нами. Используйте данные, указанные при регистрации, для входа.</p>';
                $this->view->userEmail = $this->session->get('userEmail');
            }
        }

        if ($this->request->isPost()) {

            $this->view->userEmail = $this->request->getPost('email');

            if ($this->ValidPostData()) {

                $User = Users::findFirst([
                            'conditions' => 'email = :email: and pass = :pass:',
                            'bind' => [
                                'email' => $this->request->getPost('email'),
                                'pass' => md5(sha1($this->request->getPost('pass')) . 'my_best_irina')
                            ]
                ]);

                if ($User !== false) {

                    $this->session->set('userAuth', 1);
                    $this->session->set('userName', $User->name);
                    $this->session->set('userSurname', $User->surname);
                    $this->session->set('userEmail', $User->email);
                    $this->response->redirect('/profile');
                    return;
                    
                } else {

                    $this->ShowErrorLogin();
                }
            } else {

                $this->ShowErrorLogin();
            }
        }

        $this->titlePage = 'Авторизация в Верном друге';

        $this->ConstructView();
    }

}
