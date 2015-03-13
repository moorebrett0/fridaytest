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
    $result = $test_repeatCounter->countRepeat($input_word);

    //assert
    $this->assertEquals("1", $result);

        }

        function test_countRepeat_oneword()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $input_word = "at";

    //act
    $result = $test_repeatCounter->countRepeat($input_word);

    //assert
    $this->assertEquals("1", $result);

        }

        function test_countRepeat_onestring()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $input_word = "at the";
    $input_string = "at the";

    //act
    $result = $test_repeatCounter->countRepeat($input_word);

    //assert
    $this->assertEquals("1", $result);

        }



    }


?>
