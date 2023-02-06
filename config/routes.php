<?php
namespace App;

use Core\Route;


return [
    'controllerNamespace' => 'App\\Controllers\\',
    'routes' => [
        new Route('GET /', 'MessageController@getList'),
        new Route('GET /createMessage', 'MessageController@create'),
        new Route('POST /saveMessage', 'MessageController@save'),
        new Route('GET /editMessage/:id/', 'MessageController@edit'),
        new Route('POST /updateMessage', 'MessageController@update')
    ]
];