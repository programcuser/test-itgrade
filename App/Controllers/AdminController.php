<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Realty;

class AdminController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->realtyModel = new Realty();
        $this->view->setLayout('admin');
    }

    public function indexAction() {
        $result = $this->realtyModel->getRealties();
        $this->view->render('Admin page', [ 'realties' => $result ]);
    }

    public function addAction() {
        if (!empty($_POST)) {
            if (!empty($_FILES['image']['tmp_name'])) {

            } else {
                echo 'Choose image file';
            }

        }
        $this->view->render('Добавить недвижимость');
    }

    public function editAction() {
        $this->view->render('Редактировать недвижимость');
    }

    public function deleteAction() {
        echo 'Admin page';
    }
}
