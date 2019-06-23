<?php

  session_start();
  //:::::::::::::GENERAL_VALUES::::::::::::://
    $controllers='src/controllers';
    $models='src/models';
    $plugins='src/controllers/plugins';
  //:::::::::::::TRAITS::::::::::::://
    require_once "$controllers/general/Request.php";
    require_once "$controllers/general/JWT.php";
  //:::::::::::::CLASSES::::::::::::://
    require_once "vendor/autoload.php";
    require_once "$controllers/general/Auth.php";
    require_once "$controllers/general/Route.php";


    $mongo = new MongoDB\Client;
    $auth = new RK\General\Auth;
    $user_access = $auth -> Auth_get_access(true);
    $route = new RK\General\Route;

    include($route->get_index());


?>
