<?php
    require_once "src/WordCount.php";

    class WordCountTester extends PHPUnit_Framework_TestCase
    {
        function test_makeWordCount_oneletter()
        {

    //Arrange

    $test_wordCounter = new WordCounter;
    $input_word = "a";

    //act
    $result = $test_wordCounter->makeWordCount($input_word);

    //assert
    $this->assertEquals("1", $result);

        }

        function test_makeWordCount_oneword()
        {

    //Arrange

    $test_wordCounter = new WordCounter;
    $input_word = "at";

    //act
    $result = $test_wordCounter->makeWordCount($input_word);

    //assert
    $this->assertEquals("1", $result);

        }





    }


?>
