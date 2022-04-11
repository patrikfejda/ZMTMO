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
        <?php echo $lang['KontaktujteNas'] ?>
        </h1>
        <div class="contact-main">
            <div class="contact-form">
                <div class="contact-form-formular">
                    <form class="bold" action="form/contactForm.php" method="post" >
                        <label for="name"><?php echo $lang['Meno'] ?></label></label>
                        <input type="text" id="name" name="name">

                        <label for="telephone"><?php echo $lang['kontaktCislo'] ?></label>
                        <input type="text" id="tel" name="telephone">

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">

                        <label for="subject"><?php echo $lang['predmet'] ?></label>
                        <input type="text" id="subject" name="subject">

                        <label for="message">Text</label>
                        <textarea id="message" name="message"
                            style="height:60px"></textarea>
                        <input class="bold" type="submit" value="Odoslať">
                    </form>
                </div>
            </div>
            <div class="contact-contact">
                <div>
                <?php echo $lang['kontaktKontakt'] ?>

                    <p>842 16 Bratislava</p>
                    <a href="mailto:xfejda@stuba.sk">
                        <p>xfejda@stuba.sk</p>
                    </a>
                    <p>0944 403 014</p>
                </div>
            </div>
        </div>







    </main>


    <?php include 'repetitive/footer.php';?>

</body>

</html>