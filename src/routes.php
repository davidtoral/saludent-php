<?php
 
use Slim\Http\Request;
use Slim\Http\Response;
 
// Routes

$app->get('/', function (Request $request, Response $response, array $args) {   
    
    TwigUtils::render('base.html', ['title'=>'Comtranslations - Services']);
});

$app->get('/homee', function (Request $request, Response $response, array $args) {   
    
    TwigUtils::render('home.html', ['title'=>'Comtranslations - asd']);
});
