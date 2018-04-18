<?php

require 'vendor/autoload.php';

use function Http\Response\send;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

$request = \GuzzleHttp\Psr7\ServerRequest::fromGlobals();
$response = new \GuzzleHttp\Psr7\Response();