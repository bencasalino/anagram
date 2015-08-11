<?php

    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views' 
    ));

    $app->get("/", function() {
        return "Help me I'm stuck in the computer!! ";
    });

    return $app;

 ?>
