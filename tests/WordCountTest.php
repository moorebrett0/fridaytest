<?php
    require_once "src/WordCount.php";

    class WordCountTester extends PHPUnit_Framework_TestCase
    {
        function test_makeWordCount_oneletter()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $input_word = "a";

    //act
    $result = $test_repeatCounter->countRepeats($input_word);

    //assert
    $this->assertEquals("1", $result);

        }

        function test_countRepeat_oneword()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $input_word = "at";

    //act
    $result = $test_repeatCounter->countRepeats($input_word);

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
    $result = $test_repeatCounter->countRepeats($input_word);

    //assert
    $this->assertEquals("2", $result);

        }



    }


?>
