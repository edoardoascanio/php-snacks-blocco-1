<?php

$name = "";
$mail = "";
$age = "";

$validMail = true;

if (key_exists("name", $GET)) {
    $name = $GET["name"];
}

if (key_exists("mail", $GET)) {
    $mail = $GET["mail"];
}

if (key_exists("age", $GET)) {
    $age = $GET["age"];
}

$result = true;

if(strlen ($name < 3)){
    $result = false;
}

if(!strpos ($mail, "@")){
    $result = false;
}


if(!strpos ($mail, ".", strpos ($mail, "@"))){
    $result = false;
}



if(!strpos ($mail, ".", strpos ($mail, "@"))){
    $result = false;
}


var_dump($name, $email, $age);

if (!is_int((int)$age)){
    $result = false;
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
   
    ?>
</body>
</html>