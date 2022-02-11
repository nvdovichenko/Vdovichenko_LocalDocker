<?php

// 1 task
echo "#1";
$very_bad_unclear_name = " 15 chicken wings";
$order = &$very_bad_unclear_name;
$order .= " and a glass of juice";
echo "<br>Your order is: $very_bad_unclear_name.";

// 2 task
echo "<br><br>#2";
echo "<br>";

$num = 123;
echo $num."<br>";
$temperature = 36.6;
echo $temperature."<br>";
echo ($num - 3*$temperature - 1.2)."<br>";
$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "<br>Разница расходов = ";
echo ($lastMonth-$thisMonth)."<br>";

// 11 task
echo "<br>#11";
echo "<br>";
$num_languages = 4;
$months = 11;
$days = $months * 16 / 4;
$daysPerLanguages = $days;
echo "<br>В среднем на один язык ушло дней: ";
echo $daysPerLanguages."<br>";


