<!DOCTYPE HTML>
<html>

<body>
    <form action="index.php" method="get">
        Cislo 1: <input type="text" name="firstnum"><br>
        Operator: <input type="text" name="operator"><br>
        Cislo 2: <input type="text" name="secondnum"><br>
        <input type="submit" value="Zaslat">
    </form>
</body>

</html>

<?php

echo $_GET["firstnum"]. $_GET["operator"] . $_GET["secondnum"] . "=";


if (isset($_GET["firstnum"]) && isset($_GET["secondnum"]) && isset($_GET["operator"])) {
$res = 0;
if ($_GET["operator"] =="+") {
    $res = $_GET["firstnum"] + $_GET["secondnum"];
}
else if ($_GET["operator"] =="-") {
    $res = $_GET["firstnum"] - $_GET["secondnum"];
}
else if ($_GET["operator"] =="*") {
    $res = $_GET["firstnum"] * $_GET["secondnum"];
}
else if ($_GET["operator"] =="/") {
    $res = $_GET["firstnum"] / $_GET["secondnum"];
}
echo $res;
}

?>