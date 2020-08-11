<?php


namespace MVC\Models;


use MVC\Lib\Database\DatabaseHandler;

class Visitor extends AbstractModel
{
    protected $date;
    protected $elink;

    public static $db;
    protected static $primaryKey = 'id';

    protected static $tableName = 'visitors';
    protected static $tableSchema = array(
        'data' => self::DATA_TYPE_STR,
        'elink' => self::DATA_TYPE_STR
    );

    public function __construct()
    {
        $this->date = date('Y-m-d');
        $this->elink = (isset($_SERVER['HTTP_REFERER']))? 'y':'n';

        $stmt = DatabaseHandler::factory()->prepare('INSERT INTO visitors(date,elink) VALUES("'.$this->date.'","'.$this->elink.'")');

        $stmt->execute();
    }

}