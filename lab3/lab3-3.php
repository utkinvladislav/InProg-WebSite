<title>Уткин Владислав - лаба3</title>
<p> Уткин Владислав
<HTML>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
<H1> Фильтр чисел в диапазоне от 1 до N </H1>
<FORM action="lab3-1.php" method="get">
Число N: <INPUT type="number" name="num1" maxlength="10">
<p> <SELECT NAME="oper" SIZE="1">
 <OPTION VALUE="1" SELECTED> Четные
 <OPTION VALUE="2"> Нечетные
 <OPTION VALUE="3"> Простые
 <OPTION VALUE="4"> Составные
 </SELECT>
<p><INPUT type="submit" name = "s" value="Показать">
</FORM>
<?
if (isset($_POST["s"]) and isset($_POST["num1"])) {
if (is_numeric($_POST["num1"])== false){
    echo "<p>N - должно быть числом!";
} else{
 $n = $_POST["num1"];
 $array = array();
switch ($_POST["oper"]) {
 case 1:
 for ($i = 1; $i<= $n;$i++) {
     if ($i%2 == 0)
     {
     $k = count($array)+1;
     $array[$k] = $i;    } }
 break;
 case 2:
 for ($i = 1; $i<= $n;$i++) {
     if ($i%2 <> 0) {
     $k = count($array)+1;
     $array[$k] = $i;     } }
 break;
 case 3:
    for ($i = 2;$i<=$n;$i++){
        if (IsPrime($i) == true){
        $k = count($array)+1;
        $array[$k] = $i;} }
 break;
 case 4:
    for ($i = 3;$i<=$n;$i++){
        if (IsPrime($i) == false){
        $k = count($array)+1;
        $array[$k] = $i;} }
 break;}
if (count($array)<>0){
echo 'Результат: (';
for ($i = 1;$i<=count($array)-1;$i++) echo "$array[$i], ";
echo "$array[$i])";
} else echo'Нет ни одного подходящего числа';}}
function IsPrime($N){
    for ($i = 2; $i < $N; $i++){
    if ($N % $i == 0) return false;
    if ($N<2) return false;
    }return true;}
?>
<p><a href="http://f0476784.xsph.ru/lab3/lab3.php"> Вернуться в меню</a>
</BODY> </HTML>