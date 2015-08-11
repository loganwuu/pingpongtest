<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_ping_pong", function() use($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $view_pingPong = $my_PingPongGenerator->makeTitleCase($_GET['number']);
        return $app['twig']->render('ping_pong.html.twig', array('result' => $view_pingPong));
    });

    return $app;
?>
