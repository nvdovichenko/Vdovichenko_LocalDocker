<?php
session_start();
// <!-- 1.Регулярные выражения. -->

// <!-- пункт a -->
echo '1.Регулярные выражения<br>';
$regexp = '/a.{2}b/';
$str='ahb acb aeb aeeb adcb axeb';
$matches = [];
$count = preg_match_all($regexp, $str, $matches);
print_r($matches);
echo "<br>";
echo "<br>";

//  пункт b 

$regexp = '/\d+/';
$str = 'a1b2c3';
echo $str . ' -> ';
$result = preg_replace_callback(
    $regexp,
    function ($matches) {
        foreach ($matches as &$item) {
            $item = $item ** 3;
        }
        return $matches[0];
    },
    $str
);
echo $result . '<br>';
echo "<br>";

// 2.Форма сессии и куки
// пункт a


?>

<!doctype html>
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
          placeholder="Input some text"
          rows="5" cols="40"></textarea>
    </label>
    <input type="submit" name="getWordsAndSyms" value="text treatment ">
</form>
</body>
</html>

<?php
if ($_POST['getWordsAndSyms']) {
    if ($_POST['textToParse']) {
        $_SESSION['textInfo'] = str_word_count($_POST['textToParse'],
                0) . ' Words<br>';
        
        $_SESSION['textInfo'] .= strlen($_POST['textToParse']) . ' Symbols<br>';
        
    } else {
        $_SESSION['textInfo'] = 'No text';
    }
}
echo $_SESSION['textInfo'];

// пункт b
?>

<body>
    <form method="POST">
        <label>
            NAME<input type="text" name="name" required><br>
            SURNAME<input type="text" name="surname" required><br>
            AGE<input type="number" name="age" required><br>
            <input type="submit" value="Записать в сессию" name="sendToSession">
        </label>
    </form>
    
</body>

<?php
if ($_POST['sendToSession']) {
    if ($_POST['name'] && $_POST['surname'] && $_POST['age']) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['age'] = $_POST['age'];
    }
}
?> 

<body>
    <form method="POST">
        <label>
            NAME<input type="text" name="nameV2" ><br>
            SURNAME<input type="text" name="surnameV2" required><br>
            SALARY<input type="number" name="salaryV2" required><br>
            MARITAL STATUS
            <select name="status" required>
                <option>SINGLE</option>
                <option>MARRIED</option>
                <option>DIVORCED</option>
                <option>WIDOW(ER)</option>
            </select><br>
            <input type="submit" value="Записать в сессию" name="sendToSessionArray"><br>
        </label>
        <a href="/user_inf.php">User Information3</a>
    </form>
    </body>
<?php
if ($_POST['sendToSessionArray']) {
    if ($_POST['nameV2'] && $_POST['surnameV2'] && $_POST['salaryV2'] && $_POST['status']) {
        $_SESSION['userInfo'] = array('name' => $_POST['nameV2'],
            'surname' => $_POST['surnameV2'],
            'salary' => $_POST['salaryV2'],
            'status' => $_POST['status']
        );
    }
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>

<a href="/billboard-v2.php">On the Bulletin Board</a>






