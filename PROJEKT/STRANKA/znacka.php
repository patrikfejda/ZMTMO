<?php
    include "config/lang-conf.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Xiaomi Mi 9t</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <?php include 'repetitive/header.php';?>


    <main>
        <h1>
        <?php echo $lang['znackaTitle'] ?>
        </h1>
        <div class="znacka">

            <div class="znacka-text">
            <?php echo $lang['znackatext'] ?>
            </div>
            <div class="znacka-foto">
                <img class="tocka disappear" src="img/xiaomilogo.png">
            </div>
        </div>
    </main>


    <?php include 'repetitive/footer.php';?>

</body>

</html>