<?php

namespace Elise;

class Config{

      static public $hostname = "https://www.mydomain.com/";

      static public $dbuserlabel;
      static public $dbhost;
      static public $dbname;
      static protected $dbuser;
      static protected $dbpass;

      static public $userclassdir = __DIR__ . "/../../../userclass/";
      static public $usercachedir = __DIR__ . "/../usercache/";

      static protected function dbAccessData()
      {

        //self::$dbuserlabel = [ 'MyDB 1' ];
        //self::$dbhost = [ 'Dbhost 1' ];
        //self::$dbname = [ 'Dbname 1' ];
        //self::$dbuser = [ 'Dbuser 1' ];
        //self::$dbpass = [ 'Dbpass 1' ];

        /*
        *
        *   Add more connections if required
        *
        */

        //self::$dbuserlabel[] = 'MyDB 2';
        //self::$dbhost[] = 'Dbhost 2';
        //self::$dbname[] = 'Dbname 2';
        //self::$dbuser[] = 'Dbuser 2';
        //self::$dbpass[] = 'Dbpass 2';

        //self::$dbuserlabel[] = 'MyDB 3';
        //self::$dbhost[] = 'Dbhost 3';
        //self::$dbname[] = 'Dbname 3';
        //self::$dbuser[] = 'Dbuser 3';
        //self::$dbpass[] = 'Dbpass 3';

      }


}
