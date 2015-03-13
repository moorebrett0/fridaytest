<?php
    require_once "src/WordCount.php";

    class WordCountTester extends PHPUnit_Framework_TestCase
    {
        function test_makeWordCount_oneletter()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $input_word = "a";
    $input_string = "a";

    //act
    $result = $test_repeatCounter->countRepeats($input_word, $input_string);

    //assert
    $this->assertEquals("1", $result);

        }

        function test_countRepeat_oneword()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $input_word = "at";
    $input_string = "at";

    //act
    $result = $test_repeatCounter->countRepeats($input_word, $input_string);

    //assert
    $this->assertEquals("1", $result);

        }

        function test_countRepeat_onestring()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $input_word = "at";
    $input_string = "at the at";

    //act
    $result = $test_repeatCounter->countRepeats($input_word, $input_string);

    //assert
    $this->assertEquals("2", $result);

        }

        function test_countRepeat_largestring()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $input_word = "is";
    $input_string = "is a test to see if my code is working.  If it is not who knows what is";

    //act
    $result = $test_repeatCounter->countRepeats($input_word, $input_string);

    //assert
    $this->assertEquals("4", $result);

        }
    }


?>
