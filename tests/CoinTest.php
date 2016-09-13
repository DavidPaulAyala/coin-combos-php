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

        function test_makeChange_twoCent(){

            //Arrange
            $test_Coin = new Coin;
            $input = 2;

            //Act
            $result = $test_Coin->makeChange($input);

            //Assert
            $this->assertEquals(["2 penny"], $result);
        }

        function test_makeChange_sixCents(){

            //Arrange
            $test_Coin = new Coin;
            $input = 6;

            //Act
            $result = $test_Coin->makeChange($input);

            //Assert
            $this->assertEquals(["1 nickel", "1 penny"], $result);
        }


    }
 ?>
