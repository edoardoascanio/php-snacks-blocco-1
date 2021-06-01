<?php

$partite = [
    [
        "home" => "Virtus-Roma",
        "visitors" => "Benetton-treviso",
        "puntiHome" => 75,
        "puntiVisitors" => 48,
    ],

    [
        "home" => "	Fortitudo Bologna",
        "visitors" => "Reyer Venezia",
        "puntiHome" => 68,
        "puntiVisitors" => 56,
    ],

    [
        "home" => "Mens Sana Siena",
        "visitors" => "	V.L. Pesaro",
        "puntiHome" => 59,
        "puntiVisitors" => 47,
    ],

    [
        "home" => "Olimpia Milano",
        "visitors" => "Benetton-treviso",
        "puntiHome" => 87,
        "puntiVisitors" => 66,
    ],

    
];

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

    <ul>
        <?php
        for ($i = 0; $i < count($partite); $i++) {
            $partitaCorrente = $partite[$i];
            $testoFinale = "";

            $squadre = $partitaCorrente["home"] ." - ". $partitaCorrente["visitors"];
            $punti = $partitaCorrente["puntiHome"] ." - ". $partitaCorrente["puntiVisitors"];

            $testoFinale = $squadre . " - " . $punti;

        ?>

            <li><?php echo $testoFinale; ?></li>

        <?php
        }
        ?>
    </ul>


</body>

</html>