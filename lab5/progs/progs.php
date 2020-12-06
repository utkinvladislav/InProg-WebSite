<title>Уткин Владислав - лаба5</title>
<p> Пятая лаба, Уткин Владислав.
    <?php $mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
        if ($mysqli->connect_errno) {
            echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}?></body>
    <h2>В таблице представлены следующие сведения о имеющихся программах депозитов:
    <table border="1">
<tr><th> ИД </th><th> Название </th><th> Годовой процент </th><th> ИД банка </th></tr>
        <?php $result = $mysqli->query("SELECT * FROM `Dep_Prog`");
            if ($result){
                $counter=0;
                while ($row = $result->fetch_array()){
                    $id = $row['id'];
                    $name = $row['name'];
                    $percent = $row['percent'];
                    $bank_id = $row['bank_id'];
                    $counter++;
                    echo "<tr>";
                    echo "<td>$id</td><td>$name</td><td>$percent</td><td>$bank_id</td>";
                    echo "<td><a href='http://f0476784.xsph.ru/lab5/progs/edit.php?id=$id'>Редактировать</a></td>";
                    echo "<td><a href='http://f0476784.xsph.ru/lab5/progs/delete.php?id=$id'>Удалить</a></td>";
                    echo "</tr>";}
                print "</table>";
                print("<p>Строк в таблице: $counter </p>");}
            print("<p> <a href='http://f0476784.xsph.ru/lab5/progs/new.php'> Создать новую программу </a> </p>");?>
            <p><a href="http://f0476784.xsph.ru/lab5/lab5.php"> Вернуться в меню </a></html>