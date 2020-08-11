<?php


namespace MVC\Models;


class AboutModel extends AbstractModel
{
    public $id;
    public $ename;
    public $aname;
    public $edetails;
    public $adetails;
    public $img;

    public static $db;
    protected static $primaryKey = 'id';

    protected static $tableName = 'images';
    protected static $tableSchema = array(
        'ename' => self::DATA_TYPE_STR,
        'aname' => self::DATA_TYPE_STR,
        'edetails' => self::DATA_TYPE_STR,
        'adetails' => self::DATA_TYPE_STR,
        'img' => self::DATA_TYPE_STR
    );

    public function getData(){
        return array(
            'id' => $this->id,
            'ename' => $this->ename,
            'aname' => $this->aname,
            'edetails' => $this->edetails,
            'adetails' => $this->adetails,
            'img' => $this->img8
        );
    }
}