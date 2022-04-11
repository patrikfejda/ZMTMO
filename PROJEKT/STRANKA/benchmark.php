<?php
    include "config/lang-conf.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,
user-scalable=yes">
    <title>Xiaomi Mi 9t</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <?php include 'repetitive/header.php'; ?>

    <main>
        <h1>
            BENCHMARK
        </h1>
        <p class="benchmark-score bold">
        <?php echo $lang['benchamarkText'] ?>


        </p>
        <div class="benchmark-main">
            <div class="benchmark-table">
                <table>
                    <thead>
                        <tr>
                            <th><?php echo $lang['Telefon'] ?></th>
                            <th><?php echo $lang['Skore'] ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Oppo K5</td>
                            <td>279 000</td>
                        </tr>
                        <tr>
                            <td>OnePlus 6</td>
                            <td>277 000</td>
                        </tr>
                        <tr>
                            <td>Xiaomi Mi Mix 3</td>
                            <td>276 543</td>
                        </tr>
                        <tr>
                            <td>Xiaomi Mi Note 10 r</td>
                            <td>268 000</td>
                        </tr>
                        <tr>
                            <td>Xiaomi Pocophone F1</td>
                            <td>267 134</td>
                        </tr>
                        <tr>
                            <td>Xiaomi Mi 9t</td>
                            <td>265 231</td>
                        </tr>
                        <tr>
                            <td>Samsung Galaxy A71</td>
                            <td>265 000</td>
                        </tr>
                        <tr>
                            <td>Xiaomi Mi Note 10 Li</td>
                            <td>264 000</td>
                        </tr>
                        <tr>
                            <td>Xiaomi Mi CC9 Pro</td>
                            <td>261 000</td>
                        </tr>
                        <tr>
                            <td>Xiaomi Mi Mix 2S</td>
                            <td>257 837</td>
                        </tr>
                        <tr>
                            <td>Sony Xperia XZ2 Premium</td>
                            <td>257 579</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="benchmark-buttons">

                <a href="kupit.php"><button class="cta"><?php echo $lang['homeKupit'] ?></button></a>
                <a href="tech.php"><button class="cta cta-small"><?php echo $lang['SpatNaTech'] ?></button></a>
            </div>
        </div>

    </main>

    <?php include 'repetitive/footer.php';?>
    

</body>

</html>