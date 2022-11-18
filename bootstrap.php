<?php

App::bind('config', require "config.php");

$pdo = Connection::make(
    App::get('config')['database']
);

CreateUserTable::createTable($pdo);
CreatePostTable::createTable($pdo);

Router::load("routes.php")
    ->show(Request::uri(), Request::method());

function view($view, $data = null)
{
    require "views/{$view}.view.php";
}


