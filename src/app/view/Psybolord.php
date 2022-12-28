<?php
//session_start();

require("../model/themeSetter.php");
require("../model/langSetter.php");

?>

<!DOCTYPE html> <!-- Тип документа для браузера -->
<html lang="en"> 
<head>
    <meta charset="UTF-8"> <!-- Кодировка страницы -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Для совместимости с IE-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Для красивого отображения на мобильных устройствах-->
    <title>Psybolord</title> <!-- Заголовок страницы -->
    <link rel="stylesheet" href="<?php echo $path . 'main_' . $finalTheme ?>"/>

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
                    <div class="el"><a href="albums.php"><?php echo $lang['music']; ?></a></div>
                    <div class="el"><a href="videos.php"><?php echo $lang['videos']; ?></a></div>
                    <div class="el"><a href="store.php"><?php echo $lang['store']; ?></a></div>
		        </div>
                <div class="menu">
                    <div class="el"><a href="Psybolord.php?lang=en"><?php echo $lang['en']; ?></a></div>
                    <div class="el"><a href="Psybolord.php?lang=ru"><?php echo $lang['ru']; ?></a></div>
                </div>
                <div class="menu">
                    <div class="el"><a href="Psybolord.php?theme=dark"><?php echo $lang['dark']; ?></a></div>
                    <div class="el"><a href="Psybolord.php?theme=light"><?php echo $lang['light']; ?></a></div>
                </div>
                <div class="menu">
                    <div class="el"><a><?php echo $username; ?></a></div>
                </div>
    		</nav>

	    </div>
	    <div class="main_psy">
	    	<img class="first_main"src="res/main1.png">
	    </div>
	    <div class="news">
	    	
	    	<div class="division">

		    	<div class="black_line"></div>
		    	<div class="text">NEWS</div>
		    	<div class="line">
		    		
		    		<!-- СОДЕРЖИМОЕ -->
		    	<div class="all-news">
					
					<div class="news-wrapper">
						<a href="" class="product">
							<div class="product-photo">
								<img src="res/news1.jpg" alt="Avatar" style="width:100%">
							</div>
							<p><i class="cards-date">18.11.21</i></p>
							<p><b class="cards-text">Black Friday bundle</b></p>
							<!-- <p><i class="cards-read">Read more →</i></p>  -->
						</a>

					</div>

						<div class="news-wrapper">
							<a href="" class="product-1" position="top:">
								<div class="product-1-photo">
									<img src="res/news2.jpg" alt="Avatar" style="width:100%">
								</div>
								<p><i class="cards-date">18.10.21</i></p>
								<p><b class="cards-text">Psybolord at ‘Gradient’</b></p>
								<!-- <p><i class="cards-read">Read more →</i></p>  -->
							</a>

						</div>
					
					<div class="news-wrapper">
						<a href="" class="product">
							<div class="product-photo">
								<img src="res/Electro1.png" alt="Avatar" style="width:100%">
							</div>
							<p><i class="cards-date">18.10.21</i></p>
							<p><b class="cards-text">Psybolord at ‘Electrofest’</b></p>
							<!-- <p><i class="cards-read">Read more →</i></p>  -->
						</a>

					</div>

					<div class="news-wrapper">
						<a href="" class="product-1">
							<div class="product-1-photo">
								<img src="res/news4.jpg" alt="Avatar" style="width:100%">
							</div>
							<p><i class="cards-date">18.10.21</i></p>
							<p><b class="cards-text">Psybolord at ‘RETROWAVE NIGHT’</b></p>
							<!-- <p><i class="cards-read">Read more →</i></p>  -->
						</a>

					</div>
				</div>

				<div><i class="more"><a class="smth" href="news.php">More →</a></i></div>

		    	</div>

		    	

	    	</div>
	    	</div>

	    </div>	

	    <div class="latest">
	    	<div class="division">

		    	<div class="black_line"></div>
		    	<div class="text">LATEST RELEASE</div>
		    	<div class="line"></div>
		    	<img class="sirin" src="res/sirin.svg" style="width:37%">
		    		<div class="sirin-text">Sirin</div>
			    	<a class="button listen" href="https://band.link/BR9Kp">
	  					<!-- <i class="fa fa-user-plus"></i> -->
	  					<span>Listen now</span>
					</a>

					<a class="button buy" href="store.php">
	  					<!-- <i class="fa fa-user-plus"></i> -->
	  					<span>Buy</span>
					</a>
		    </div>		
	    </div>


	    <div class="videos">
	    	<div class="division">
		    	<div class="black_line"></div>
			    <div class="text">VIDEOS</div>
			    <div class="line"></div>
			    <div class="seasons-text">Russian seasons (official video)</div>
				<iframe width="720" height="405" src="https://www.youtube.com/embed/_vC6MchB9YU?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div><i class="more-videos"><a class="smth" href="videos.php">More →</a></i></div>

				
			</div>
	    </div>


	    <div class="footer">

            <!-- getFooter.js -->
	    	
	    </div>

    <script src="getFooter.js"></script> <!-- для выдачи футера -->
    <script src="menuAnimation.js"></script> <!--для header-->
	
</body>
</html>