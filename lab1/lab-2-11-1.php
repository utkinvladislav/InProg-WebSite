<p> Ищем Делители натурального числа. Для этого сгенерируем число.
<p> Для примера, диапазон генерации будет от 1 до 100.
<?php
$a=rand(1,100);
$i = 1;
echo ('Сгенерированное число = ' . $a . '<br>Его делители:');
 for ($i = 1; i <= $a; $i++){
     if ($a%$i == 0){
         echo($i . ' ');
     }
 }
?>
<p><a href="http://f0476784.xsph.ru/lab1/lab1.php"> Вернуться в меню </a>