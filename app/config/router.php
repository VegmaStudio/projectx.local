<?php

$router = $di->getRouter();

// Define your routes here

$router->handle($_SERVER['REQUEST_URI']);

$router->add(
    '/admin/users/my-profile',
    [
        'controller' => 'users',
        'action'     => 'profile',
    ]
);
