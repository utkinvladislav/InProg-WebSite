<html> <body>
<?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
if ($mysqli->connect_errno) {
    echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
$id = $_GET['id'];
$name = $_GET['new_name'];
$percent = $_GET['new_percent'];
$q="UPDATE Dep_Prog SET name='$name', percent='$percent' WHERE id='$id'";
$result = $mysqli->query($q);
if ($result) {echo "<p>Все сохранено.<p><a href='http://f0476784.xsph.ru/lab5/progs/progs.php'> Вернуться в обзорщик бд </a>";}
else {echo "<p>Ошибка сохранения. <p><a href='http://f0476784.xsph.ru/lab5/progs/progs.php'> Вернуться в обзорщик бд </a>";}?>
</body></html>