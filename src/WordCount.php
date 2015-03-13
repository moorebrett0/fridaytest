<?php


    class RepeatCounter
    {
        function countRepeats($input_word, $input_string)
        {
            $input_word= strtolower("");
            $input_string = strtolower("");
            $result = substr_count($input_string, $input_word);
            return $result;
        }

    }

?>
