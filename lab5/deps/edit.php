<html> <head> <title> Изминить запись о банке. Уткин Владислав </title> </head> <body>
        <?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
            if ($mysqli->connect_errno) {
                echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
            $id = $_GET['id'];
            $result = $mysqli->query("SELECT * FROM Deposit WHERE id='$id';");
            if ($result){
                while ($arr = $result->fetch_array()) {
                    $id = $arr['id'];
                    $creation_date = $arr['creation_date'];
                    $dep_prog_id = $arr['dep_prog_id'];
                    $start_sum = $arr['start_sum'];} }
print "<form action='http://f0476784.xsph.ru/lab5/deps/save_edit.php' method='get'>";
print "Дата создания: <input name='new_creation_date' size='50' type='date' value='$creation_date'>";
print "<p>Стартовая сумма: <input name='new_start_sum' size='3' type='number' value='$start_sum'>";
print "<input type='hidden' name='id' size='30' value='$id'>";
print "<p><input type='submit' name='save' value='Сохранить'>";
print "</form>";
print "<p><a href='http://f0476784.xsph.ru/lab5/deps/deps.php'> Вернуться в обзорщик бд </a>"; ?> </body></html>

