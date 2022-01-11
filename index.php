<?php

echo "Coucou". "<br>";

$var = "Coucou";

$myArray = ['Coucou', 'Hello', 'Holla', 'Oye'];
echo $myArray[2]. "<br>";

for ($i = 0; $i < count($myArray); $i++){
    echo $myArray[$i]."<br>";
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>

    </ul>

</body>
</html>

<?php

foreach ($myArray as $item){
    echo $item;
}