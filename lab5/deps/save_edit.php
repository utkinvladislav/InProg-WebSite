<html> <body>
<?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
if ($mysqli->connect_errno) {
    echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
$id = $_GET['id'];
$creation_date = $_GET['new_creation_date'];
$start_sum = $_GET['new_start_sum'];
$q="UPDATE Deposit SET creation_date='$creation_date', start_sum='$start_sum' WHERE id='$id'";
$result = $mysqli->query($q);
if ($result) {echo "<p>Все сохранено.<p><a href='http://f0476784.xsph.ru/lab5/deps/deps.php'> Вернуться в обзорщик бд </a>";}
else {echo "<p>Ошибка сохранения. <p><a href='http://f0476784.xsph.ru/lab5/deps/deps.php'> Вернуться в обзорщик бд </a>";}?>
</body></html>