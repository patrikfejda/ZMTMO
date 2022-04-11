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
        <?php echo $lang['kupitKupit'] ?>        </h1>
        <div class="buy">
            <div class="buy-text">

                <h2 class="bold">
                <?php echo $lang['kupitText1'] ?>
                </h2>
                <h3 class="bold">
                <?php echo $lang['kupitText2'] ?>

                </h3>
                <p>
                    6.39" AMOLED FHD, Full Screen Display, 2340 x 1080 FHD+ 403 PPI, Gorilla Glass 5, Supports GAME
                    Turbo
                    2.0
                    64GB + 6GB RAM - Qualcomm Snapdragon 730 processor - 2.2GHz, Li-Po 4000
                    2.4G Wi-Fi / 5G Wi-Fi, Dual SIM
                    48MPix + 8MPix + 13MPix (124.8°)
                    20MPix Pop-up selfie camera
                    Video: 4K, 960 fps slow motion video
                </p>


                <a href="https://www.amazon.com/Xiaomi-Mi-9T-Display-Unlocked/dp/B07TRPH8SD">
                    <button class="cta buybutton"><?php echo $lang['kupitButton'] ?></button>
                </a>


            </div>
            <div class="buy-obrazok">
                <img class="buy-obrazok-obrazok disappear" src="img/telefon8.jpeg">
            </div>

        </div>

    </main>


    <?php include 'repetitive/footer.php';?>

</body>

</html>