<?php

$router->get('', 'DashboardController@index');
$router->get('posts', 'DashboardController@allPosts');
$router->get('posts/create', 'DashboardController@create');
$router->get('posts/show', 'DashboardController@show');
$router->get('posts/edit', 'DashboardController@edit');
$router->post('posts/delete', 'DashboardController@delete');
