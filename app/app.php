<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/PingPongGenerator.php";

    // Add symfony debug component and turn it on.
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    // Initialize application
    $app = new Silex\Application();

    // Set Silex debug mode in $app object
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_ping_pong", function() use($app) {
        $my_PingPongGenerator = new PingPongGenerator;
        $view_ping_pong = $my_PingPongGenerator->generatePingPongArray($_GET['number']);
        return $app['twig']->render('ping_pong.html.twig', array('result' => $view_ping_pong));
    });

    return $app;
?>
