<title>Уткин Владислав - лаба3</title>
<p> Уткин Владислав
<p> Вариант 3 
<p><a href="http://f0476784.xsph.ru/lab3/lab3.php"> Вернуться в меню</a>
<?php
    if (isset($_GET["count"])){
        $sentence = trim($_GET["sentence"]);
        $letter = trim($_GET["letter"]);
        if (empty($letter) || empty($sentence)){
            echo "Заполните поля";
            return;}
        $words = explode(" ", $sentence);
        $counter = 0;
        for ($c = 0; $c < count($words); $c++){
            if (strpos($words[$c], $letter) === 0){
                $counter++;}}
                echo "Слов на эту букву: $counter";}
?>
