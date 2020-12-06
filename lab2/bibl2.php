<?php
    function printTask($Const){
        echo ("<p>Просуммировать элементы двумерного массива, сумма индексов которых равна заданной
константе: $Const");}
    function fillArr($m,$n) {
        $array = array();
        for ($i = 0; $i < $m; $i++)
        {
            for ($j = 0; $j < $n; $j++)
            {
                $array[$i][$j] = rand(1,9);
            }
        }
        return $array;
    }
    function showArr($array, $m,$n) {
        for ($i = 0; $i < $m; $i++){
            echo "<p>| ";
            for ($j = 0; $j < $n; $j++){
                echo $array[$i][$j]." | ";
            }
        }
    }
    function changeArr($array, $m,$n, $c) {
        $res = 0;
        for ($i = 0; $i < $m; $i++){
            for ($j = 0; $j < $n; $j++){
                if ($i + $j == $c)
                $res = $res + $array[$i][$j];
            }
        }
        return $res;
    }
?>


