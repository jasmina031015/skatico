<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/script.js"></script>
	<title>Семена - Скатико</title>
	<meta name="description" content="Кунжут белый и чёрный, семя подсолнечника и тыквы, семена чиа и льна с высокой степенью очистки! Семена являются неотъемлемой частью хлебопекарного производства. Используются как для отделки/декорирования хлебобулочных изделий и других готовых блюд, так и для непосредственного добавления в хлеба и выпечку.">
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
			<h1>Семена</h1>
			<p>Семена в Ставрополе! Кунжут белый и чёрный, семя подсолнечника и тыквы, семена чиа и льна с высокой степенью очистки! По твоему запросу мы можем проработать и найти семена, которые не представлены в прайс-листе.</p>
			<p>Семена являются неотъемлемой частью хлебопекарного производства. Используются как для отделки/декорирования хлебобулочных изделий и других готовых блюд, так и для непосредственного добавления в хлеба и выпечку.</p>
			<table>
				<tr>
					<th>Наименование продукта</th>
					<th>Страна</th>
					<th>Фасовка</th>
				</tr>
				<tr>
					<td>Кунжут белый</td>
					<td>Индия</td>
					<td>меш. 25 кг</td>
				</tr>
				<tr>
					<td>Кунжут черный</td>
					<td>Индия</td>
					<td>меш. 25 кг</td>
				</tr>
				<tr>
					<td>Мак пищевой</td>
					<td>Чехия</td>
					<td>меш. 25 кг</td>
				</tr>
				<tr>
					<td>Семена Льна</td>
					<td>Казахстан</td>
					<td>уп. 5 кг</td>
				</tr>
				<tr>
					<td>Семечки подсолнечника сушеные н/о</td>
					<td>Россия</td>
					<td>меш. 25 кг</td>
				</tr>
				<tr>
					<td>Семечки подсолнечника сушеные очищенные</td>
					<td>Россия</td>
					<td>меш. 25 кг</td>
				</tr>
				<tr>
					<td>Тыквенные семечки 13 мм н/о</td>
					<td>Китай</td>
					<td>меш. 25 кг</td>
				</tr>
				<tr>
					<td>Тыквенные семечки очищенные АА</td>
					<td>Китай</td>
					<td>меш. 25 кг</td>
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