<?php


namespace MVC\Models;


class Comment extends AbstractModel
{
    public $id;
    public $userId;
    public $comment;
    public $img;

    public static $db;
    protected static $primaryKey = 'id';

    protected static $tableName = 'comments';
    protected static $tableSchema = array(
        'userId' => self::DATA_TYPE_INT,
        'comment' => self::DATA_TYPE_STR,
        'img' => self::DATA_TYPE_INT
    );
}