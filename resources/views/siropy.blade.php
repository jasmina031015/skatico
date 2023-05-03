<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/script.js"></script>
	<title>Сиропы - Скатико</title>
	<meta name="description" content="Сироп из топинамбура натуральный и с добавками, сироп овсяный, рисовый, ячменный и пшеничный в наличии. Хорошо зарекомендовал себя на рынке здорового питания как экологически чистый продукт без сахара. Является идеальным заменителем сахара, поэтому сироп можно использовать при приготовлении различных напитков и десертов.">
</head>
<body>
	<nav>
		<div class="logo">
			<a href="home.blade.php">Скатико</a><br>
			<!-- <span>Сырьё и ингредиенты для пищевой промышленности</span> -->
		</div>
		<ul class="menu">
			<li class="active"><a href="home.blade.php">Главная</a></li>
			<li><a href="kontakty.blade.php">Контакты</a></li>
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
		<section class="price">
			<h1>Сиропы</h1>
			<p>Сироп из топинамбура в Ставрополе! Сироп из топинамбура натуральный и с добавками, сироп овсяный, рисовый, ячменный и пшеничный в наличии.</p>
			<p>Хорошо зарекомендовал себя на рынке здорового питания как экологически чистый продукт без сахара. Является идеальным заменителем сахара, поэтому сироп можно использовать при приготовлении различных напитков и десертов.</p>
			<table>
				<tr>
					<th>Наименование продукта</th>
					<th>Страна</th>
					<th>Фасовка</th>
				</tr>
				<tr>
					<th colspan="3">Сиропы</th>
				</tr>
				<tr>
					<td>Сироп из топинамбура 70%, 5 л (пластик)</td>
					<td>Россия</td>
					<td>6,7 кг</td>
				</tr>
				<tr>
					<td>Сироп из топинамбура натуральный, пл. бут. 1 л</td>
					<td>Россия</td>
					<td>1,36 кг</td>
				</tr>
				<tr>
					<td>Сироп из топинамбура натуральный, пл. бут. 250 мл</td>
					<td>Россия</td>
					<td>330 г</td>
				</tr>
				<tr>
					<td>Сироп из топинамбура с брусникой, пл. бут. 250 мл</td>
					<td>Россия</td>
					<td>330 г</td>
				</tr>
				<tr>
					<td>Сироп из топинамбура с вишней, пл. бут. 250 мл, 330 г</td>
					<td>Россия</td>
					<td>330 г</td>
				</tr>
				<tr>
					<td>Сироп из топинамбура с имберем, пл. бут. 250 мл</td>
					<td>Россия</td>
					<td>330 г</td>
				</tr>
				<tr>
					<td>Сироп из топинамбура с какао, пл. бут. 250 мл</td>
					<td>Россия</td>
					<td>330 г</td>
				</tr>
				<tr>
					<td>Сироп из топинамбура с клубникой, пл. бут. 250 мл</td>
					<td>Россия</td>
					<td>330 г</td>
				</tr>
				<tr>
					<td>Сироп из топинамбура с черникой, пл. бут. 250 мл</td>
					<td>Россия</td>
					<td>330 г</td>
				</tr>
				<tr>
					<td>Сироп овсяный органический, пл. бут. 5 л</td>
					<td>Бельгия</td>
					<td>6,5 кг</td>
				</tr>
				<tr>
					<td>Сироп рисовый органический, пл. бут. 5 л</td>
					<td>Бельгия</td>
					<td>6,5 кг</td>
				</tr>
				<tr>
					<td>Сироп ячменный органический, пл. бут. 5 л</td>
					<td>Бельгия</td>
					<td>6,5 кг</td>
				</tr>
				<tr>
					<td>Сироп пшеничный органический, пл. бут. 5 л</td>
					<td>Бельгия</td>
					<td>6,5 кг</td>
				</tr>
				<tr>
					<td>Сироп (пекмез) из фиников, пл. бут. 5 л</td>
					<td>Турция</td>
					<td>6,5 кг</td>
				</tr>
			</table>
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
	<div class="back-to-top-wrapper">
		<a class="back-to-top-link" aria-label="Scroll to Top" onclick="BackToTop()">Наверх</a>
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
	<script>
		function BackToTop() {
			window.scroll({
				top: 0, 
				behavior: 'smooth'
			});
		}
	</script>
</body></html>