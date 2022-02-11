<?php

// 1 task
echo "#1";
$very_bad_unclear_name = " 15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and a glass of juice";
echo "<br>Your order is: $very_bad_unclear_name.<br>";

// 2 task
echo "<br>#2<br>";
$num = 123;
echo $num."<br>";
$temperature = 36.6;
echo $temperature."<br>";
echo ($num - 3*$temperature - 1.2)."<br>";
$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "Разница расходов = ";
echo ($lastMonth-$thisMonth)."<br>";

// 11 task
echo "<br>#11<br>";
$num_languages = 4;
$months = 11;
$days = $months * 16 / 4;
$daysPerLanguages = $days;
echo "В среднем на один язык ушло дней: ";
echo $daysPerLanguages."<br>";

// 12 task
echo "<br>#12<br>";
echo "8 в степени 2 = ";
echo (8**2)."<br>";

// 13 task
echo "<br>#13<br>";
$myNum = 73;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer."<br>";