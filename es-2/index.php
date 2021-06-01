<?php

$mail = $GET["mail"];

$validMail = true;

if (strpos($mail, "@") == false) {
    $validMail = false;

} else if (strpos($mail, ".") == false){
    $validMail = false;
}
   
$result = $validMail ? "OK" : "KO";
?>

<?php

if ($validMail) {
    echo "<p>OK</p>";
    
}else {
    echo "<p>KO</p>";
}

?>