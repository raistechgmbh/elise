<?php

namespace Elise\DbQuery;

use \Elise\Config;
use \Elise\Db;
use \stdClass;

class MultiReturn{

    public $dbdata;

    function __construct(string $sql, array $params = [], int $server = 0)
    {

      $this->dbdata = new stdClass();
      $this->dbdata->result_userlabel = Db::$dbuserlabel[$server];
      $this->dbdata->result_database = Db::$dbname[$server];

      $i=0;

      $statement = Db::$pdo[$server]->prepare($sql);
      $statement->execute($params);

      while($dbdata = $statement->fetch()){

        $this->dbdata->result->{$i} = (object)$dbdata;

        $i++;
      }

      $this->dbdata->mysqlerror = $statement->errorInfo();

      
    }


}
