<?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
if ($mysqli->connect_errno) {
echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
$name = $_GET['name'];
$percent = $_GET['percent'];
$bank_id = $_GET['bank_id'];
$result = $mysqli->query("INSERT INTO Dep_Prog SET name='$name',percent='$percent', bank_id='$bank_id'");
if ($result){
    print "<p>Запись создана.";
    print "<p><a href='http://f0476784.xsph.ru/lab5/progs/progs.php'> Вернуться в обзорщик бд </a>";
}else{print "<p>Ошибка сохранения. <p><a href='http://f0476784.xsph.ru/lab5/progs/progs.php'> Вернуться в обзорщик бд </a>";}
?>