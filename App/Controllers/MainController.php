<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Realty;
use App\Models\User;

class MainController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->userModel = new User();
        $this->realtyModel = new Realty();
    }

    public function indexAction() {
        $result = $this->realtyModel->getRealties();

        $filtered = array_filter($result, fn($item) => $item['is_actual']);

        $this->view->render('Main page', [ 'realties' => $filtered ]);
        // echo 'Main page';
    }

    public function showAction() {
        $result = $this->realtyModel->getRealtyById(1);

        $this->view->render('Main page', [ 'realty' => $result ]);
    }

    public function loginAction() {
        if (isset($_SESSION['admin'])) {
            $this->view->redirect('/admin');
        }
        if (isset($_SESSION['user'])) {
            $this->view->redirect('/');
        }

        if (!empty($_POST)) {
            $user = $this->userModel->getUserByLogin($_POST['login']);
    
            if (password_verify($_POST['password'], $user['password_hash'])) {
                echo "You are loginned";
                if ($user['role'] === 'admin') {
                    $_SESSION['admin']['id'] = $user['id'];
                    $this->view->redirect('/admin');
                } elseif ($user['role'] === 'user') {
                    $_SESSION['authorize']['id'] = $user['id'];
                    $this->view->redirect('/');
                } else {
                    echo "Role does not exist";
                }
            } else {
                echo "Wrong password";
            }
        }

        $this->view->render('Main page');
        // echo 'Main page';
    }

    public function logoutAction() {
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }

        $this->view->redirect('/');
        // echo 'Main page';
    }

    public function registerAction() {
        if (isset($_SESSION['admin'])) {
            $this->view->redirect('/admin');
        }
        if (isset($_SESSION['user'])) {
            $this->view->redirect('/');
        }

        $this->view->render('Main page');
        // echo 'Main page';
    }
}
