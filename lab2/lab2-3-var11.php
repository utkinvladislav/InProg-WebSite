<meta charset="UTF-8" />
<title>Уткин Владислав - лаба2</title>
<p> Уткин Владислав
<p> По заданию необходимо разработать библиотеку. Она выведет на экран условие, 
<br> заполнит массив, выведет массив, обработает его. М и Н заданы как 5 и 7 в этом файле.
<p> Библиотека лежит в папке проекта подключена к этому файлу через инклюд
<?php
include "bibl1.php";
$m = 5;
$n = 7;
printTask($m,$n);
$array = array();
$array = fillArr($m,$n);
showArr($array,$m,$n);
$array = changeArr($array,$m,$n);
echo '<p> Результат ниже';
showArr($array,$m,$n);
?>
<p><a href="http://f0476784.xsph.ru/lab2/lab2.php"> Вернуться в меню </a>