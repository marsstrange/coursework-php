<?php
session_start();

require("../model/themeSetter.php");
require("../model/langSetter.php");
/*require("file_uploader.php");*/

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Music</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@700&amp;family=Roboto:wght@300;400&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo $path . 'albums_' . $finalTheme ?>"/>
    <link rel="icon" href="res/Rombek.ico" type="image/x-icon">
  </head>
  <body>

    <div class="flex-2">
      <div class="head">
        
        <nav class="header">
            <div class="logo">
                <div class="symbol" onclick="button_clicked(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <a href="Psybolord.php"><img src="res/Rombek.svg" width="60px"></a>
            </div>
            <div class="menu">
                <div class="el"><a href="news.php"> <?php echo $lang['news']; ?></a></div>
                <div class="el"><mark><?php echo $lang['music']; ?></mark></div>
                <div class="el"><a href="videos.php"><?php echo $lang['videos']; ?></a></div>
                <div class="el"><a href="store.php"><?php echo $lang['store']; ?></a></div>
            </div>
            <div class="menu">
                <div class="el"><a href="albums.php?lang=en"><?php echo $lang['en']; ?></a></div>
                <div class="el"><a href="albums.php?lang=ru"><?php echo $lang['ru']; ?></a></div>
            </div>
            <div class="menu">
                <div class="el"><a href="albums.php?theme=dark"><?php echo $lang['dark']; ?></a></div>
                <div class="el"><a href="albums.php?theme=light"><?php echo $lang['light']; ?></a></div>
            </div>
            <div class="menu">
                <div class="el"><a><?php echo $username; ?></a></div>
            </div>
        </nav>

      </div>
      
    </div> 


    <section class="section">
      <div class="container">
        <!-- Галерея с четырьмя изображениями расположенных горизонтально -->
        <div class="gallery">
          <div class="gallery__flex">
            <div class="gallery__item"><img src="res/sirin.png" alt=""/></div>
            <div class="gallery__item"><img src="res/rise1.jpg" alt=""/></div>
            <div class="gallery__item"><img src="res/princess.png" alt=""/></div>
            <div class="gallery__item"><img src="res/rise2.jpg" alt=""/></div>
            <div class="gallery__item"><img src="res/psybo_alb.jpg" alt=""/></div>
            <div class="gallery__item"><img src="res/end.png" alt=""/></div>
          </div>
        </div>

      
      </div>
    </section>

    <div class="footer">

        <!-- getFooter.js -->

    </div>

    <script src="getFooter.js"></script> <!-- для выдачи футера -->
    <script src="menuAnimation.js"></script> <!--для header-->


</body>
</html>