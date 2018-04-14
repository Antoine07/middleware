<?php

// Dans un terminal tu vas taper dans le dossier Part0
// php -S localhost:8000 -d display_errors=1 app.php 

// Réponse
$response = function ($message, $status = '200 Ok') {
    header("HTTP/1.1 $status");

    return $message;
};

// Request 
$request = function () {

    return [
        'uri' => $_SERVER['REQUEST_URI'],
        'method' => strtolower($_SERVER["REQUEST_METHOD"])
    ];
};


// var_dump($request);
// var_dump($request());
// echo $response('Hello World !');

// créer l'uri /category 
$middleware = function($request, $response, $next){
    if('/home' === $request()['uri']){
         
        return "<h1>" . $response('Hello Home page') . "</h1>";
    }
    
    return $next($request, $response); // la fonction anonyme ... 
  };
  
  $send = $middleware($request, $response, function($request, $response){
    if('/home' === $request()['uri']){
    
        return $response('Hello Home page');
    
    }elseif('/category' === $request()['uri'])
    {
      return $response('Hello Category');
    }
    else{
      return $response('HERROR 404', '404 Not Found');
    }
  });


echo $send;

