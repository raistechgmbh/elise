<?php

namespace Elise\Router;

use \Elise\Config;

class Selector{

      public $view;

      public $option;

      public $getter;


      protected function setAction()
      {

        $this->getter = (object)explode( "/", $_SERVER["REQUEST_URI"] );

        if(is_file( Config::$userclassdir . $this->getter->{2} . ".php" ) === false){

          $this->getter->{2} = "default";

        }

        if(isset( $this->getter->{3} ) === false){

          $this->getter->{3} = "";

        }

        $this->view = Config::$userclassdir . $this->getter->{2} . ".php";
        $this->option = $this->getter->{3};

      }


}
