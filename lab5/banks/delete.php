<?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
if ($mysqli->connect_errno) {
echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
    $id = $_GET['id'];
    $arr = array();
    $arr = $mysqli->query("SELECT id FROM `Dep_Prog` WHERE bank_id = $id;");
     if ($arr){
                $counter=0;
                while ($row = $arr->fetch_array()){
                    $dep_prog_id = $row['id'];
                    $counter++;
                    $result = $mysqli->query("DELETE FROM Deposit WHERE dep_prog_id='$dep_prog_id';");}}
    $result = $mysqli->query("DELETE FROM Dep_Prog WHERE bank_id='$id';");
    $result = $mysqli->query("DELETE FROM Banks_Data2 WHERE id='$id';");
    header("Location: http://f0476784.xsph.ru/lab5/banks/banks.php");
    exit;
?>