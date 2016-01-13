<?php include('header.php'); ?>
<div class="carousel carousel-base">
	<div class="carousel-inner">
		<div class="carousel-item">
			<a href="#" class="carousel-link" style="background-image: url('images/content/slide-1.jpg');"></a>
		</div>
		<div class="carousel-item">
			<a href="#" class="carousel-link" style="background-image: url('images/content/slide-1.jpg');"></a>
		</div>
		<div class="carousel-item">
			<a href="#" class="carousel-link" style="background-image: url('images/content/slide-1.jpg');"></a>
		</div>
	</div>
	<div class="carousel-controlls">
		<button class="prev"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
		<button class="next"><svg class="icon"><use xlink:href="#arrow"/></svg></button>
	</div>
</div>
<?php include('service-box.php'); ?>
<div class="ideas-box">
	<div class="box-title">Идеи интерьеров</div>
	<div class="row valign-wrapper ideas-list">
		<div class="col s12 m4 l4 valign valign-wrapper">
			<div class="card idea valign">
				<div class="card-img center-align">
					<a href="idea-detail.php" class="img-link" style="background-image:url('images/content/badroom-3.jpg');"></a>
				</div>
				<div class="card-content">
					<div class="card-title"><a href="idea-detail.php">Как создать интерьер с обложки:</a></div>
					<div class="card-text big-text">Уютная спальня в приглушенных тонах.</div>
				</div>
			</div>
		</div>
		<div class="col s12 m4 l4 valign valign-wrapper">
			<div class="card idea valign">
				<div class="card-img center-align">
					<a href="idea-detail.php" class="img-link" style="background-image:url('images/content/room.jpg');"></a>
				</div>
				<div class="card-content">
					<div class="card-title"><a href="idea-detail.php">Для молодой пары:</a></div>
					<div class="card-text big-text">Дизайн-проект двухуровневой спальни</div>
				</div>
			</div>
		</div>
		<div class="col s12 m4 l4 valign valign-wrapper">
			<div class="card idea valign">
				<div class="card-img center-align">
					<a href="idea-detail.php" class="img-link" style="background-image:url('images/content/floor.jpg');"></a>
				</div>
				<div class="card-content">
					<div class="card-title"><a href="idea-detail.php">Что делать, если вздулся линолеум:</a></div>
					<div class="card-text big-text">Простая инструкция</div>
				</div>
			</div>
		</div>
	</div>
	<a href="ideas.php" class="btn primary big big-width center">Посмотреть все идеи</a>
</div>
<?php include('subscribe-box.php'); ?>
<?php include('footer.php'); ?>