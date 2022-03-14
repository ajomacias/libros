<?php

namespace models;

use PDO;

class Libro extends \database\Conexion{

    protected static $table = "libr0s";
   
    public static function finfAll()
    {
        $query = "select * from".static::$table.";";
        $db = static::getDB();
        $stmt = $db->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function findById($id)
    {
        $db = static::getDB();
        $query = "select * from ".static::$table." where id={$id};";
        $stmt = $db->query($query);

        return $stmt->fetch(PDO::FETCH_LAZY);

    }

    public static function save($data)
    {
        $db = static::getDB();
        $query = "insert into ".static::$table." values({$data});";
        $db->query($query);
    }

    public static function update($id,$data)
    {
        $db = static::getDB();
        $query = "update ".static::$table." set {$data} where id={$id}";
        $db->query($query);
    }

}

?>