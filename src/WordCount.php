<?php


    class RepeatCounter
    {
        function countRepeats($input_word, $input_string)
        {
            $haystack = "";
            $needle = "";
            $input_word= strtolower($needle);
            $input_string = strtolower($haystack);
            $result = substr_count($input_string, $input_word);
            return $result;
        }

    }

?>
