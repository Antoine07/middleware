# Organisation du code

Sur le serveur créez un dossier Middleware/Part0 Dans lequel tu vas créer un fichier app.php

# reprendre l'exercice 

Créer un système qui permet d'ajouter un wrapper autour d'une réponse à l'aide des variables de session.


```html

Un texte simple
<!-- avec un wrapper -->
<h1>Un texte simple</h1>

```

# Exercice, l'application est un middleware

Enchainer les deux middlewares $app et $middleware de l'exercice précédent.
Ici tout est middleware.

```php

$app = function($request, $response, $next){

};

$middleware = function($request, $response, $next){

};

// permet d'enchainer les middlewares là on rentre vraiment dans les couches successives en code !
$send = $middleware($request, $response, function($request, $response) use($app){

    // c'est vrai que dans cet exemple c'est les poupées Russes ! On verra des choses plus jolie plus tard 
    return $app($request, $response, function($request, $response){
        // ...
    })

});

```

Remarques sur le mot clé use 

```php

$app = "Hello App";

$example = function()use($app){
    echo $app;
};

// tu as passé au contexte de la fonction la variable $app avec use du coup tu affiches "Hello App"
$example(); 

```