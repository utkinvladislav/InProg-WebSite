<?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
if ($mysqli->connect_errno) {
echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
    $name = $_GET['name'];
    $result = $mysqli->query("DELETE FROM Banks_Data WHERE name='$name'");
    header("Location: http://f0476784.xsph.ru/lab4/lab4.php");
    exit;
?>