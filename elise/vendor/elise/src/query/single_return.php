<?php

namespace Elise\DbQuery;

use \Elise\Config;
use \Elise\Db;
use \stdClass;

class SingleReturn{

    public $dbdata;

    function __construct(string $sql, array $params = [], int $server = 0)
    {

      $this->dbdata = new stdClass();
      $this->dbdata->result_userlabel = Db::$dbuserlabel[$server];
      $this->dbdata->result_database = Db::$dbname[$server];

      $statement = Db::$pdo[$server]->prepare($sql);
      $statement->execute($params);

      if($dbdata = $statement->fetch()){

        $this->dbdata->result = (object)$dbdata;

      }

      $this->dbdata->mysqlerror = $statement->errorInfo();

      
    }


}
