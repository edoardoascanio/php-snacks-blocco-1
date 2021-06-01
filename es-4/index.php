<?php

$maxNumbers = 15;
$numbersList = [];
for ($i = 1; $i <= 15; $i++) {
    $randomNum = rand(1, 100);

    if (!in_array($maxNumbers, $numbersList)) {
        $numbersList[] = $randomNum;
    } else {
        $i--;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    for ($i = 1; $i < count($numbersList); $i++) {
        echo "Numero casuale: " . $numbersList[$i] . " <br>\n";
    }
    ?>
</body>

</html>