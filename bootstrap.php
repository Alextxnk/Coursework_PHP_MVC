<?php

// $config =  require "config.php";

App::bind('config', require "config.php");

// App::get('config');

$pdo = Connection::make(App::get('config')['database']);

CreateUserTable::createTable($pdo);
CreatePostTable::createTable($pdo);

require Router::load("routes.php")
    ->show(Request::uri(), Request::method());


