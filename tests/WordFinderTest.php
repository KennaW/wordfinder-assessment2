<?php

  require_once "src/wordFinder.php";

  class WordFinderTest extends PHPUnit_Framework_TestCase

  {
    //test if function counts matching letter from string
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

    //test if function only counts one matching letter from string
    function test_wordfinder_twoletters()
    {
        //Arrange
        $test_WordFinder = new WordFinder;
        $word = 'a';
        $sentance = 'ab';

        //Act
        $result = $test_WordFinder->checkWord($word, $sentance);

        //Assert
        $this->assertEquals(1, $result);
    }

    //test if function counts more than one matching letter from string
    function test_wordfinder_twosameletters()
    {
        //Arrange
        $test_WordFinder = new WordFinder;
        $word = "a";
        $sentance = "aa";

        //Act
        $result = $test_WordFinder->checkWord($word, $sentance);

        //Assert
        $this->assertEquals(2, $result);

    }

    //test if function counts one multi letter word single word string from a multi word string
    function test_wordfinder_countofmontecristo()
    {
        
    }
  }
?>
