<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/WordCount.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get("/view_results", function() use($app) {
        $my_repeatCounter = new RepeatCounter;
        $word_count = $my_repeatCounter->countRepeats($_GET['word'], $_GET['string']);
        return $app['twig']->render('count.twig', array('result' => $word_count));
    });

    return $app;
?>
