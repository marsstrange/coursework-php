//await ждет возвращения Promise от функции

function getCookie(cookieName) {
	let cookie = {};
	document.cookie.split(';').forEach(function(el) {
		let [key,value] = el.split('=');
		cookie[key.trim()] = value;
	})
	return cookie[cookieName];
}

async function getPosts() {
	let res = await fetch('http://localhost/app/controller/postController.php/posts');
	let posts = await res.json();
	posts.forEach((post) => {
		if (getCookie('currLang') == 'ru'){
			post['title'] = post['title_rus'];
		}
		if (post['id'] % 2 == 1) {
			post['pic'] = '../view/res/' + post['pic'];

			/*.all-news — место в html, куда нужно вставить скрипт*/
			document.querySelector('.all-news').innerHTML += `
			<div class="news-wrapper">
				<a href="" class="product">
					<div class="product-photo">
						<img src="${post.pic}" alt="Avatar" style="width:100%">
					</div>
					<p><i class="cards-date">${post.p_date}</i></p>
					<p><b class="cards-text">${post.title}</b></p>
										
				</a>

			</div>

			`
		}

		else {
			post['pic'] = '../view/res/' + post['pic'];
			document.querySelector('.all-news').innerHTML += `
			<div class="news-wrapper">
				<a href="" class="product-1" position="top:">
					<div class="product-1-photo">
						<img src="${post.pic}" alt="Avatar" style="width:100%">
					</div>
						<p><i class="cards-date">${post.p_date}</i></p>
						<p><b class="cards-text">${post.title}</b></p>
				</a>

			</div>
							
			`

		}
		
	})
}

getPosts();