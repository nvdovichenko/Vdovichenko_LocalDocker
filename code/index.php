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
echo $num . "<br>";
$temperature = 36.6;
echo $temperature . "<br>";
echo ($num - 3 * $temperature - 1.2) . "<br>";
$lastMonth = 1187.23;
$thisMonth = 1089.98;
echo "Разница расходов = ";
echo ($lastMonth - $thisMonth) . "<br>";

// 11 task
echo "<br>#11<br>";
$num_languages = 4;
$months = 11;
$days = $months * 16 / 4;
$daysPerLanguages = $days;
echo "В среднем на один язык ушло дней: ";
echo $daysPerLanguages . "<br>";

// 12 task
echo "<br>#12<br>";
echo "8 в степени 2 = ";
echo (8 ** 2) . "<br>";

// 13 task
echo "<br>#13<br>";
$myNum = 73;
$answer = $myNum;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $myNum;
echo $answer . "<br>";

// 14 task
// Работа с %
echo "<br>#14<br>";
$a = 10;
$b = 3;
echo "Остаток от деления a=10 на b=3 равен ";
echo ($a % $b) . "<br>";

echo "a делится без остатка на b? - ";
if ($a % $b == 0)
    echo "делится, результат равен" . ($a / $b) . "<br>";
else
    echo "делится с остатком, остаток равен " . ($a % $b) . "<br>";

// Работа со степенью и корнем
$st = pow(2, 10);
echo $st . "<br>";
echo sqrt(245) . "<br>";

$list = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($list as $n)
    $sum = $sum + pow($n, 2);
echo sqrt($sum) . "<br>";

// Работа с функциями округления
echo "Квадратный корень из 379 примерно равен " . round(sqrt(379), 0) . " или " . round(sqrt(379), 1) . " или " . round(sqrt(379), 2) . "<br>";
$list2 = array('ceil' => ceil(sqrt(587)), 'floor' => floor(sqrt(587)));
echo "округление в большую сторону " . $list2['ceil'] . " и округление в меньшую сторону " . $list2['floor'] . "<br>";

// Работа с min и max
echo "минимальное " . min(4, -2, 5, 19, -130, 0, 10) . "<br>";
echo "максимальное " . max(4, -2, 5, 19, -130, 0, 10) . "<br>";

// Работа с рандомом
echo rand(1, 100) . "<br>";
$arr3 = [10];
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = rand(1, 100);
    echo $arr[$i] . " ";
}

// Работа с модулем
echo "<br>" . abs(($b - $a)) . "<br>";
$list3 = [1, 2, -1, -2, 3, -3];
foreach ($list3 as $n) {
    $n = abs($n);
    echo $n . " ";
}

// Общее
$a2 = 2022;
$divisors = [];
for ($i = 1; $i <= $a2; $i++)
    if ($a2 % $i == 0)
        $divisors[] = $i;
echo '<pre>';
print_r($divisors);
echo '</pre>';

$list4 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
foreach ($list4 as $n) {
    $sum += $n;

    if ($sum > 10) {
        echo "Первые " . $n . " элементов<br>";
        break;
    }
}

// task 15
echo "<br>#15<br>";
function printStringReturnNumber(string $string): int
{
    echo $string . "<br>";
    return 1;
}

$my_num = printStringReturnNumber('is worked');
echo $my_num;

// task 16
echo "<br><br>#16<br>";

function increaseEnthusiasm(string $string): string
{
    $string .= '!';
    return $string;
}

echo increaseEnthusiasm('Hello world') . "<br>";

function repeatThreeTimes(string $string): string
{
    $string .= $string . $string;
    return $string;
}

echo repeatThreeTimes(increaseEnthusiasm(' repeat Hello')) . "<br>";

function cut(string $string, int $int = 10): string
{
    $str = "";
    for ($i = 0; $i < $int; $i++)
        $str .= $string[$i];
    return $str;
}

echo cut("My name is PHP! How are you?", 11) . "<br>";

function arrPrint($arr, $num)
{
    if ($num < sizeof($arr)) {
        echo $arr[$num] . " ";
        arrPrint($arr, $num + 1);
    }
}

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
arrPrint($array, 0);

function arrSum($num)
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num /= 10;
    }
    if ($sum > 9)
        return arrSum($sum);
    else
        return ($sum);
}

echo "<br>" . arrSum(12345) . "<br>";


// task 17
echo "<br>#17<br>";
$xString = "";
$arr7 = array();
for ($i = 1; $i < 10; $i++) {
    $xString = $xString . "x";
    array_push($arr7, $xString);
}
print_r($arr7);
function arrayFill($filler, $num)
{
    $retArr = array();
    for ($i = 0; $i < $num; $i++) {
        array_push($retArr, $filler);
    }
    return $retArr;
}

echo "<br>";
print_r(arrayFill("x", rand(1, 10)));
$arr8 = array(
    array(1, 2, 3),
    array(4, 5),
    array(6)
);
function array_multisum(array $arr)
{
    $sum = array_sum($arr);
    foreach ($arr as $child) {
        if (is_array($child))
            $sum += array_multisum($child);
    }
    return $sum;
}

echo "<br>" . array_multisum($arr8) . "<br>";
$arr9 = array();
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr9[$i][$j] = $i + $j + 1 + 2 * $i;
    }
}
print_r($arr9);
$arr10 = array(2, 5, 3, 9);
echo "<br>" . $result = $arr10[0] * $arr10[1] + $arr10[2] * $arr10[3] . "<br>";
$user = array(
    "name" => "Nikita",
    "surname" => "Vdovichenko",
    "patronymic" => "Ivanovich"
);
foreach ($user as $str)
    echo $str . " ";
echo "<br>";
$date = array(
    "year" => 2003,
    "month" => 3,
    "day" => 10
);
foreach ($date as $k => $str) {
    echo $str;
    if ($k != "day")
        echo "-";
}
$arr11 = array('a', 'b', 'c', 'd', 'e');
echo "<br>" . count($arr11);
echo "<br>" . $arr11[count($arr11) - 1] . " " . $arr11[count($arr11) - 2] . "<br>";


// task 18
echo "<br>#18";
$a = rand(1, 10);
$b = rand(1, 10);

function sumMoreThan10($a, $b): bool
{
    $sum = $a + $b;
    if ($sum > 10)
        return true;
    else return false;
}

echo "<br>$a + $b > 10";
echo sumMoreThan10($a, $b) ? " true" : " false";

function isEqual($a, $b): bool
{
    if ($a == $b)
        return true;
    else return false;
}

echo "<br>$a = $b";
echo isEqual($a, $b) ? " true!" : " false!";

$test = rand(0, 3);
echo "<br>";
echo ($test == 0) ? "Верно" : "";

$age = rand(1, 200);

function getSumOfDigits($num): int
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num /= 10;
    }
    return $sum;
}

echo ($age < 10 or $age > 99) ? "<br>Число $age <10 или >99"
    : ((getSumOfDigits($age) < 10) ? "<br>Сумма цифр $age однозначна" : "<br>Сумма цифр $age двузначна");
$arr12 = array();
echo "<br>";
for ($i = 0; $i < rand(2, 5); $i++) {
    $arr12[] = rand(0, 30);
    echo $arr12[$i] . " ";
}
echo (count($arr12) == 3) ? "<br>SUM " . array_sum($arr12) : "<br>!=3";


// task 19
echo "<br><br>#19<br>";

$xString = "";

for ($i = 0; $i < 20; $i++) {
    echo "$xString<br>";
    $xString .= "x";
}