<?php


namespace MVC\LIB;


trait Helper
{
    public function redirect($page){
        session_write_close();
        header('Location: '.$page);
        exit();
    }
}