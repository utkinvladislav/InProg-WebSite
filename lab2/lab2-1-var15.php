<title>Уткин Владислав - лаба2</title>
<p> Уткин Владислав
<p> Если в массиве действительных чисел хотя бы одно меньше, чем -2, заменить все отрицательные числа на свои квадраты.
<p> Для примера взят массив (1, -2, 3, -4, 0, 6, -7, -8, 9, 0)
<p> Результат: (
<?php
  $arr = array(1, -2, 3, -4, 0, 6, -7, -8, 9, 0);
  $temp = 0;
  $flag = false;
  for ($i = 0; $i < count($arr); $i++)
  {
      if ($arr[$i] < -2 ) {
         $flag = true;
         break;

      }
  }
  If ($flag == true) {
      for ($i = 0; $i < count($arr); $i++)
      {
          if ($arr[$i]< 0){
            $arr[$i] = $arr[$i]*$arr[$i];
          }
      }
  }
  for ($i = 0; $i < count($arr)-1; $i++)
  {
  echo $arr[$i]; 
  echo ", ";
  }
  echo $arr[count($arr)-1];
  echo ")."
?>
<p><a href="http://f0476784.xsph.ru/lab2/lab2.php"> Вернуться в меню </a>