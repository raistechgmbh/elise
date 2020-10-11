<?php
/*
*   ELISE 
*   (c) 2020 S. Lau RAISTECH GmbH
*   s.lau@raistech.de
*   Frankfurt/Main
*/
require __DIR__ . "/vendor/autoload.php";

use Elise\Router\Routes;
use Elise\Viewer\Views;
new Views( new Routes );
