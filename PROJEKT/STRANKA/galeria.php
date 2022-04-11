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
        <photos>
            <h1>
            <?php echo $lang['FOTOGRAFIE'] ?>         
            </h1>

            <?php
                for ($x = 0; $x <= 10; $x++) {
                    echo '<img src="img/foto'.$x. '.jpeg" class="galeria-foto">';
                }
            ?>


            <!-- ZAPIS BEZ PHP FOR LOPPU 
                
            <img src="img/foto1.jpeg" class="galeria-foto">
            <img src="img/foto2.jpeg" class="galeria-foto">
            <img src="img/foto3.jpeg" class="galeria-foto">
            <img src="img/foto4.jpeg" class="galeria-foto">
            <img src="img/foto5.jpeg" class="galeria-foto">
            <img src="img/foto6.jpeg" class="galeria-foto">
            <img src="img/foto7.jpeg" class="galeria-foto">
            <img src="img/foto8.jpeg" class="galeria-foto">
            <img src="img/foto9.jpeg" class="galeria-foto">
            <img src="img/foto10.jpeg" class="galeria-foto"> -->

            <img src="img/fotak.gif" class="galeria-foto">
            <img src="img/youtube.gif" class="galeria-foto">



            
        </photos>
        <videos>
            <h1>
            <?php echo $lang['VIDEA'] ?>

                
            </h1>

            <video controls>
                <source src="video/video.mp4" type="video/mp4">
            </video>

            <video controls>
                <source src="video/postava.mp4" type="video/mp4">
            </video>
        </videos>
        <sounds>
            <h1>
                
                <?php echo $lang['ZVONENIA'] ?>

            </h1>

            <div class="ringtones">
            <audio controls>
                <source src="sound/zvonenie1.mp3" type="audio/mpeg">
            </audio>
            <audio controls>
                <source src="sound/zvonenie2.mp3" type="audio/mpeg">
            </audio>
            <audio controls>
                <source src="sound/zvonenie3.mp3" type="audio/mpeg">
            </audio>
        </div>
        </sounds>


    </main>


    <?php include 'repetitive/footer.php';?>

</body>

</html>