<?php

function dd($data)
{
   echo '<pre>';
   die(var_dump($data));
   echo '</pre>';
}

require __DIR__ . "./vendor/autoload.php";

require "bootstrap.php";
// require "views/index.view.php";

