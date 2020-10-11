<?php

namespace Elise\Viewer;

use Elise\DbQuery\SingleReturn;
use Elise\DbQuery\MultiReturn;
use Elise\Config;
use Elise\Controller;

class DataViewer{

  public $caching = true;
  public $cachevalidity = 120;
  public $contenttype = 'application/json';
  public $charset = 'utf-8';
  public $alloworigin = '*';
  public $allowmethods = 'POST, GET';
  public $disableclientcache = true;
  public $output;


  public function generateView()
  {

    $array["return"][] = [

        'API-Rubrik' => 'BEISPIELRUBRIK',
        'APIs' => [

          [

	    'start' => '---------------------------------------',
            'description' => 'Beispieldescription',
            'url' => Config::$hostname . 'elise/examplecached/?message=',
            'GET' => 'message=[MESSAGE]',
            'userclass' => 'examplecached.php',
            'cache' => true,
            'end' => '---------------------------------------'

          ],

	  [

	    'start' => '---------------------------------------',
            'description' => 'Beispieldescription mit Passwort',
            'NOTICE' => 'PASSWORD REQUIRED',
            'url' => Config::$hostname . 'elise/examplenocachepw/?message=',
            'GET' => 'message=[MESSAGE]',
            'userclass' => 'examplenocachepw.php',
            'cache' => false,
            'end' => '---------------------------------------'

          ],
	
	],

    ];

    $this->output = json_encode((object)$array);

  }


}
