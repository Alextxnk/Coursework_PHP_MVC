<?php

$config =  require "config.php";
require "database/Connection.php";
require "database/migrations/CreateUserTable.php";
require "database/migrations/CreatePostTable.php";

$pdo = Connection::make($config['database']);

CreateUserTable::createTable($pdo);
CreatePostTable::createTable($pdo);


