<?php

$route[] = ['/', 'HomeController@index'];
$route[] = ['post/{id}/show', 'PostController@show'];


return $route;