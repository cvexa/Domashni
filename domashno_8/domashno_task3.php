<?php
header('content-type:text/html; charset=utf-8');

/* Comment
. Домашно зад 3 Даден е двумерен масив с размери $M x $N с произволни числа. Да
се декларира функция, която отпечатва индексите на масива и тяхната стойност
a[0][0] = 5 a[0][1] = 14 a[0][2] = 2
a[1][0] = 20 a[1][1] = 9 a[01[2] = 4
 Пример а $M=2, $N=3
*/
function data($m,$n,$first,$second){ //размери,и цикли
 for ($i=0; $i < $m; $i++) { 
 	for ($k=0; $k < $n; $k++) { 
 		echo "<p>a".$second[$i][$k]." = ".$first[$i][$k]."</p>";
 	}
 }
}




$arr = array(array('10','1222','35','400','-5'),
 	          array('16','3','1','0','0'),
 	          array('1999','102','19','74','15555'));
 $arr2 = array(array('[0][0]','[0][1]','[0][2]','[0][3]','[0][4]'),
 	          array('[1][0]','[1][1]','[1][2]','[1][3]','[1][4]'),
 	          array('[2][0]','[2][1]','[2][2]','[2][3]','[2][4]'));

 echo "<pre>";
 print_r($arr);
 echo "размери : m =3 , n =5";
 echo "</pre>"; 

 $s=3;
 $b=5;

 data($s,$b,$arr,$arr2);//използване на функцията


?>