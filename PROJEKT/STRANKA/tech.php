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
        <?php echo $lang['techTitle'] ?>
        </h1>
        <div class="tech-main">
            <div class="tech-table">
                <?php echo $lang['techtabulka'] ?>
            </div>

            <div class="tech-image">
                <a href="benchmark.php"><button class="cta">BENCHMARK</button></a>

                <img class = "disappear" src="img/telefon7.jpeg" width="600" height="350">
            </div>
        </div>
    </main>


    <?php include 'repetitive/footer.php';?>

</body>

</html>