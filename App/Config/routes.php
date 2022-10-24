<?php

return [
    //MainController
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'realty' => [
        'controller' => 'main',
        'action' => 'show',
    ],
    'login' => [
        'controller' => 'main',
        'action' => 'login',
    ],
    'logout' => [
        'controller' => 'main',
        'action' => 'logout',
    ],
    'register' => [
        'controller' => 'main',
        'action' => 'register',
    ],

    //AdminController
    'list' => [
        'controller' => 'admin',
        'action' => 'index',
    ],
    'add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'edit' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'delete' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
];
