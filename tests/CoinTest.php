<?php

    require_once "src/Coin.php";

    class CoinTest extends PHPUnit_Framework_TestCase
    {
        function test_makeChange_oneCent(){

            //Arrange
            $test_Coin = new Coin;
            $input = 1;

            //Act
            $result = $test_Coin->makeChange($input);

            //Assert
            $this->assertEquals(["1 penny"], $result);
        }


    }
 ?>
