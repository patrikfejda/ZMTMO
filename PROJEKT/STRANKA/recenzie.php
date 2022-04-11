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
        <?php echo $lang['RECENZIE'] ?>

        </h1>
        <reviews>
            <div class="recenzia">
                <div class="recenzia-vlavo">
                    <img class = "disappear" src="img/head.png" width="50">
                    <p>Patrik</p>
                </div>
                <div>
                    <div class="recenzia-plus-minus">
                        <p>
                        <?php echo $lang['recenziaPatrikPlus'] ?>

                        </p>
                        <p>
                        <?php echo $lang['recenziaPatrikMinus'] ?>
                        </p>
                    </div>
                    <p>
                    <?php echo $lang['recenziaPatrikText'] ?>

                    </p>
                </div>
            </div>
            <div class="recenzia">
                <div class="recenzia-vlavo">
                    <img class = "disappear" src="img/head.png" width="50">
                    <p>Marek</p>
                </div>
                <div>
                    <div class="recenzia-plus-minus">
                        <p>
                        <?php echo $lang['recenziaMarekPlus'] ?>
                        </p>
                        <p>
                        <?php echo $lang['recenziaMarekMinus'] ?>
                        </p>
                    </div>

                    <p>
                    <?php echo $lang['recenziaMarekText'] ?>
                    </p>
                </div>

            </div>
        </reviews>



    </main>
    <?php include 'repetitive/footer.php';?>

</body>

</html>