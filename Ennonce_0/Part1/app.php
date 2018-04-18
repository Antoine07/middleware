<?php

require 'vendor/autoload.php';

use function Http\Response\send;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

$request = \GuzzleHttp\Psr7\ServerRequest::fromGlobals();
$response = new \GuzzleHttp\Psr7\Response();

$uri = $request->getUri()->getPath();

$response->getBody()->write('Hello Home page...');

send($response);

// faire un middleware pour retirer le "/" en trop dans l'url 
//  $uri = (string) $request->getUri(); // permet de récupérer l'url entièrement 
// $uri[-1];
// utilise substr() pour virer le slash en trop

// et pensez à faire une redirection 301 !!!
