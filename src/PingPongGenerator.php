<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $number = array();
            for ($index = 1; $index <= $input_number; $index++ ) {
                if ($index % 3 == 0) {
                    array_push($number, "ping");
            } elseif ($index % 5 == 0) {
                    array_push($number, "pong");
                } else {
                array_push($number, $index);
                }
            }
            return $number;
        }
    }
?>
