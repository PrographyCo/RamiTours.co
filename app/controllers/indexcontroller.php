<?php

namespace MVC\Controllers;

use MVC\LIB\FrontController;
use MVC\Models\DataModel;
use MVC\Models\Visitor;

class IndexController extends AbstractController
{
    public function defaultAction(){
        $ves = new Visitor();
        $this->_lang->load('index.default');

        $this->_data['phone'] = DataModel::getByPK('whatsapp');
        $this->_data['face'] = DataModel::getByPK('facebook');
        $this->_data['link'] = DataModel::getByPK('link');
        $this->_data['controller'] = FrontController::$controller;

        echo $this->_view();
    }
}