<?php

namespace MVC\Controllers;

use MVC\LIB\FrontController;
use MVC\LIB\Helper;
use MVC\Models\AboutModel;
use MVC\Models\AbstractModel;
use MVC\Models\Comment;
use MVC\Models\DataModel;
use MVC\Models\UserModel;

class AboutController extends AbstractController
{
    use Helper;

    public function defaultAction(){
        $this->_lang->load('about.default');
        $this->_data['images'] = AboutModel::getAll();
        $this->_data['count'] = count($this->_data['images']);

        $this->_data['phone'] = DataModel::getByPK('whatsapp');
        $this->_data['face'] = DataModel::getByPK('facebook');
        $this->_data['link'] = DataModel::getByPK('link');
        $this->_data['controller'] = FrontController::$controller;

        echo $this->_view();
    }

    public function dataAction(){
        if (isset($_SESSION['message'])){
            echo '<div style="width: 100%; height: 100%; position:fixed; top: 0; left: 0; z-index: 9999; backdrop-filter: blur(15px);" id="message">
                        <div style="position: fixed; top: 20%; left: 20%; color: black; font-size: 20px; height: 60%; width: 60%; background: white; border-radius: 15px; display: flex; justify-content: center; align-items: center;">
                            <p>'.$_SESSION['message'].'</p>
                        </div>
                  </div>';

            unset($_SESSION['message']);
        }
        $this->_lang->load('about.default');
        $this->_data['image'] = AboutModel::getByPK($this->_params[0]);
        $this->_data['comments'] = AbstractModel::get('SELECT comment FROM comments WHERE star="y" AND img="'.$this->_params[0].'" ORDER BY id DESC LIMIT 2');

        $this->_data['phone'] = DataModel::getByPK('whatsapp');
        $this->_data['face'] = DataModel::getByPK('facebook');
        $this->_data['link'] = DataModel::getByPK('link');
        $this->_data['controller'] = FrontController::$controller;
        $this->_data['img'] = $this->_params[0];

        echo $this->_view();
    }

    public function addAction(){
        if (!isset($_POST['name']) || !isset($_POST['email'])){
            $this->redirect($_SERVER['HTTP_REFERER']);
        }

        $name = addslashes(strip_tags(htmlentities($_POST['name'])));
        $email =addslashes(strip_tags(htmlentities($_POST['email'])));
        $comment =addslashes(strip_tags(htmlentities($_POST['comment'])));
        $id = addslashes(strip_tags(htmlentities(filter_var($_POST['id'] , FILTER_SANITIZE_NUMBER_INT) )));

        $usr = new UserModel();
        $usr->name = $name;
        $usr->email = $email;

        $usr->save();

        $comm = new Comment();
        $comm->userId = $usr->id;
        $comm->comment = $comment;
        $comm->img = $id;

        $comm->save();


        $_SESSION['message'] = 'Your Comment Sent Successfully';

        $this->redirect($_SERVER['HTTP_REFERER']);
    }
}