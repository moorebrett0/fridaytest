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

    $app->get("/view_search", function() use($app) {
        $my_repeatCounter = new RepeatCounter;
        $str_to_search = $my_repeatCounter->countRepeats($_GET['string']);
        return $app['twig']->render('.twig', array('result' => $title_cased_phrase));
    });

    return $app;
?>
