<?php


    class RepeatCounter
    {
        function countRepeats($needle, $haystack)
        {

            $input_word = strtolower($needle);
            $input_string = strtolower($haystack);
            $result = substr_count($input_string, $input_word);
            return $result;
        }

    }

?>
