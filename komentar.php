<?php


$name= $_POST["ime"];
$text= $_POST["misljenje"];


    $write= FOPEN("com.txt", "a+");
    fwrite($write, "<u><b> $name</b></u> <br>$text<br> ");
    fclose($write);
 
    header('Location: utisci.php');
?>