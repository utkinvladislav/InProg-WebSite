<title>Уткин Владислав - лаба5</title>
<p> Пятая лаба, Уткин Владислав.
    <?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
        if ($mysqli->connect_errno) {
            echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}?></body>
    <h2>В таблице представлены следующие сведения о банках:
    <table border="1">
<tr><th> ИД </th><th> Название </th><th> ИНН </th><th> Страна </th><th> Класс надежности </th><th> Объем активов (в руб.) </th></tr>
        <?php $result = $mysqli->query("SELECT * FROM `Banks_Data2`");
            if ($result){
                $counter=0;
                while ($row = $result->fetch_array()){
                    $id = $row['id'];
                    $name = $row['name'];
                    $inn = $row['inn'];
                    $country = $row['country'];
                    $rel_class = $row['rel_class'];
                    $val = $row['val'];
                    $counter++;
                    echo "<tr>";
                    echo "<td>$id</td><td>$name</td><td>$inn</td><td>$country</td><td>$rel_class</td><td>$val</td>";
                    echo "<td><a href='http://f0476784.xsph.ru/lab5/banks/edit.php?id=$id'>Редактировать</a></td>";
                    echo "<td><a href='http://f0476784.xsph.ru/lab5/banks/delete.php?id=$id'>Удалить</a></td>";
                    echo "</tr>";}
                print "</table>";
                print("<p>Строк в БД: $counter </p>");}
            print("<p> <a href='http://f0476784.xsph.ru/lab5/banks/new.php'> Внести новый банк в таблицу </a> </p>");?>
            <p><a href="http://f0476784.xsph.ru/lab5/lab5.php"> Вернуться в меню </a></html>