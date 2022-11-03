<?php

$config =  require "config.php";

$pdo = Connection::make($config['database']);

CreateUserTable::createTable($pdo);
CreatePostTable::createTable($pdo);

$router = new Router;

$router->define([
    '' => "controllers/index.php",
    'posts' => "controllers/posts.php"
]);

require $router->show('posts');

