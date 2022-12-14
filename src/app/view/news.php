<?php 
session_start();

require("../model/themeSetter.php");
require("../model/langSetter.php");
/*require("file_uploader.php");*/

?>


<!DOCTYPE html> <!-- Тип документа для браузера -->
<html lang="en"> 
<head>
    <meta charset="UTF-8"> <!-- Кодировка страницы -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Для совместимости с IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Для красивого отображения на мобильных устройствах-->
    <title>News</title> <!-- Заголовок страницы -->
    <link rel="stylesheet" href="<?php echo $path . $finalTheme ?>">
    <link rel="icon" href="res/Rombek.ico" type="image/x-icon">
</head>

<body>
	<div class="flex-2">
	    <div class="head">
	    	
	    	<nav class="header">
        		<div class="logo">
	            	<div class=" symbol" onclick="button_clicked(this)">
		                <div class="bar1"></div>
		                <div class="bar2"></div>
		                <div class="bar3"></div>
	            	</div>
            		<a href="Psybolord.php"><img src="res/Rombek.svg" width="60px"></a>
        		</div>
                <div class="menu">
                    <div class="el"><mark> <?php echo $lang['news']; ?></mark></div>
                    <div class="el"><a href="albums.php"><?php echo $lang['music']; ?></a></div>
                    <div class="el"><a href="videos.php"><?php echo $lang['videos']; ?></a></div>
                    <div class="el"><a href="store.php"><?php echo $lang['store']; ?></a></div>
                </div>
                <div class="menu">
                    <div class="el"><a href="news.php?lang=en"><?php echo $lang['en']; ?></a></div>
                    <div class="el"><a href="news.php?lang=ru"><?php echo $lang['ru']; ?></a></div>
                </div>
                <div class="menu">
                    <div class="el"><a href="news.php?theme=dark"><?php echo $lang['dark']; ?></a></div>
                    <div class="el"><a href="news.php?theme=light"><?php echo $lang['light']; ?></a></div>
                </div>
                <div class="menu">
                    <div class="el"><a><?php echo $username; ?></a></div>
                </div>
    		</nav>

	    </div>
	    
	    <div class="news">
	    	<div class="division">
		    	<div class="line">
		    		
		    		<!-- СОДЕРЖИМОЕ -->

		    		<div class="all-rows">
				    	<div class="all-news">
							

							</div>

						</div>
					</div>
		    	</div>
	    	</div>
    	</div>
    </div>	

    <div class="download">
        <form enctype="multipart/form-data" method="post" action="file_uploader.php" style="margin: 5px;">
            <div style="margin: 5px;"><p>Загрузите ваш pdf-файл на сервер</p></div>
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="5*1024*1024" /> -->
            <div style="margin: 5px;"><input type="file" name="uploadFile" accept=".pdf">
            <input type="submit" value="Отправить"></div>
        </form>

        <div style="margin: 5px;"><a href="file_returner.php?name=<?php echo $fileName ?>&view=inline">Открыть файл в браузере</a></div>
        <div style="margin: 5px;"><a href="file_returner.php?name=<?php echo $fileName ?>&view=attachment" download>Скачать файл</a></div>
    </div>        


	<div class="footer">
        <!-- <div class="division">
          <div class="black-footer"> -->
      <div class="black_line">
              
            <div class="social">
              <a href="https://www.facebook.com/psybolord"><div class="icon"><img src="res/Facebook.svg" width="100%"></div></a>
              <a href="https://vk.com/psblrd"><div class="icon"><img src="res/Vk.svg" width="100%" alt="Vk"></div></a>
              <a href="https://www.youtube.com/channel/UCKS373f0b7XZTo7C8pgz2lg?view_as=subscriber"><div class="icon"><img src="res/Youtube.svg" width="100%" alt="Youtube"></div></a>
              <a href="https://www.instagram.com/psybolord/"><div class="icon"><img src="res/Instagram.svg" width="100%" alt="Instagram"></div></a>
              <a href="https://soundcloud.com/psybolord"><div class="icon"><img src="res/Soundcloud.svg" width="100%" alt="Soundcloud"></div></a>
              <a href="https://t.me/psybolord"><div class="icon"><img src="res/Telegram.svg" width="100%" alt="Telegram"></div></a>
              <a href="https://psybolord.bandcamp.com/"><div class="icon"><img src="res/BandCamp.svg" width="100%" alt="Bandcamp"></div></a>
            </div>
            <!-- <img class="email" src="email.svg" alt="email"> -->  
            <div class="email"> <span class="bold"> &#128386;</span> chuka-kauchuka@mail.ru</div>
            <div class="rights">©  2021 Psybolord All rights reserved</div>
            <div class="Marsstrange">Made by Marsstrange</div>
            <!-- </div>
          </div>   -->


        </div>  
        
      </div> 

  </body>
</html>

	<script src="postMaker.js"></script> <!-- для выдачи карточек -->
    <script src="menuAnimation.js"></script> <!--для header-->
  
</body>
</html>