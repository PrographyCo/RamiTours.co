<?php


namespace MVC\Controllers;


use MVC\LIB\Helper;

class LanguageController extends AbstractController
{
    use Helper;
    public function defaultAction(){
        $_SESSION['lang'] = 'ar';

        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function enAction(){
        $_SESSION['lang'] = 'en';

        $this->redirect($_SERVER['HTTP_REFERER']);
    }
}