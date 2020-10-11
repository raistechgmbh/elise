<?php

namespace Elise\Viewer;

use Elise\DbQuery\SingleReturn;
use Elise\DbQuery\MultiReturn;
use Elise\Config;
use Elise\Controller;

class DataViewer{

  public $caching = false;
  public $cachevalidity = 0;
  public $contenttype = 'text/plain';
  public $charset = 'utf-8';
  public $alloworigin = '*';
  public $allowmethods = 'POST, GET';
  public $disableclientcache = true;
  public $output;


  public function generateView()
  {

    $this->output = "ELISE DATA VIEWER + CACHE SYSTEM
Ⓒ 2020 RAISTECH GmbH S. Lau <s.lau@raistech.de>

DataViewer class variables

1. REQUIRED
-----------------------------------------
var:          public \$caching
value:        bool (true/false)
description:  Enable/Disable system caching

var:          public \$cachevalidity
value:        int (second)
description:  Validity of cached file until rewrite + CORS HEADER Access-Control-Max-Age

var:          public \$contenttype
value:        string
description:  HTTP HEADER output content-type

var:          public \$charset
value:        string
description:  HTTP HEADER output charset

var:          public \$alloworigin
value:        string
description:  CORS HEADER Access-Control-Allow-Origin

var:          public \$allowmethods
value:        string
description:  CORS HEADER Access-Control-Allow-Methods

var:          public \$disableclientcache
value:        bool (true/false)
description:  set HTTP HEADER to no-cache

var:          public \$output;
value:        string
description:  Systemly required



2. OPTIONAL
-----------------------------------------
var:          public \$password;
value:        string
description:  GET/POST given password to view called data from elise

var:          public \$options;
value:        string \"\"
description:  Enable uncached optional Calls

var:          public \$optionsallowed;
value:        array
description:  Allowed optional Calls



3. CONSOLE
-----------------------------------------
info          API Calls
flushcache    renew cached file";

  }


}
