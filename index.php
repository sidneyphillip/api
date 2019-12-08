<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../api_includes/bootstrap/app.php';
require '../../api_includes/src/config/db.php';

$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");

    return $response;
});

// Customer Routes
require '../../api_includes/src/routes/customers.php';

$app->run();