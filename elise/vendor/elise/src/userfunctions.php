<?php

namespace Elise;

use Elise\Config;

class Controller{

  static public function latLonMatch($wert) : string
  {

    $wert = preg_replace('/[^0-9\.]/','', $wert);
    $latlonmatch = '/^(.*[1-9]+)\.?(0+)$/';
    $fallbackmatch = '/^(.*[0-9]+)\.(0+)$/';

    if(preg_match($latlonmatch, $wert, $matches, PREG_OFFSET_CAPTURE)){

      return $matches[1][0];

    }else{

      if(preg_match($fallbackmatch, $wert, $matches, PREG_OFFSET_CAPTURE)){

        return $matches[1][0];

      }

    }

    return $wert;

  }

}
