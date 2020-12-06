<?php
    function printTask($m,$n){
        echo ("<p>Заменить значение каждого элемента двумерной таблицы A($m, $n) на сумму элементов,
        соседних с ним в строке, оставляя границу массива неизменной.");}
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
    function changeArr($array, $m,$n) {
        $tempArr = array();
        $tempArr = $array;
        for ($i = 0; $i < $m; $i++){
            for ($j = 1; $j < $n-1; $j++){
                $tempArr[$i][$j] = $array[$i][$j-1] + $array[$i][$j+1];
            }
        }
        return $tempArr;
    }
?>


