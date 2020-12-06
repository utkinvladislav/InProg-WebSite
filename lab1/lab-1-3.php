<?php
 const NUM_E = 2.71828;
 print ('Chislo e = ' . NUM_E . '<br>');
 $num_e1 = NUM_E;
 print ($num_e1 . ' - ' . gettype($num_e1) . '<br>');
 settype ($num_e1, string);
 print ($num_e1 . ' - ' . gettype($num_e1) . '<br>');
 settype ($num_e1, integer);
 print ($num_e1 . ' - ' . gettype($num_e1) . '<br>');
 settype ($num_e1, bool);
 print ($num_e1 . ' - ' . gettype($num_e1) . '<br>');
?>
<p><a href="http://f0476784.xsph.ru/lab1/lab1.php"> Вернуться в меню </a>