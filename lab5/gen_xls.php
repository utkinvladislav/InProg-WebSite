<?php
$mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
        if ($mysqli->connect_errno) {
            echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";}
$result = $mysqli->query("SELECT 
Banks_Data2.name as bank_name,
Banks_Data2.country as bank_country,
Banks_Data2.rel_class as bank_rel_class,
Dep_Prog.name as dep_prog_name,
Dep_Prog.percent as dep_prog_percent,
SUM(Deposit.start_sum) as deposit_sum 
FROM Deposit
LEFT JOIN Dep_Prog ON Deposit.dep_prog_id=Dep_Prog.id
LEFT JOIN Banks_Data2 ON Dep_Prog.bank_id=Banks_Data2.id
GROUP BY Deposit.dep_prog_id"  );
header ( "Content-type: application/vnd.ms-excel" );
header ( "Content-Disposition: attachment; filename=deposits_LR5_UTKIN_VLADISLAV.xls" );
echo "<table border = 1><tr><th> №п/п </th><th> Название банка </th><th> Страна </th><th>Класс надежности </th>
<th> Имя программы вкладов </th><th> Процентная ставка </th><th> Сумма вкладов </th></tr>";
            if ($result){
                $counter=0;
                while ($row = $result->fetch_array()){
                    $bank_name = $row['bank_name'];
                    $country = $row['bank_country'];
                    $bank_rel_class= $row['bank_rel_class'];
                    $dep_prog_name = $row['dep_prog_name'];
                    $dep_prog_percent = $row['dep_prog_percent'];
                    $deposit_sum = $row['deposit_sum'];
                    $counter++;
                    echo "<tr>";
                    echo "<td>$counter</td><td>$bank_name</td><td>$country</td><td>$bank_rel_class</td>
                    <td>$dep_prog_name</td><td>$dep_prog_percent</td><td>$deposit_sum</td></tr>";}
                print "</table>";}
?>