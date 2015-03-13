<?php
    require_once "src/WordCount.php";

    class RepeatCounterTester extends PHPUnit_Framework_TestCase
    {
        function test_makeWordCount_oneletter()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $needle = "a";
    $haystack = "a";

    //act
    $result = $test_repeatCounter->countRepeats($needle, $haystack);

    //assert
    $this->assertEquals("1", $result);

        }

        function test_countRepeat_oneword()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $needle = "at";
    $haystack = "at";

    //act
    $result = $test_repeatCounter->countRepeats($needle, $haystack);

    //assert
    $this->assertEquals("1", $result);

        }

        function test_countRepeat_onestring()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $needle = "at";
    $haystack = "at the at";

    //act
    $result = $test_repeatCounter->countRepeats($needle, $haystack);

    //assert
    $this->assertEquals("2", $result);

        }

        function test_countRepeat_largestring()
        {

    //Arrange

    $test_repeatCounter = new RepeatCounter;
    $needle = "is";
    $haystack = "is a test to see if my code is working.  If it is not who knows what is";

    //act
    $result = $test_repeatCounter->countRepeats($needle, $haystack);

    //assert
    $this->assertEquals("4", $result);

        }
    }


?>
