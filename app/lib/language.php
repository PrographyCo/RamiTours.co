<?php


namespace MVC\LIB;


class Language
{
    private $_dictionary = [];

    public function load($path){
        $defaultlanguage = DEFAULT_LANG;
        if(isset($_SESSION['lang'])){
            $defaultlanguage = $_SESSION['lang'];
        }
        $langpath = LANG_PATH . $defaultlanguage . DS . str_replace('.', DS, $path) . '.lang.php';

        if (file_exists($langpath)){
            require_once $langpath;

            if (is_array($_) && !empty($_)){
                foreach ($_ as $key => $value){
                    $this->_dictionary[$key] = $value;
                }
            }
        }else{
            trigger_error('Sorry The Language File Does Not Exist',E_USER_WARNING);
        }
    }

    public function get(){
        return $this->_dictionary;
    }
}