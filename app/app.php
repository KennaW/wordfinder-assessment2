<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/wordFinder.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });
  
  $app->post("/generate", function() use ($app) {
    $word = $_POST['word'];
    $words = $_POST['words'];
    $words = explode(" ", $words);
    $newAnagram = new AnagramComparator();
    $anagrams = $newAnagram->testAnagram($word, $words);
    return $app['twig']->render('generate.twig', array('word' => $word, 'words' => $words, 'anagrams' => $anagrams));
  });
  return $app;
?>
