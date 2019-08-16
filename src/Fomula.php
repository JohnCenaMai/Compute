<?php
    function tinhtong($a, $b)
    {
        $tong = $a + $b;
        return $tong;
    }

    function tinhtongmang($array)
    {
        $tong = 0;
        $arrayLength = count($array);
        for($i = 0;$i < $arrayLength;$i++)
        {
            $tong+=$array[$i];
        }
        return $tong;
    }

?>