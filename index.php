<?php
session_start();
isset($_GET["part"]) ? $main_menu=$_GET["part"] : $main_menu=0;
isset($_GET["sw"]) ? $left_menu=$_GET["sw"] : $left_menu=0;
//isset($_GET["id"]) ? $gal_id=$_GET["id"] : $gal_id=0;
settype($main_menu, "integer");
if (($main_menu<0)||($main_menu>3)) $main_menu=0;
settype($left_menu, "integer"); // Доробити, щоб перевіряло в кожному мейнменю окремо
if (($left_menu<0)||($left_menu>6)) $left_menu=0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ковані перила, ворота, перила із нержавіючої сталі у м.Хмельницькому</title>
	<?php
		require 'lib/style.php';
	?>
		<style type="text/css">
				TABLE.gal 	{border: 1px solid black;
						border-collapse: separate; /* Способ отображения границы */
						border-spacing: 15px;/* Расстояние между ячейками */
						padding: 0px;
						margin: auto;
						}
				TABLE.gal TD{border: 1px solid black;
						padding: 0px;
						margin: auto;
						text-align: center;
						}
		</style>
		<script type="text/javascript" src="lib/script_gal/js/prototype.js"></script>
		<script type="text/javascript" src="lib/script_gal/js/scriptaculous.js?load=effects,builder"></script>
		<script type="text/javascript" src="lib/script_gal/js/lightbox.js"></script>
		<link rel="stylesheet" href="lib/script_gal/css/lightbox.css" type="text/css" media="screen">
</head>
<body>
<div class="header">
	<div class="top_line">
	</div>
	<div class="logo">
<!--	<a href="http://www.rem-service.com.ua"> <img src="lib/img/logo.png" alt="logotype"> </a>		-->
	</div>
		<div class="phone1">
		<p class="phone_numb"><img src="lib/img/logo-viber.png">&ensp;+38 098 435 68 41</p>
	</div>
	<div class="phone2">
		<p class="phone_numb"><img src="lib/img/logo-viber.png">&ensp;+38 068 416 46 15</p>
	</div>
	<div class="lang_tool_bar">
	<ul class="menu_style_1">
		<li><a href="1"><img src="lib/img/ukr.gif" height="20" width="26"></a></li>
		<li><a href="2"><img src="lib/img/ru.gif" height="20" width="26"></a></li>
		<li><a href="3"><img src="lib/img/ukr.gif" height="20" width="26"></a></li>
	</ul>
	</div>
	<div class="main_navy">
	<ul class="menu_style_2">
		<li <?php if ($main_menu==0) echo'class="main_navy_pushed"'; else echo'class="main_navy_not_pushed"';?>><a href="index.php?part=0&sw=0">головна</a></li>
		<li <?php if ($main_menu==1) echo'class="main_navy_pushed"'; else echo'class="main_navy_not_pushed"';?>><a href="index.php?part=1&sw=0">металовироби</a></li>
		<li <?php if ($main_menu==2) echo'class="main_navy_pushed"'; else echo'class="main_navy_not_pushed"';?>><a href="index.php?part=2&sw=0">нержавіюча сталь</a></li>
		<li <?php if ($main_menu==3) echo'class="main_navy_pushed"'; else echo'class="main_navy_not_pushed"';?>><a href="index.php?part=3&sw=0">контакти</a></li>
	</ul>
	</div>
	<div class="preview_img">
		<img src="lib/img/<?php echo rand(1,3);?>.gif" width="100%" alt="preview_img">
	</div>
</div>
<div class="main_part">
	<div class="sidebar">
		<ul class="menu_style_3">
			<?php 		
			switch ($main_menu)
			{
			case 0:
				require 'lib/left_menu_0.php';
				break;
			case 1:
				require 'lib/left_menu_1.php';
				break;
			case 2:
				require 'lib/left_menu_2.php';
				break;
			case 3:
				require 'lib/left_menu_3.php';
				break;
			}
			?>	
		</ul>
	</div>
	<div class="content">
		<?php 
			
			switch ($main_menu)
			{
			case 0: // Головна
				require 'lib/main_page_content.php';
				break;
			case 1: // Чорний метал
				echo '<ul class="gal_style">';
				switch ($left_menu)
				{
				case 0: // Ворота
					for ($i=1; $i<=93; $i++) echo '<li><a href="gallery/1_0/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/1_0/0'.$i.'_small.jpg"></a></li>';
					break;
				case 1: // Перила
					for ($i=1; $i<=103; $i++) echo '<li><a href="gallery/1_1/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/1_1/0'.$i.'_small.jpg"></a></li>';
					break;
				case 2: // Двері
					for ($i=1; $i<=28; $i++) echo '<li><a href="gallery/1_2/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/1_2/0'.$i.'_small.jpg"></a></li>';
					break;
				case 3: // Забори
					for ($i=1; $i<=44; $i++) echo '<li><a href="gallery/1_3/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/1_3/0'.$i.'_small.jpg"></a></li>';
					break;
				case 4: // Козирки
					for ($i=1; $i<=51; $i++) echo '<li><a href="gallery/1_4/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/1_4/0'.$i.'_small.jpg"></a></li>';
					break;
				case 5: // Решітки
					for ($i=1; $i<=21; $i++) echo '<li><a href="gallery/1_5/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/1_5/0'.$i.'_small.jpg"></a></li>';
					break;
				case 6: // Інше
					for ($i=1; $i<=57; $i++) echo '<li><a href="gallery/1_6/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/1_6/0'.$i.'_small.jpg"></a></li>';
					break;
				default: // Ворота
					for ($i=1; $i<=93; $i++) echo '<li><a href="gallery/1_0/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/1_0/0'.$i.'_small.jpg"></a></li>';
				}
				echo '</ul>';
				break;
			case 2: // Нєрж
				echo '<ul class="gal_style">';
				switch ($left_menu)
				{
					case 0: // Перила
						for ($i=1; $i<=30; $i++) echo '<li><a href="gallery/2_0/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/2_0/0'.$i.'_small.jpg"></a></li>';
						break;
					case 1: // Пандуси
						for ($i=1; $i<=0; $i++) echo '<li><a href="gallery/2_1/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/2_1/0'.$i.'_small.jpg"></a></li>';
						break;
					case 2: // Інше
						for ($i=1; $i<=7; $i++) echo '<li><a href="gallery/2_2/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/2_2/0'.$i.'_small.jpg"></a></li>';
						break;
					default: // Перила
						for ($i=1; $i<=30; $i++) echo '<li><a href="gallery/2_0/0'.$i.'_big.jpg" rel="lightbox[roadtrip]"><img src="gallery/2_0/0'.$i.'_small.jpg"></a></li>';
				}
				echo '</ul>';
				break;
			case 3: // Контакти
				echo '<div class="contact1">Ми знаходимось за адресою:</div>';
				echo '<div class="contact2">м.Хмельницький, вул. Ярослава Мудрого 2/6</div>';
				echo '<div class="contact3"><img src="lib/img/logo-viber.png">&ensp;&ensp;+38 098 435 68 41</div>';
				echo '<div class="contact3"><img src="lib/img/logo-viber.png">&ensp;&ensp;+38 068 416 46 15</div>';
				echo '<div class="contact4">Раді бачити вас з понеділка по п\'ятницю з 8:00 до 17:00</div>';
				echo '<div class="contact5"><iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d758.3698072719827!2d26.99483230150177!3d49.40972049040324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x473206428b80d8c3%3A0x510bc936aa5d515f!2zUmVtLVNlcnZpcywgVG92LCDQstGD0LvQuNGG0Y8g0K_RgNC-0YHQu9Cw0LLQsCDQnNGD0LTRgNC-0LPQviwgMi82LCDQpdC80LXQu9GM0L3QuNGG0YzQutC40LksINCl0LzQtdC70YzQvdC40YbRjNC60LAsIDI5MDAw!3m2!1d49.409368!2d26.995124999999998!5e1!3m2!1sru!2sua!4v1571584698572!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>';
				break;
			}
			
			?>
	</div>
</div>
<div class="bottom_part">
	© ФОП Рекель М.Й., ТОВ "Рем-сервіс", м.Хмельницький, 1994-2019
</div>
</body>
</html>
