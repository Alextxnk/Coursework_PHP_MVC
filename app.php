<?php

$config =  require "config.php";

$pdo = Connection::make($config['database']);

CreateUserTable::createTable($pdo);
CreatePostTable::createTable($pdo);


