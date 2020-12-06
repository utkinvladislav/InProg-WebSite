<?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
if ($mysqli->connect_errno) {
echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
$creation_date = $_GET['creation_date'];
$dep_prog_id = $_GET['dep_prog_id'];
$start_sum = $_GET['start_sum'];
$result = $mysqli->query("INSERT INTO Deposit SET creation_date='$creation_date',
dep_prog_id='$dep_prog_id', start_sum='$start_sum'");
if ($result){
    print "<p>Запись создана.";
    print "<p><a href='http://f0476784.xsph.ru/lab5/deps/deps.php'> Вернуться в обзорщик бд </a>";
}else{print "<p>Ошибка сохранения. <p><a href='http://f0476784.xsph.ru/lab5/deps/deps.php'> Вернуться в обзорщик бд </a>";}
?>