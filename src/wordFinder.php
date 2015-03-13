<?php
    class RepeatCounter
    {
        function countRepeats($word, $sentence){
            //word and sentence are make lowercase
            //checks word against sentence -- counting number of instances of word in sentence
            //assigns result to "word_count"
            $word_count = substr_count(strtolower($sentence), strtolower($word));

            //returns "word_count"
            return $word_count;
        }
    }
?>
