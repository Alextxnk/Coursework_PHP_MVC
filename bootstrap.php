<?php

use App\{Request, Router};

CreateUserTable::createTable(connect());
CreatePostTable::createTable(connect());

Router::load("routes.php")
    ->show(Request::uri(), Request::method());

