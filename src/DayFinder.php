<?php

class DayFinder
{
    function dayCalculator($input_date)
    {
        $input_date = explode("/", $input_date);
        $dayofWeek = gregoriantojd($input_date[0], $input_date[1], $input_date[2]);
        return jddayofweek($dayofWeek, 1);
    }
}
?>
