<?php
echo '<link rel="stylesheet" href="/src/style.css">';
require_once('src/Autoloader.php');
Autoloader::register();
$route = new Routeur();
echo $route->route();