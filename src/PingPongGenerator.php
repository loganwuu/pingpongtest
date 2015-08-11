<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $number = array();
            for ($index = 1; $index <= $input_number; $index++ ) {
                array_push($number, $index);
            }
            return $number;
        }
    }
?>
