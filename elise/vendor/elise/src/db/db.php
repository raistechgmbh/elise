<?php

namespace Elise;

use \PDO;

class Db extends Config{

      static public $pdo;

      function __construct()
      {

        $i = 0;

        self::dbAccessData();

        foreach(self::$dbuserlabel as $dbarray){

          self::$pdo[$i] = new PDO(

              "mysql:host=" . self::$dbhost[$i] . ";dbname=" . self::$dbname[$i],
              self::$dbuser[$i],
              self::$dbpass[$i],
              [
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
              ]

          );

          $i++;

        }


      }

}
