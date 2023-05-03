<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/script.js"></script>
	<title>Контакты - Скатико</title>
	<meta name="description" content="Мы находимся по адресу г. Ставрополь, ул. Завокзальная 2/4. Телефон: +7 (909) 753-67-67 Режим работы: с 08:00 до 18:00 пн-сб (время работы по Москве).">
</head>
<body>
	<nav>
		<div class="logo">
			<a href="home.blade.php">Скатико</a><br>
			<!-- <span>Сырьё и ингредиенты для пищевой промышленности</span> -->
		</div>
		<ul class="menu">
			<li><a href="home.blade.php">Главная</a></li>
			<li class="active"><a href="kontakty.blade.php">Контакты</a></li>
			<li><a href="o-nas.blade.php">О нас</a></li>
		</ul>
	</nav>
	<div class="top-contacts">
		<ul>
			<li><a onclick="PopUpFeedback()">Запросить прайс-лист</a></li>
			<li>Телефон: <a href="tel:+79097536767">+7 (909) 753-67-67</a></li>
			<li>E-mail: <a href="mailto:info@skatiko.ru">info@skatiko.ru</a></li>
		</ul>
	</div>
	<div class="content">
		<section class="contacts">
			<h1>Контакты</h1>
			<div class="map">
				<iframe id="map_882562185" sandbox="allow-modals allow-forms allow-scripts allow-same-origin allow-popups allow-top-navigation-by-user-activation" width="100%" height="100%" frameborder="0"></iframe><script type="text/javascript">(function(e,t){var r=document.getElementById(e);r.contentWindow.document.open(),r.contentWindow.document.write(atob(t)),r.contentWindow.document.close()})("map_882562185", "PGJvZHk+PHN0eWxlPgogICAgICAgIGh0bWwsIGJvZHkgewogICAgICAgICAgICBtYXJnaW46IDA7CiAgICAgICAgICAgIHBhZGRpbmc6IDA7CiAgICAgICAgfQogICAgICAgIGh0bWwsIGJvZHksICNtYXAgewogICAgICAgICAgICB3aWR0aDogMTAwJTsKICAgICAgICAgICAgaGVpZ2h0OiAxMDAlOwogICAgICAgIH0KICAgICAgICAuYnVsbGV0LW1hcmtlciB7CiAgICAgICAgICAgIHdpZHRoOiAyMHB4OwogICAgICAgICAgICBoZWlnaHQ6IDIwcHg7CiAgICAgICAgICAgIGJveC1zaXppbmc6IGJvcmRlci1ib3g7CiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICNmZmY7CiAgICAgICAgICAgIGJveC1zaGFkb3c6IDAgMXB4IDNweCAwIHJnYmEoMCwgMCwgMCwgMC4yKTsKICAgICAgICAgICAgYm9yZGVyOiA0cHggc29saWQgIzAyODFmMjsKICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlOwogICAgICAgIH0KICAgICAgICAucGVybWFuZW50LXRvb2x0aXAgewogICAgICAgICAgICBiYWNrZ3JvdW5kOiBub25lOwogICAgICAgICAgICBib3gtc2hhZG93OiBub25lOwogICAgICAgICAgICBib3JkZXI6IG5vbmU7CiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAxMnB4OwogICAgICAgICAgICBjb2xvcjogIzI2MjYyNjsKICAgICAgICB9CiAgICAgICAgLnBlcm1hbmVudC10b29sdGlwOmJlZm9yZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7CiAgICAgICAgfQogICAgICAgIC5kZy1wb3B1cF9oaWRkZW5fdHJ1ZSB7CiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrOwogICAgICAgIH0KICAgICAgICAubGVhZmxldC1jb250YWluZXIgLmxlYWZsZXQtcG9wdXAgLmxlYWZsZXQtcG9wdXAtY2xvc2UtYnV0dG9uIHsKICAgICAgICAgICAgdG9wOiAwOwogICAgICAgICAgICByaWdodDogMDsKICAgICAgICAgICAgd2lkdGg6IDIwcHg7CiAgICAgICAgICAgIGhlaWdodDogMjBweDsKICAgICAgICAgICAgZm9udC1zaXplOiAyMHB4OwogICAgICAgICAgICBsaW5lLWhlaWdodDogMTsKICAgICAgICB9CiAgICA8L3N0eWxlPjxkaXYgaWQ9Im1hcCI+PC9kaXY+PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiIHNyYz0iaHR0cHM6Ly9tYXBzLmFwaS4yZ2lzLnJ1LzIuMC9sb2FkZXIuanM/cGtnPWZ1bGwmYW1wO3NraW49bGlnaHQiPjwvc2NyaXB0PjxzY3JpcHQ+KGZ1bmN0aW9uKGUsdCl7dmFyIHI9SlNPTi5wYXJzZShlKSxuPUpTT04ucGFyc2UodCk7ZnVuY3Rpb24gYShlKXtyZXR1cm4gZGVjb2RlVVJJQ29tcG9uZW50KGF0b2IoZSkuc3BsaXQoIiIpLm1hcChmdW5jdGlvbihlKXtyZXR1cm4iJSIrKCIwMCIrZS5jaGFyQ29kZUF0KDApLnRvU3RyaW5nKDE2KSkuc2xpY2UoLTIpfSkuam9pbigiIikpfURHLnRoZW4oZnVuY3Rpb24oKXt2YXIgZT1ERy5tYXAoIm1hcCIse2NlbnRlcjpbbi5sYXQsbi5sb25dLHpvb206bi56b29tfSk7REcuZ2VvSlNPTihyLHtzdHlsZTpmdW5jdGlvbihlKXt2YXIgdCxyLG4sYSxvO3JldHVybntmaWxsQ29sb3I6bnVsbD09PSh0PWUpfHx2b2lkIDA9PT10P3ZvaWQgMDp0LnByb3BlcnRpZXMuZmlsbENvbG9yLGZpbGxPcGFjaXR5Om51bGw9PT0ocj1lKXx8dm9pZCAwPT09cj92b2lkIDA6ci5wcm9wZXJ0aWVzLmZpbGxPcGFjaXR5LGNvbG9yOm51bGw9PT0obj1lKXx8dm9pZCAwPT09bj92b2lkIDA6bi5wcm9wZXJ0aWVzLnN0cm9rZUNvbG9yLHdlaWdodDpudWxsPT09KGE9ZSl8fHZvaWQgMD09PWE/dm9pZCAwOmEucHJvcGVydGllcy5zdHJva2VXaWR0aCxvcGFjaXR5Om51bGw9PT0obz1lKXx8dm9pZCAwPT09bz92b2lkIDA6by5wcm9wZXJ0aWVzLnN0cm9rZU9wYWNpdHl9fSxwb2ludFRvTGF5ZXI6ZnVuY3Rpb24oZSx0KXtyZXR1cm4icmFkaXVzImluIGUucHJvcGVydGllcz9ERy5jaXJjbGUodCxlLnByb3BlcnRpZXMucmFkaXVzKTpERy5tYXJrZXIodCx7aWNvbjpmdW5jdGlvbihlKXtyZXR1cm4gREcuZGl2SWNvbih7aHRtbDoiPGRpdiBjbGFzcz0nYnVsbGV0LW1hcmtlcicgc3R5bGU9J2JvcmRlci1jb2xvcjogIitlKyI7Jz48L2Rpdj4iLGNsYXNzTmFtZToib3ZlcnJpZGUtZGVmYXVsdCIsaWNvblNpemU6WzIwLDIwXSxpY29uQW5jaG9yOlsxMCwxMF19KX0oZS5wcm9wZXJ0aWVzLmNvbG9yKX0pfSxvbkVhY2hGZWF0dXJlOmZ1bmN0aW9uKGUsdCl7ZS5wcm9wZXJ0aWVzLmRlc2NyaXB0aW9uJiZ0LmJpbmRQb3B1cChhKGUucHJvcGVydGllcy5kZXNjcmlwdGlvbikse2Nsb3NlQnV0dG9uOiEwLGNsb3NlT25Fc2NhcGVLZXk6ITB9KSxlLnByb3BlcnRpZXMudGl0bGUmJnQuYmluZFRvb2x0aXAoYShlLnByb3BlcnRpZXMudGl0bGUpLHtwZXJtYW5lbnQ6ITAsb3BhY2l0eToxLGNsYXNzTmFtZToicGVybWFuZW50LXRvb2x0aXAifSl9fSkuYWRkVG8oZSl9KX0pKCdbeyJ0eXBlIjoiRmVhdHVyZSIsInByb3BlcnRpZXMiOnsiY29sb3IiOiIjZGIzOTIyIiwidGl0bGUiOiIwS0hRdXRDdzBZTFF1TkM2MEw0PSIsImRlc2NyaXB0aW9uIjoiUEhBK1BITjBjbTl1Wno3UW9OQzEwTGJRdU5DOElOR0EwTERRc2RDKzBZTFJpem84TDNOMGNtOXVaejRnMEtFZ01EZzZNREFnMExUUXZpQXhPRG93TUNEUXY5QzlMZEdCMExFZ0tOQ3kwWURRdGRDODBZOGcwWURRc05DeDBMN1JndEdMSU5DLzBMNGcwSnpRdnRHQjBMclFzdEMxS1R3dmNEND0iLCJ6SW5kZXgiOjEwMDAwMDAwMDB9LCJnZW9tZXRyeSI6eyJ0eXBlIjoiUG9pbnQiLCJjb29yZGluYXRlcyI6WzQyLjAwMzg1OCw0NS4wNTM0MzRdfSwiaWQiOjY1OX1dJywneyJsYXQiOjQ1LjA1MzQzODg0NjQ5NDk2LCJsb24iOjQyLjAwMzc3OTQxMTMxNTkyNSwiem9vbSI6MTZ9Jyk8L3NjcmlwdD48c2NyaXB0IGFzeW5jPSIiIHR5cGU9InRleHQvamF2YXNjcmlwdCIgc3JjPSJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbS9ndGFnL2pzP2lkPVVBLTE1ODg2NjE2OC0xIj48L3NjcmlwdD48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+KGZ1bmN0aW9uKGUpe2Z1bmN0aW9uIHQoKXtkYXRhTGF5ZXIucHVzaChhcmd1bWVudHMpfXdpbmRvdy5kYXRhTGF5ZXI9d2luZG93LmRhdGFMYXllcnx8W10sdCgianMiLG5ldyBEYXRlKSx0KCJjb25maWciLGUpLHdpbmRvdy5ndGFnPXR9KSgnVUEtMTU4ODY2MTY4LTEnKTwvc2NyaXB0PjwvYm9keT4=")</script>
			</div>
			<span><strong>Фактический адрес:</strong> Ставропольский край, г. Ставрополь, ул. Завокзальная 2/4.</span>
			<span><strong>Почтовый адрес:</strong> 355008, г. Ставрополь, а/я №1023.</span>
			<span><strong>Юридический адрес:</strong> 152115, Ярославская область, Ростовский район, с. Лазарцево, ул. Центральная 10, кв. 5.</span>
			<span><strong>Телефон:</strong> +7 (909) 753-67-67</span>
			<span><strong>Режим работы:</strong> с 08:00 до 18:00 пн-сб (время работы по Москве).</span>
			<span><strong>Доставка:</strong> 6 дней в неделю.</span>
		</section>
	</div>
	<div class="popup-feedback-container" id="popup-feedback-container">
		<div class="popup-feedback">
			<h2>Обратная связь</h2>
			<button class="close-popup-feedback" id="close-popup-feedback" onclick="PopUpFeedback()">Закрыть</button>
			<div class="popup-contact-form">
				<form class="main-contact-form" method="post" action="mail.php">
					<div class="name">
							<label for="name">Имя:</label><br>
							<input type="text" id="name" name="user-name" placeholder="Ваше имя" required="">
						</div>
						<div class="email">
							<label for="email">E-mail:</label><br>
							<input type="text" id="email" name="user-email" placeholder="Ваша электронная почта" required="">
						</div>
						<div class="phone">
							<label for="phone">Телефон:</label><br>
							<input type="text" id="phone" name="user-phone" placeholder="Ваш телефон" required="">
						</div>
						<div class="message">
							<label for="message">Сообщение:</label><br>
							<textarea rows="5" id="message" name="user-message" placeholder="Ваше сообщение"></textarea>
						</div>
					<button type="submit">Отправить</button>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="links">
			<div class="links-products">
				<h4>Продукция</h4>
				<ul>
					<li><a href="orekhi.blade.php">Орехи</a></li>
					<li><a href="sukhofrukty.blade.php">Сухофрукты</a></li>
					<li><a href="semena.blade.php">Семена</a></li>
					<li><a href="spetsii.blade.php">Специи</a></li>
					<li><a href="konservatsiya.blade.php">Консервация</a></li>
					<li><a href="siropy.blade.php">Сиропы</a></li>
					<li><a href="masla.blade.php">Масла</a></li>
					<!-- <li><a href="">Пищевые добавки</a></li> -->
				</ul>
			</div>
			<div class="links-company">
				<h4>Компания</h4>
				<ul>
					<li><a href="o-nas.blade.php">О нас</a></li>
					<li><a href="kontakty.blade.php">Контакты</a></li>
				</ul>
			</div>
			<!-- <div class="links-copyright">
				<h4>Документы</h4>
				<ul>
					<li><a href="">Политика конфиденциальности</a></li>
					<li><a href="">Лицензии</a></li>
				</ul>
			</div>  -->
		</div>
		<div class="company-info">
			<span>© 2021, Скатико. г. Ставрополь, ул. Завокзальная 2/4</span>
		</div>
	</footer>
</body></html>