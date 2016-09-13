<?php

    class Coin
    {
        function makeChange($input)
        {
            $coinValue = array(1);
            $coinName = array('penny');
            $change = array();

            $i = 0;
            foreach ($coinValue as $coin) {
                if ($input % $coin >= 0)
                {
                    $changeName = $coin . " " . $coinName[$i];
                    array_push($change, $changeName);
                }
                $i++;
            }
            return $change;

        }
    }

 ?>
