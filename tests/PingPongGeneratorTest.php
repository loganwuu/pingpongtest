<?php
    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makePingPong_all()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1, 2), $result);
        }

        function test_makePingPong_ping()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);

            //Assert
            $this->assertEquals(array(1, 2, "ping"), $result);
        }
    }
?>
