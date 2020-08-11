<?php


namespace MVC\Models;


class UserModel extends AbstractModel
{
    public $id;
    public $name;
    public $email;

    public static $db;
    protected static $primaryKey = 'id';

    protected static $tableName = 'users';
    protected static $tableSchema = array(
        'name' => self::DATA_TYPE_STR,
        'email' => self::DATA_TYPE_STR
    );
}