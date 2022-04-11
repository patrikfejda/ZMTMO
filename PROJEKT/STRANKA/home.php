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
        <?php echo $lang['homeNazov'] ?>
        </h1>
        <section class="home-website-main">
            <section class="home-text-section">
                <p>
                <?php echo $lang['homeText1'] ?>
                </p>
                <p>
                <?php echo $lang['homeText2'] ?>

                </p>
                <p>
                <?php echo $lang['homeText3'] ?>
                </p>

                <a href="kupit.php"><button class="cta"><?php echo $lang['homeKupit'] ?></button></a>
            </section>
            <img class = "disappear" src="img/foto9.jpeg" width="400">
        </section>

        <div class="comments">
            <p class="bold">        <?php echo $lang['homeLetsComment'] ?>
</p>

                <form action="form/komentare.php" method="post" >
                    <label for="name">
                    <?php echo $lang['Meno'] ?>
                    </label>
                    <input type="text" id="name" name="name">

                    <label for="subject">
                    <?php echo $lang['homeKomentár'] ?>
                    </label>
                    <input type="text" id="Komentar" name="Komentar">

                    <input class="bold" type="submit" value="Odoslať">
                </form>
            <p><?php echo $lang['homeJozin'] ?></p>

            <p><?php echo $lang['homeMagian'] ?></p>

            <p>
            <?php 
                        

            
$subor = fopen("form/komentare.txt", "r");
echo fgets($subor);


fclose($subor);
            
            ?>
            </p>
        </div>
    </main>


    <?php include 'repetitive/footer.php';?>

</body>

</html>