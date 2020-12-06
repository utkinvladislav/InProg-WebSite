<html> <head> <title> Изминить запись о банке. Уткин Владислав </title> </head> <body>
        <?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
            if ($mysqli->connect_errno) {
                echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
            $id = $_GET['id'];
            $result = $mysqli->query("SELECT * FROM Dep_Prog WHERE id='$id';");
            if ($result){
                while ($arr = $result->fetch_array()) {
                    $id = $arr['id'];
                    $name = $arr['name'];
                    $percent = $arr['percent'];
                    $bank_id = $arr['bank_id'];} }
print "<form action='http://f0476784.xsph.ru/lab5/progs/save_edit.php' method='get'>";
print "Название: <input name='new_name' size='50' type='text' value='$name'>";
print "<p>Процент: <input name='new_percent' size='3' type='number' value='$percent'>";
print "<input type='hidden' name='id' size='30' value='$id'>";
print "<p><input type='submit' name='save' value='Сохранить'>";
print "</form>";
print "<p><a href='http://f0476784.xsph.ru/lab5/progs/progs.php'> Вернуться в обзорщик бд </a>"; ?> </body></html>

