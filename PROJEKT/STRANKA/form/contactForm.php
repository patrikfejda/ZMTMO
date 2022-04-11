<?php

// echo $_POST["name"];
// echo $_POST["telephone"];
// echo $_POST["email"];

echo "Vasa sprava bola odoslana!";

$zapis = "Meno: ".$_POST["name"]." Telefon: ".$_POST["telephone"]." Email: ".$_POST["email"]." Predmet: ".$_POST["subject"]." Sprava: ".$_POST["message"];
file_put_contents('contactForm.txt',$zapis);

?>