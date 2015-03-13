<?php

  require_once "src/wordFinder.php";

  class WordFinderTest extends PHPUnit_Framework_TestCase

  {
    function test_wordfinder_oneletter()
    {
      //test WordFinder from src/wordFinder.php
      //Arrange
      $test_WordFinder = new WordFinder;
      $word = "a";
      $sentance = "a";

      //Act
      //result is the numeric output of checkWord from chekcword function
      //word is the needle, sentance is the haystack
      $result = $test_WordFinder->checkWord($word, $sentance);

      //Assert
      $this->assertEquals(1, $result);
    }
  }
?>
