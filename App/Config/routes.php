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
    'admin' => [
        'controller' => 'admin',
        'action' => 'index',
    ],
    'admin/add' => [
        'controller' => 'admin',
        'action' => 'add',
    ],
    'admin/edit' => [
        'controller' => 'admin',
        'action' => 'edit',
    ],
    'admin/delete' => [
        'controller' => 'admin',
        'action' => 'delete',
    ],
];
