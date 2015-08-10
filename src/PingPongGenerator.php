<?php
    class PingPongGenerator
    {
        function generatePingPongArray($input_number)
        {
            $number = 0;
            while ($number <= $input_number) {
                return implode("/n", $number++);
            }
        }
    }
?>
