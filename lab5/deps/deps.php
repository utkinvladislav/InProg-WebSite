<title>Уткин Владислав - лаба5</title>
<p> Пятая лаба, Уткин Владислав.
    <?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
        if ($mysqli->connect_errno) {
            echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}?></body>
    <h2>В таблице представлены следующие сведения о имеющихся вкладах:
    <table border="1">
<tr><th> ИД </th><th> Дата создания </th><th> ИД программы </th><th> Начальная сумма </th></tr>
        <?php $result = $mysqli->query("SELECT * FROM `Deposit`");
            if ($result){
                $counter=0;
                while ($row = $result->fetch_array()){
                    $id = $row['id'];
                    $creation_date = $row['creation_date'];
                    $dep_prog_id = $row['dep_prog_id'];
                    $start_sum = $row['start_sum'];
                    $counter++;
                    echo "<tr>";
                    echo "<td>$id</td><td>$creation_date</td><td>$dep_prog_id</td><td>$start_sum</td>";
                    echo "<td><a href='http://f0476784.xsph.ru/lab5/deps/edit.php?id=$id'>Редактировать</a></td>";
                    echo "<td><a href='http://f0476784.xsph.ru/lab5/deps/delete.php?id=$id'>Удалить</a></td>";
                    echo "</tr>";}
                print "</table>";
                print("<p>Строк в таблице: $counter </p>");}
            print("<p> <a href='http://f0476784.xsph.ru/lab5/deps/new.php'> Создать новый вклад </a> </p>");?>
            <p><a href="http://f0476784.xsph.ru/lab5/lab5.php"> Вернуться в меню </a></html>