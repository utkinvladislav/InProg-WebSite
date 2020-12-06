<html> <body>
<?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
if ($mysqli->connect_errno) {
    echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
$old_name = $_GET['name'];
$new_name = $_GET['new_name'];
$inn = $_GET['new_inn'];
$country = $_GET['new_country'];
$rel_class = $_GET['new_rel_class'];
$val = $_GET['new_val'];
$q="UPDATE Banks_Data SET name='$new_name', inn='$inn', 
country='$country', rel_class='$rel_class', val='$val' WHERE name='$old_name'";
$result = $mysqli->query($q);
if ($result) {echo "<p>Все сохранено.<p><a href='http://f0476784.xsph.ru/lab4/lab4.php'> Вернуться в обзорщик бд </a>";}
else {echo "<p>Ошибка сохранения. <p><a href='http://f0476784.xsph.ru/lab4/lab4.php'> Вернуться в обзорщик бд </a>";}?>
</body></html>