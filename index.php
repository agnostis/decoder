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
<?php
$two = array(' ', 'а', 'б', 'в', 'г');
$three = array(' ', 'д', 'е', 'ж', 'з');
$four = array(' ', 'и', 'й', 'к', 'л');
$five = array(' ', 'м', 'н', 'о', 'п');
$six = array(' ', 'р', 'с', 'т', 'у');
$seven = array(' ', 'ф', 'х', 'ц', 'ч');
$eight = array(' ', 'ш', 'щ', 'ъ', 'ы');
$nine = array(' ', 'ь', 'э', 'ю', 'я');
?>
<form method='post'>
    <label>
        <textarea name="text" cols="40" rows="5"></textarea>
    </label>
    <br>
    <input name="Submit" type='submit' value='Отправить'>
</form>
<?php
$wordsArray = explode(' ', $_POST['text']);
$lengthArray = sizeof($wordsArray);
$decodeString = array();
for ($i = 0; $i < $lengthArray; $i++){
    switch (substr($wordsArray[$i], 0, 1)){
        case 2: array_push($decodeString,$two[strlen($wordsArray[$i])]);
            break;
        case 3: array_push($decodeString,$three[strlen($wordsArray[$i])]);
            break;
        case 4: array_push($decodeString,$four[strlen($wordsArray[$i])]);
            break;
        case 5: array_push($decodeString,$five[strlen($wordsArray[$i])]);
            break;
        case 6: array_push($decodeString,$six[strlen($wordsArray[$i])]);
            break;
        case 7: array_push($decodeString,$seven[strlen($wordsArray[$i])]);
            break;
        case 8: array_push($decodeString,$eight[strlen($wordsArray[$i])]);
            break;
        case 9: array_push($decodeString,$nine[strlen($wordsArray[$i])]);
            break;
    }
}
foreach ($decodeString as $key=>$value){
    if ($key == 0){
        echo mb_ucfirst($value);
        continue;
    }
    echo $value;
}

//метод для перевода русских букв в верхний регистр
function mb_ucfirst($text)
{
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}

?>
</body>
</html>
