<?php

echo "Vas komentar bol zaslany!";

$zapis = $_POST["name"] . " - " . $_POST["Komentar"];
file_put_contents('komentare.txt',$zapis);

?>