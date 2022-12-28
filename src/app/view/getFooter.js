//await ждет возвращения Promise от функции


async function getFooter() {
    /*.all-news — место в html, куда нужно вставить скрипт*/
    document.querySelector('.footer').innerHTML += `
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

		    </div>	

			`
}

getFooter();