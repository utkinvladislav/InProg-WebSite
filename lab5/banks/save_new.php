<?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
if ($mysqli->connect_errno) {
echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
$name = $_GET['name'];
$inn = $_GET['inn'];
$country = $_GET['country'];
$rel_class = $_GET['rel_class'];
$val = $_GET['val'];
$result = $mysqli->query("INSERT INTO Banks_Data2 SET name='$name',
inn='$inn', country='$country', rel_class='$rel_class', val='$val'");
if ($result){
    print "<p>Запись создана.";
    print "<p><a href='http://f0476784.xsph.ru/lab5/banks/banks.php'> Вернуться в обзорщик бд </a>";
}else{print "Ошибка сохранения. <a href='http://f0476784.xsph.ru/lab5/banks/banks.php'> Вернуться в обзорщик бд </a>";}
?>