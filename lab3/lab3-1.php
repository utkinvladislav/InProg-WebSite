<title>Уткин Владислав - лаба3</title>
<p> Уткин Владислав
<p> Результат: 
<?php
if ($_GET["num1"] > $_GET["num2"])
{
    echo $_GET["num1"];
} elseif ($_GET["num1"] < $_GET["num2"])
{
    echo $_GET["num2"];
} else
{
    echo 'Числа равны';
}
?>
<p><a href="http://f0476784.xsph.ru/lab3/lab3.php"> Вернуться в меню</a>