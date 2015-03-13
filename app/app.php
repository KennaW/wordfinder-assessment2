<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/wordFinder.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });

  $app->get("/instance", function() use ($app) {
    $how_many = new RepeatCounter();
    $number_of_times = $how_many->countRepeats($_GET['word'], $_GET['sentance']);
    return $app['twig']->render('instance.twig', array('number_of_times'=> $number_of_times));
  });
  return $app;
?>
