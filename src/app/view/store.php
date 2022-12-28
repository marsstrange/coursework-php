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
    <title>Store</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com"/>
    <link rel="stylesheet" href="<?php echo $path . 'store_' . $finalTheme ?>"/>
    <link rel="icon" href="Rombek.ico" type="image/x-icon">
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
                <div class="el"><a href="albums.php"><?php echo $lang['music']; ?></a></div>
                <div class="el"><a href="videos.php"><?php echo $lang['videos']; ?></a></div>
                <div class="el"><mark><?php echo $lang['store']; ?></mark></div>
            </div>
            <div class="menu">
                <div class="el"><a href="store.php?lang=en"><?php echo $lang['en']; ?></a></div>
                <div class="el"><a href="store.php?lang=ru"><?php echo $lang['ru']; ?></a></div>
            </div>
            <div class="menu">
                <div class="el"><a href="store.php?theme=dark"><?php echo $lang['dark']; ?></a></div>
                <div class="el"><a href="store.php?theme=light"><?php echo $lang['light']; ?></a></div>
            </div>
            <div class="menu">
                <div class="el"><a><?php echo $username; ?></a></div>
            </div>
        </nav>

      </div>
      
    </div> 


    <section id="portfolio">
    <div class="project">
      <img class="project__image" src="res/1.jpg" />
      <p><mark>hoodie</mark></p>
      <div class="grid__overlay">
        <button class="viewbutton">view more</button>
        <button><a src="https://synthwave-radio.bandcamp.com/album/sirin ">buy</a></button>
      </div>
    </div>
    
    <div class="project">
      <img class="project__image" src="res/3.jpg" />
      <p><mark>t-shirt</mark></p>
      <div class="grid__overlay">
        <button class="viewbutton">view more</button>
      </div>
    </div>
    
    <div class="project">
      <img class="project__image" src="res/6.jpg" />
      <p><mark>sirin digital album </mark></p>
      <div class="grid__overlay">
        <button class="viewbutton">view more</button>
      </div>
    </div>
    
    <div class="project">
      <img class="project__image" src="res/4.jpg" />
      <p><mark>sirin vinyl</mark></p>
      <div class="grid__overlay">
        <button class="viewbutton">view more</button>
      </div>
    </div>
    <div class="project">
      <img class="project__image" src="res/5.jpg" />
      <p><mark>sirin bundle</mark></p>
      <h3 class="grid__title"> front-end</h3>
      <div class="grid__overlay">
        <button class="viewbutton">view more</button>
      </div>
    </div>
    
    <!-- <div class="project">
      <img class="project__image" src="7.jpg" />
      <p>pure css</p>
      <h3 class="grid__title"> front-end</h3>
      <div class="grid__overlay">
        <button class="viewbutton">view more</button>
      </div>
    </div> -->
    
    <div class="project">
      <img class="project__image" src="res/8.jpg" />
      <p><mark>sirin cassete</mark></p>
      <h3 class="grid__title"> full-stack</h3>
      <div class="grid__overlay">
        <button class="viewbutton">view more</button>
      </div>
    </div>
    
    <div class="project">
      <img class="project__image" src="res/2.jpg" />
      <p><mark>swan princess cassete</mark></p>
      <h3 class="grid__title"> ui/ux design</h3>
      <div class="grid__overlay">
        <button class="viewbutton">view more</button>
      </div>
    </div>
    <div class="overlay">
      <div class="overlay__inner">
        <button class="close"><mark>close X</mark></button>
        <img>
      </div>
    </div>
  </section>

    <div class="footer">

        <!-- getFooter.js -->

    </div>

    <script src="getFooter.js"></script> <!-- для выдачи футера -->
    <script src="menuAnimation.js"></script> <!--для header-->
    <script src="storeImageHandler.js"></script>
  
</body>
</html>