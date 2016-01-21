<!DOCTYPE html>
<html>
<head>
	<title>Строймаркет</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,300,300italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<!--link rel="shortcut icon" href="favicon.ico" type="image/x-icon"-->
	<!--link rel="shortcut icon" href="favicon.png" type="image/png"-->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="https://cdn.rawgit.com/iserdmi/afterlag-js/2.0.2/dist/jquery.afterlag.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
	<script src="js/modernizr-custom.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/svg-lib.js"></script>
	<script src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="template_styles.css" />
</head>
<body>
<div id="svg-placeholder" class="hide"></div>
<div class="layout">
<div class="page-aside">
	<button class="btn btn-icon btn-close-menu"><svg class="icon"><use xlink:href="#close"/></svg></button>
	<div class="page-aside-inner">
		<div class="logo-box">
			<a href="home.php"><img src="images/logo-red.png"/></a>
		</div>
		<div class="mobile-menu">
			<ul class="menu collapsible">
				<li class="menu-item parent">
					<a class="menu-link" href="catalog.php">Каталог</a>
					<div class="collapsible-header"><div class="triangle"></div></div>
					<ul class="submenu collapsible-body">
						<li class="menu-item"><a href="category.php" class="menu-link">Общестрой</a></li>
						<li class="menu-item"><a href="category.php" class="menu-link">Декор</a></li>
						<li class="menu-item"><a href="category.php" class="menu-link">Двери</a></li>
						<li class="menu-item"><a href="category.php" class="menu-link">Пол</a></li>
						<li class="menu-item"><a href="category.php" class="menu-link">Плитка</a></li>
						<li class="menu-item"><a href="category.php" class="menu-link">Сантехника</a></li>
					</ul>
				</li>
				<li class="menu-item"><a class="menu-link" href="ideas.php">Идеи</a></li>
				<li class="menu-item"><a class="menu-link" href="lawyers.php">Юр. услуги</a></li>
				<li class="menu-item"><a class="menu-link" href="work.php">Работа у нас</a></li>
				<li class="menu-item"><a class="menu-link" href="questions.php">Вопросы</a></li>
				<li class="menu-item"><a class="menu-link" href="about.php">О компании</a></li>
				<li class="menu-item"><a class="menu-link" href="contacts.php">Контакты</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="page">
	<div class="header-wrapper">
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="menu-box col s1 m1 hide-on-large-only">
						<button class="btn-menu btn btn-icon hide-on-large-only">
							<svg class="icon"><use xlink:href="#menu"/></svg>
						</button>
					</div>
					<div class="logo-box col s6 offset-s2 m4 offset-m3 l4 offset-l4">
						<a class="img-link logo" href="home.php"><img src="images/logo.png"/></a>
					</div>
					<div class="search-box col s1 offset-s2 m4 l4 center-align">
						<button class="search-btn btn btn-icon right hide-on-med-and-up"><svg class="icon"><use xlink:href="#search"/></svg></button>
						<div class="search-field-box">
							<input type="text" class="search inputtext" id="h-search" />
							<!-- я не знаю, цеплять ли на эту кнопку собсна поиск, или отправлять запрос по ентеру, но эта кнопка закрывает блок на мобильной версии -->
							<button class="search-btn btn btn-icon right"><svg class="icon"><use xlink:href="#search"/></svg></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-menu hide-on-med-and-down">
			<div class="container">
				<ul class="menu">
					<li class="menu-item parent">
						<a class="menu-link" href="catalog.php">Каталог</a>
						<ul class="submenu">
							<li class="menu-item">
								<a href="category.php" class="menu-link">Общестрой</a>
								<ul class="submenu">
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Сухие строительные смеси</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Пиломатериалы и листовые материалы</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Изоляция</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Кровля, профнастил и водостоки</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Лакокрасочные материалы</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Потолочные системы</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Инструмент</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Крепеж</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="category.php" class="menu-link">Декор</a>
								<ul class="submenu">
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Обои</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Стеновые панели</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Фрески, лепнина, декоры</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Шторы и карнизы</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="category.php" class="menu-link">Двери</a>
								<ul class="submenu">
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Входные двери</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Межкомнатные двери и арки</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="category.php" class="menu-link">Пол</a>
								<ul class="submenu">
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Линолеум</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Ковролин</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Ламинат</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Виниловая плитка</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Паркет и пробковое покрытие</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Ковры</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Грязещатные коврики</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="category.php" class="menu-link">Плитка</a>
								<ul class="submenu">
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Керамическая плитка</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Керамогранит</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Декоративный камень</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Мозайка</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Тротуарная плитка</a></li>
								</ul>
							</li>
							<li class="menu-item">
								<a href="category.php" class="menu-link">Сантехника</a>
								<ul class="submenu">
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Ванны</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Душевые кабины</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Санфаянс</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Мебель для ванной и аксесуары</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Смесители</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Системы отопления</a></li>
									<li class="menu-item"><a href="subcategory.php" class="menu-link">Инженерная сантехника</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="menu-item"><a class="menu-link" href="ideas.php">Идеи</a></li>
					<li class="menu-item"><a class="menu-link" href="lawyers.php">Юр. услуги</a></li>
					<li class="menu-item"><a class="menu-link" href="work.php">Работа у нас</a></li>
					<li class="menu-item"><a class="menu-link" href="questions.php">Вопросы</a></li>
					<li class="menu-item"><a class="menu-link" href="about.php">О компании</a></li>
					<li class="menu-item"><a class="menu-link" href="contacts.php">Контакты</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="workarea-wrapper">
		<div class="workarea container">