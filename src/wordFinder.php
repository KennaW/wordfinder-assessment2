<?php
    class WordFinder
    {
        function checkWord($word, $sentance){

            $word_count = substr_count(strtolower($sentance), strtolower($word));
            return $word_count;
        }
    }
?>
