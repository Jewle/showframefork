<?php


 $routes=[
     "^admin$'" => ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin'],
     "^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$" => ['prefix' => 'admin'],
     "^$" => ['controller' => 'Main', 'action' => 'index']
 ];

 \renegade\Router::add($routes);