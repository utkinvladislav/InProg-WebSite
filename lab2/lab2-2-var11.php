<meta charset="UTF-8" />
<title>Уткин Владислав - лаба2</title>
<p> Уткин Владислав
<p> Ищем значение z с помощью пользовательских функций, скрин формул ниже.
<p> Как можно заметить, в задании опечатка: в sin(f(,a). Полагаю, перед запятой был 'x'. Буду отталкиваться от этого.
<p> Числа а и б по заданию случайны (от 1 до 100), а x я принял за 10 для примера.
<p><img src="http://f0476784.xsph.ru/lab2/Screenshot_19.png" alt="Здесь скрин функции">
<?php
    $res = 0;
    $x = 10;
    $a=rand(1,100);
    $b=rand(1,100);
    print ("<p> Сгенерированные а и б: $a, $b");
    $res = findZ($x,$a,$b);
    print ("<p> z равен: $res");
    function findZ($x,$a,$b)
    {
        return sin(findF($x,$b)) + sqrt(abs(findF($x,$b)));
    }
    function findF($u,$t) {
        if ($u > 2)
        {
            return pow($u*$u+$t,1/3)*sin($t)*sin($t);
        } 
        else
        {
            return log(abs(pow($u,2)/($u+$t)));
        }
    }
?>
<p><a href="http://f0476784.xsph.ru/lab2/lab2.php"> Вернуться в меню </a>
