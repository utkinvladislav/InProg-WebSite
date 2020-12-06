<meta charset="UTF-8" />
<title>Уткин Владислав - лаба2</title>
<p> Уткин Владислав
<p> Ищем значение z с помощью пользовательских функций, скрин формул ниже.
<p> Числа а и б по заданию случайны (от 1 до 100).
<p><img src="http://f0476784.xsph.ru/lab2/Screenshot_1.png" alt="Здесь скрин функции">
<?php
    $res = 0;
    $a=rand(1,100);
    $b=rand(1,100);
    print ("<p> Сгенерированные а и б: $a, $b");
    $res = findZ($a,$b);
    print ("<p> z равен: $res");
    function findZ($a,$b)
    {
        return pow(sin(findF($a,$b)),2) + findF(log(abs($a-$b)),$b);
    }
    function findF($u,$t) {
        if ($u*$u > abs(4*$u*$t))
        {
            return log(abs($u+$t));
        } 
        elseif ($u*$u < abs(4*$u*$t))
        {
            return tan(1/($u*$t));
        }
        else
        {
            return pow(M_E,$u*$t+sqrt(sin($u)));
        }
    }
?>
<p><a href="http://f0476784.xsph.ru/lab2/lab2.php"> Вернуться в меню </a>