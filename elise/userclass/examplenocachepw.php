<?php

namespace Elise\Viewer;

use Elise\DbQuery\SingleReturn;
use Elise\DbQuery\MultiReturn;
use Elise\Config;
use Elise\Controller;

class DataViewer{

  public $caching = false;
  public $cachevalidity = 0;
  public $contenttype = 'application/json';
  public $charset = 'utf-8';
  public $alloworigin = '*';
  public $allowmethods = 'POST, GET';
  public $disableclientcache = true;
  public $options = "";
  public $optionsallowed = ['status'];
  public $password = "password";
  public $output;


  public function generateView()
  {

    if(isset($_GET["message"])){ $message = preg_replace('/[^0-9A-Za-z]/', '', $_GET["message"]); }
    $array["result"] = false;

    
    if(isset($message)){

      $array["result"] = [

        "time" => date("d.m.Y H:i:s"),
        "message" => $message

      ];

    }

    $this->output = json_encode((object)$array);

  }


}
