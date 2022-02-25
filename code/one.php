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
echo "<br><br>";


// task 2(a)
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>reg exp and file work</title>
    </head>
    <body>
    <form method="POST">
        <label>
<textarea name="textToParse"
          placeholder="Input English text to check"
          rows="10" cols="50"></textarea>
        </label>
        <input type="submit" name="getWordsAndSymbols" value="text treatment ">
    </form>
    </body>
    </html>

<?php
if ($_POST['getWordsAndSymbols']) {
    if ($_POST['textToParse']) {
        $_SESSION['textInfo'] = str_word_count($_POST['textToParse'],
                0) . ' Words<br>';

        $_SESSION['textInfo'] .= strlen($_POST['textToParse']) . ' Symbols<br>';

    } else {
        $_SESSION['textInfo'] = 'Without text! Input something';
    }
}
echo $_SESSION['textInfo'];