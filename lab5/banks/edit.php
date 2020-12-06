<html> <head> <title> Изминить запись о банке. Уткин Владислав </title> </head> <body>
        <?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
            if ($mysqli->connect_errno) {
                echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
            $id = $_GET['id'];
            $result = $mysqli->query("SELECT * FROM Banks_Data2 WHERE id='$id';");
            if ($result){
                while ($arr = $result->fetch_array()) {
                    $name = $arr['name'];
                    $inn = $arr['inn'];
                    $country = $arr['country'];
                    $rel_class = $arr['rel_class'];
                    $val = $arr['val'];}  }

print "<form action='http://f0476784.xsph.ru/lab5/banks/save_edit.php' method='get'>";
print "Название: <input name='new_name' size='50' type='text' value='$name'>";
print "<p>ИНН: <input name='new_inn' size='12' type='number' value='$inn'>";
print "<p>Страна: <input name='new_country' size='50' type='text' value='$country'>";
print "<p>Класс надежности: <input name='new_rel_class' size='3' type='text' value='$rel_class'>";
print "<p>Объем активов: <input name='new_val' size='20' type='number' value='$val'>";
print "<input type='hidden' name='id' size='30' value='$id'>";
print "<p><input type='submit' name='save' value='Сохранить'>";
print "</form>";
print "<p><a href='http://f0476784.xsph.ru/lab5/banks/banks.php'> Вернуться в обзорщик бд </a>"; ?> </body></html>

