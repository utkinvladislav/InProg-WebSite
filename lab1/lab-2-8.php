<?php
$a=rand(1,10);
$b=rand(10,20);
print ("<p> Числа из отрезка [".$a.",".$b."]: <br>");
for ($i=$a; $i<=$b; ++$i) {
 echo($a . "<br>");
 $a=++$a; }
?>
<p><a href="http://f0476784.xsph.ru/lab1/lab1.php"> Вернуться в меню </a>