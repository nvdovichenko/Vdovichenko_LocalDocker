<?php
    require "../vendor/autoload.php";
    $client = new Google_Client();
    $client->setApplicationName('Google Sheets API PHP Quickstart');
    $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
    $client->setAuthConfig('../credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = '13ixJlPRuhkFhySTPfW5Suu65t5iHVZYfPrTC0-y42uE';
    $range = 'AdData!A1:D';
    $response = $service->spreadsheets_values->get($spreadsheetId, $range);
    $values = $response->getValues();
    var_dump($values);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/take_inf.php" method="GET">
    <label>
        Your e-mail:<br>
        <input type="email" name="emailNew"
               value="<?php
               if (isset($_SESSION["userEmail"]))
                   echo $_SESSION["userEmail"];
               else
                   echo ""; ?>"
               size="30" maxlength="30" required><br>
        Category:<br>
        <select name="categoryNew" required>
            <option>Cars</option>
            <option>Pets</option>
            <option>Phones</option>
            <option>Shoes</option>
        </select><br>
        Heading:<br>
        <input type="text" name="headingNew" value="" size="30" maxlength="30" required><br>
        Text:<br>
        <textarea cols="50" rows="10" name="textNew" placeholder="Enter text of your ad" required></textarea>
        <br><br>
        <input type="submit" name="PostNew" value="POST"> <input type="reset" value="ERASE"><br><br>
    </label>
</form>
<form action="/take_inf.php" method="GET">
    Choose category to show:
    <label>
        <select name="categorySelect" required>
            <option>Cars</option>
            <option>Pets</option>
            <option>Phones</option>
            <option>Shoes</option>
        </select>
    </label><br>
    <input type="submit" name="start" value="SHOW">
</form>
</body>
</html>
<br>
    <h1> Ads </h1>
<br>
    <?php
        $categories = scandir(__DIR__."/categories");
        $ads = [];
        foreach($categories as $category){
            if ($category != "." && $category != ".."){
                $ads[$category] = scandir("categories/$category");
            }
        };
        echo "<table border=1><caption>Ads</caption>";
        foreach($ads as $category => $arr){
            echo "<tr><th colspan=3 align=center>" . ucfirst($category) . "</th></tr>";
            foreach($arr as $ad){
                if ($ad != "." && $ad != ".."){
                    $file = fopen("categories/$category/$ad", "r");
                    $email = fgets($file);
                    $header = fgets($file);
                    $adText = fgets($file);
                    echo "<tr><td>$email</td><td>$header</td><td>$adText</td></tr>";
                }
            }
        }
        echo "</table>";
    ?>
<body>
<form>
    <label>
        <h1>Ads from GoogleSheets</h1>
        <table border=1>
        <tr><th>Category</th><th>Email</th><th>Header</th><th>Text</th></tr>
            <tbody>
            
            <?php
            foreach($values as $adData){
                echo "<tr>" . "<td>" . ucfirst($adData[0]) . "</td>";
                echo "<td>" . $adData[1] . "</td>";
                echo "<td>" . $adData[2] . "</td>";
                echo "<td>" . $adData[3] . "</td>" . "</tr>";
            }
            ?>
            </tbody>
        </table>
    </label>
</form>
</body>