<?php

namespace MVC\Controllers;

use MVC\LIB\FrontController;
use MVC\Models\AbstractModel;
use MVC\Models\DataModel;

class ContactController extends AbstractController
{
    public function defaultAction(){
        if (isset($_SESSION['message'])){
            echo '<div style="width: 100%; height: 100%; position:fixed; top: 0; left: 0; z-index: 9999; backdrop-filter: blur(15px);" id="message">
                        <div style="position: fixed; top: 20%; left: 20%; color: black; font-size: 20px; height: 60%; width: 60%; background: white; border-radius: 15px; display: flex; justify-content: center; align-items: center;">
                            <p>'.$_SESSION['message'].'</p>
                        </div>
                  </div>';

            unset($_SESSION['message']);
        }

        $this->_lang->load('contact.default');

        $this->_data['phone'] = DataModel::getByPK('whatsapp');
        $this->_data['face_link'] = DataModel::getByPK('facebook');
        $this->_data['link'] = DataModel::getByPK('link');
        $this->_data['controller'] = FrontController::$controller;

        echo $this->_view();
    }

}