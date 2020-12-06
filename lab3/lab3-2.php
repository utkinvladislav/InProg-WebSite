<title>Уткин Владислав - лаба3</title>
<p> Уткин Владислав
<HTML>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
<H1> Калькулятор </H1>
<FORM action="lab3-1.php" method="get">
Число 1: <INPUT type="number" name="num1" maxlength="10">
<p>Число 2: <INPUT type="number" name="num2" maxlength="10">
<p> <SELECT NAME="oper" SIZE="1">
 <OPTION VALUE="1" SELECTED> Сложить
 <OPTION VALUE="2"> Вычесть
 <OPTION VALUE="3"> Умножить
 <OPTION VALUE="4"> Разделить
 </SELECT>
<p><INPUT type="submit" name = "s" value="Вычислить">
</FORM>
<?
if (isset($_POST["s"])) {
if (is_numeric($_POST["num1"]) == false or is_numeric($_POST["num2"]) == false){
    echo "<p>Производить арифметические операции можно только над числами, имейте в виду";
} else{
switch ($_POST["oper"]) {
 case 1:
 $res=$_POST["num1"]+$_POST["num2"];
 break;
 case 2:
 $res=$_POST["num1"]-$_POST["num2"];
 break;
 case 3:
 $res=$_POST["num1"]*$_POST["num2"];
 break;
 case 4:
 $res=$_POST["num1"]/$_POST["num2"];
 break;
} }}
echo ("<p> А результат это: $res");
?>
<p><a href="http://f0476784.xsph.ru/lab3/lab3.php"> Вернуться в меню</a>
</BODY> </HTML>