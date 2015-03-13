<?php
    class WordFinder
    {
        function checkWord($word, $sentance){
            //word and sentance are make lowercase
            //checks word against sentance -- counting number of instances of word in sentance
            //assigns result to "word_count"
            $word_count = substr_count(strtolower($sentance), strtolower($word));

            //returns "word_count"
            return $word_count;
        }
    }
?>
