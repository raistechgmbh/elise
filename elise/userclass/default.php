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
  public $disableclientcache = false;
  public $output;


  public function generateView()
  {

    $array["return"] = false;
    $array["result"] = false;

    $this->output = json_encode((object)$array);

  }


}
