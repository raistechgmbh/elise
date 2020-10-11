<?php

namespace Elise\Viewer;

use Elise\Config;
use Elise\Db;
use Elise\Db\Filecaching;

class Views{

      private $viewer;

      private $cachefile;


      function __construct(object $obj)
      {

        require($obj->view);

        $this->viewer = new DataViewer;

        if(isset($this->viewer->password)){

          if($this->viewer->password !== $_GET["password"] && $this->viewer->password !== $_POST["password"]){

            header("Location: " . Config::$hostname . "elise/accessdenied");
            die("");

          }

        }

        if(isset($this->viewer->options)){

          if(in_array($obj->option, $this->viewer->optionsallowed) === true){

            $this->viewer->caching = false;
            $this->viewer->cachevalidity = 0;
            $this->viewer->disableclientcache = true;
            $this->viewer->options = $obj->option;

          }

        }

        $this->cachefile = Config::$usercachedir . $obj->getter->{'2'};

        if($obj->option === "flushcache"){

          if(is_file($this->cachefile)){

            @unlink($this->cachefile);

          }

        }

        $this->sendHeaders();

        $this->view();


      }

      private function view()
      {

        if($this->viewer->caching === true){

          if(Filecaching::inCache($this->cachefile) === false){

            $this->dbView(true);
            return;

          }

          if(Filecaching::validCache($this->viewer->cachevalidity) === false){

            $this->dbView(true);
            return;

          }

          Filecaching::fromCache($this->cachefile);
          return;

        }

        $this->dbView();
        return;

      }

      private function dbView($cache=false)
      {

        new Db;

        $this->viewer->generateView();

        if($cache === true){

          Filecaching::Cache($this->cachefile, $this->viewer->output);

        }

        print $this->viewer->output;

      }

      private function sendHeaders()
      {

        if($this->viewer->disableclientcache === true){

          header("Access-Control-Max-Age: 0");
          header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
          header("Cache-Control: post-check=0, pre-check=0", false);
          header("Pragma: no-cache");

        }

        header("Access-Control-Allow-Origin: " . $this->viewer->alloworigin);
        header("Access-Control-Allow-Methods: " . $this->viewer->allowmethods);

        if($this->viewer->cachevalidity > 0){

          header("Access-Control-Max-Age: " . $this->viewer->cachevalidity);

        }

        header("Content-Type: " . $this->viewer->contenttype . "; charset=" . $this->viewer->charset);


      }


}
