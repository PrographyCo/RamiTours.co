<?php

namespace MVC\Controllers;

use MVC\LIB\FrontController;
use MVC\Models\DataModel;

class ServicesController extends AbstractController
{
    public function defaultAction(){
        $this->_lang->load('services.default');

        $this->_data['phone'] = DataModel::getByPK('whatsapp');
        $this->_data['face'] = DataModel::getByPK('facebook');
        $this->_data['link'] = DataModel::getByPK('link');
        $this->_data['services'] = DataModel::getByPK('serv');
        $this->_data['controller'] = FrontController::$controller;

        echo $this->_view();
    }
}