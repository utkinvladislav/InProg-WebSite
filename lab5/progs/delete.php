<?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
if ($mysqli->connect_errno) {
echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
    $id = $_GET['id'];
    $result = $mysqli->query("DELETE FROM Deposit WHERE dep_prog_id='$id'");
    $result = $mysqli->query("DELETE FROM Dep_Prog WHERE id='$id'");
    header("Location: http://f0476784.xsph.ru/lab5/progs/progs.php");
    exit;
?>