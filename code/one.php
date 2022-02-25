<?php

// Lab #3 for Web BFU

// task 1(a)
$type = "/a..b/";
$str = "ahb acb aeb aeeb adcb axeb";
$answer = [];
preg_match_all($type, $str, $answer);
print_r($answer);
echo "<br><br>";

// task 1(b)
$type = "/(\d)+/";
$str = "a1b2c3";
echo preg_replace_callback($type, fn($answer) => intval($answer[0]) ** 3, $str);
