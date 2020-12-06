<?php require("tfpdf/tfpdf.php");
$mysqli = new mysqli("localhost", "f0476784_Banks", "qwerty", "f0476784_Banks");
        if ($mysqli->connect_errno) {
            echo "<p>ВНИМАНИЕ, БД НЕ ПОДКЛЮЧЕНА";} else {echo "<p>БД подключена успешно";}
    $pdf = new tFPDF();
    $pdf->AddFont('PDFFont','','OpenSans-Regular.ttf');
    $pdf->SetFont('PDFFont','',12);
    $pdf->AddPage();
    $pdf->Cell(80);
    $pdf->Cell(30,10,'Вклады',1,0,'C');
    $pdf->Ln(20);
    $pdf->SetFillColor(200,200,200);
    $pdf->SetFontSize(6);
    $header = array("п/п","Наименование банка","Страна","Класс надежности","Название программы","% годовых",
    "Сумма всех вкладов такого типа");
    $w = array(6,30,25,20,50,15,35);
    $h = 10;
    for ($c = 0; $c < 7; $c++){
        $pdf->Cell($w[$c],$h,$header[$c],'LRTB','0','',true);    }
    $pdf->Ln();
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
GROUP BY Deposit.dep_prog_id"    );
    if ($result){
        $counter = 1;
        // Для каждой строки из запроса
        while ($row = $result->fetch_row()){
            $pdf->Cell($w[0],$h,$counter,'LRBT','0','C',true);
            $pdf->Cell($w[1],$h,$row[0],'LRB');

            for ($c = 2; $c < 7; $c++){
                $pdf->Cell($w[$c],$h,$row[$c-1],'RB');            }
            $pdf->Ln();
            $counter++;    }    }
    $pdf->Output("I",'Deposits.pdf',true);?>