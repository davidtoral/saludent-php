<?php
 
use Slim\Http\Request;
use Slim\Http\Response;
 
// Routes

$app->get('/', function (Request $request, Response $response, array $args) {   
    
    TwigUtils::render('index.html', ['title'=>'Clínica Dental Saludent']);
});
