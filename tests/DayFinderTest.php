<?php

    require_once "src/DayFinder.php";

    class DayFinderTest extends PHPUnit_Framework_TestCase
    {
        function test_inputDate()
        {
            //Arrange
            $test_DayFinder = new DayFinder;
            $input_date = "2/18/1986";

            //Act
            $result = $test_DayFinder->dayCalculator($input_date);

            //Assert
            $this->assertEquals("Tuesday", $result);
        }

    }

?>
