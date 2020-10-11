<?php

namespace Elise\Db;

use Elise\Config;

class Filecaching{

      static public $filetime;

      static public $nowtime;


      static public function fromCache($filename)
      {

        print file_get_contents($filename);

      }

      static public function validCache($cachevalidity) : bool
      {

        return ((self::$nowtime-self::$filetime) <= $cachevalidity);

      }

      static public function inCache($filename) : bool
      {

        if(is_file($filename)){

          self::$nowtime = time();
          self::$filetime = filemtime($filename);
          return true;

        }

        return false;

      }

      static public function Cache($filename, &$content)
      {

        file_put_contents($filename, $content);

      }

}
