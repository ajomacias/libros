<?php

namespace database;

use Config , PDO;

abstract class Conexion{

   protected static function getDB()
   {
       static $db = null;

       if($db === null){
        $db = new PDO("mysql:host=".Config::DB_HOST.";dbname=".Config::DB,Config::DB_USER,Config::DB_PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       }

       return $db;
       
   }

}