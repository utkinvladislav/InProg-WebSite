<html> <body>
<?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
if ($mysqli->connect_errno) {
    echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
$id = $_GET['id'];
$name = $_GET['new_name'];
$inn = $_GET['new_inn'];
$country = $_GET['new_country'];
$rel_class = $_GET['new_rel_class'];
$val = $_GET['new_val'];
$q="UPDATE Banks_Data2 SET name='$name', inn='$inn', 
country='$country', rel_class='$rel_class', val='$val' WHERE id='$id'";
$result = $mysqli->query($q);
if ($result) {echo "<p>Все сохранено.<p><a href='http://f0476784.xsph.ru/lab5/banks/banks.php'> Вернуться в обзорщик бд </a>";}
else {echo "<p>Ошибка сохранения. <p><a href='http://f0476784.xsph.ru/lab5/banks/banks.php'> Вернуться в обзорщик бд </a>";}?>
</body></html>