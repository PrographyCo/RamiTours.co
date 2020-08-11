<?php


namespace MVC\Models;


class DataModel extends AbstractModel
{
    public $id;
    public $link;

    public static $db;
    protected static $primaryKey = 'id';

    protected static $tableName = 'extra';
    protected static $tableSchema = array(
        'link'=> self::DATA_TYPE_STR
    );

    public function getData(){
        return array(
            'id' => $this->id,
            'link' => $this->link
        );
    }
}