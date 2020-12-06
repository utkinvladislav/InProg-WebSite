<meta charset="UTF-8" />
<title>Уткин Владислав - лаба3</title>
<p> Уткин Владислав
<p> Вариант 11 
<p> Результат: 
<p><a href="http://f0476784.xsph.ru/lab3/lab3.php"> Вернуться в меню</a>
<?php
    if (isset($_GET["count2"])){
        $sentence = (trim($_GET["sentence"]));
        $symba = (trim($_GET["symba"]));
        $toReplace = '' . substr($symba, 1);
        $s1 = str_replace($symba, $toReplace, $sentence);
        echo $s1;
    }
?>