<?php

require("../model/themeSetter.php");
require("../model/langSetter.php");
/*require("file_uploader.php");*/

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Videos</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link rel="stylesheet" href="<?php echo $path . 'videos_' . $finalTheme ?>"/>
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
                <a href="Psybolord.php"><img src="Rombek.svg" width="60px"></a>
            </div>
            <div class="menu">
                <div class="el"><a href="news.php"> <?php echo $lang['news']; ?></a></div>
                <div class="el"><a href="albums.php"><?php echo $lang['music']; ?></a></div>
                <div class="el"><mark><?php echo $lang['videos']; ?></mark></div>
                <div class="el"><a href="store.php"><?php echo $lang['store']; ?></a></div>
            </div>
            <div class="menu">
                <div class="el"><a href="videos.php?lang=en"><?php echo $lang['en']; ?></a></div>
                <div class="el"><a href="videos.php?lang=ru"><?php echo $lang['ru']; ?></a></div>
            </div>
            <div class="menu">
                <div class="el"><a href="videos.php?theme=dark"><?php echo $lang['dark']; ?></a></div>
                <div class="el"><a href="videos.php?theme=light"><?php echo $lang['light']; ?></a></div>
            </div>
            <div class="menu">
                <div class="el"><a><?php echo $username; ?></a></div>
            </div>
        </nav>

      </div>
      
    </div> 


    <section class="vid">

    <iframe class="pv" width="426" height="240" src="https://www.youtube.com/embed/AuMWpkj7UqM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <iframe class="pv" width="426" height="240" src="https://www.youtube.com/embed/Dgy0V3MhmXA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <iframe class="pv" width="426" height="240" src="https://www.youtube.com/embed/_vC6MchB9YU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <iframe class="pv" width="426" height="240" src="https://www.youtube.com/embed/_5Z4R3Ghd98" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <iframe class="pv" width="426" height="240" src="https://www.youtube.com/embed/8UuJ_E0agXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
   
  
    

  </section>

    <div class="footer">

        <!-- getFooter.js -->

    </div>

    <script src="getFooter.js"></script> <!-- для выдачи футера -->
    <script src="menuAnimation.js"></script> <!--для header-->


</body>
</html>