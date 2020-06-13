<?php

$router = $di->getRouter();

// Define your routes here
$router->add(
            '/profile/animal/:id',
            [
                'controller'     => 'profile',
                'action' => 'animal',
                'id'     => 1,
            ]
        );



$router->handle($_SERVER['REQUEST_URI']);