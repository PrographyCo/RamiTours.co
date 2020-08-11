<?php
namespace MVC\LIB;


trait InputFilter
{
    public function filterInt($input){
        return filter_var($input, FILTER_SANITIZE_NUMBER_INT);
    }

    public function filterFloat($input){
        return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION);
    }

    public function filterStr($input){
        return htmlentities(strip_tags($input), ENT_QUOTES,"UTF-8");
    }
}