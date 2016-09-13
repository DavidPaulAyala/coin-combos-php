<?php

    class Coin
    {
        function makeChange($input)
        {
            $coinValue = array(5, 1);
            $coinName = array('nickel', 'penny');
            $change = array();
            $inputValue = $input;
            $changeName = "";
            $coinNum = 1;
            $i = 0;
            
            foreach ($coinValue as $coin) {
                while ($inputValue >= $coin) {
                    $changeName = $coinNum . " " . $coinName[$i];
                    $inputValue -= $coin;
                    $coinNum++;
                }
                if ($changeName != "")
                {
                    array_push($change, $changeName);
                }
                $i++;
                $coinNum = 1;
            }
            return $change;

        }
    }

 ?>
