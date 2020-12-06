<title>Уткин Владислав - лаба4</title>
<p> Четвертая лаба, Уткин Владислав. 27 вариант. 27-12*2 = 3. Делаю 3 вариант.
<p> По варианту работаю с таблицей БД, содержащей данные о банках.
        <?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
            if ($mysqli->connect_errno) {
                echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}?></body>
    <h2>В таблице представлены следующие сведения о банках:
    <table border="1">
<tr><th> Название </th><th> ИНН </th><th> Страна </th><th> Класс надежности </th><th> Объем активов (в руб.) </th></tr>
        <?php $result = $mysqli->query("SELECT * FROM `Banks_Data`");
            if ($result){
                $counter=0;
                while ($row = $result->fetch_array()){
                    $name = $row['name'];
                    $inn = $row['inn'];
                    $country = $row['country'];
                    $rel_class = $row['rel_class'];
                    $val = $row['val'];
                    $counter++;
                    echo "<tr>";
                    echo "<td>$name</td><td>$inn</td><td>$country</td><td>$rel_class</td><td>$val</td>";
                    echo "<td><a href='http://f0476784.xsph.ru/lab4/edit.php?name=$name'>Редактировать</a></td>";
                    echo "<td><a href='http://f0476784.xsph.ru/lab4/delete.php?name=$name'>Удалить</a></td>";
                    echo "</tr>";}
                print "</table>";
                print("<p>Строк в БД: $counter </p>");}
            print("<p> <a href='http://f0476784.xsph.ru/lab4/new.php'> Внести новый банк в таблицу </a> </p>");?>
            <p><a href="http://f0476784.xsph.ru/index.php"> Вернуться в меню </a></html>