<?php

namespace App\Controllers;

use App\Core\Controller;

class MainController extends Controller
{
    public function indexAction() {
        $result = $this->model->getRealties();

        $this->view->render('Main page', [ 'realties' => $result ]);
        // echo 'Main page';
    }

    public function showAction() {
        $result = $this->model->getRealtyById(1);

        $this->view->render('Main page', [ 'realty' => $result ]);
    }

    public function loginAction() {

        $this->view->render('Main page');
        // echo 'Main page';
    }

    public function logoutAction() {

        $this->view->render('Main page');
        // echo 'Main page';
    }

    public function registerAction() {

        $this->view->render('Main page');
        // echo 'Main page';
    }
}
