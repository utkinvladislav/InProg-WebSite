<title>Уткин Владислав - лаба3</title>
<p> Уткин Владислав
<p> Вариант 7 
<p> Результат: 
<p><a href="http://f0476784.xsph.ru/lab3/lab3.php"> Вернуться в меню</a>
<?php
    if (isset($_GET["count1"])){
        $sentence = trim($_GET["sentence"]);
        $num = $_GET["num"];
        $words = explode(" ", $sentence);
        for ($c = 0; $c < count($words); $c++){
            if (strlen($words[$c]) == $num){
                 echo $words[$c];
                 echo ' '; }}}
?>