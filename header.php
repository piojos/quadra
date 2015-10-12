<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<link rel="shortcut icon" href="img/favicon.ico" />
	<meta name="author" content="Raidho Aesthetics">

	<title>Quadra</title>

	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/jquery.fancybox.css">

	<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="js/gmaps.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>

	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.fancybox-buttons.js"></script>

	<script src="js/unslider.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			$(".list a.tab").click(function(event) {
				$(this).parent().addClass("current");
				$(this).parent().siblings().removeClass("current");
				var tab = $(this).attr("href");
				$(".tab-content").not(tab).css("display", "none");
				$(tab).fadeIn();
			});

// Show/Hide Menu on scroll
			var scrollTop = $(document).scrollTop();
			var header = $('.target').outerHeight();

			$(window).scroll(function() {
				var top = $(document).scrollTop();

				if (top > header){$('.target').addClass('hide');}
				else {$('.target').removeClass('hide');}

				if (top > scrollTop){$('.target').removeClass('visible');}
				else {$('.target').addClass('visible');}

				if (top > scrollTop){$('.target').removeClass('show');}

				scrollTop = $(document).scrollTop();
			});
		});
	</script>
</head>

<body onload="init()">
	<header class="target">
		<div class="head">
			<a href="javascript:void(0)" class="burger">
				<div></div><div></div><div></div>
			</a>

			<div class="logo">
				<a href="index.php">
					<img src="img/logo.svg" alt="albia">
				</a>
			</div>
		</div>

		<div class="pop">
			<div class="info">
				<p>carretera nacional 5904</br>
					monterrey, nuevo león, méxico, 64985</br>
					t. +52 (81)1505 0000 — f. +52 (81)1505 0015
					</br></br>
					BY EMBLEM CAPITAL
				</p>
			</div>

			<nav>
				<ul class="st-menu">
					<li>
						<a href="project.php">EL PROYECTO</a>
					</li>
					<li>
						<a href="office.php">OFFICE &amp; RETAIL</a>
					</li>
					<li>
						<a href="design.php">DISEÑO</a>
					</li>
					<li>
						<a href="distribution.php">DISTRIBUCIÓN</a>
					</li>
					<li>
						<a href="contact.php">CONTACTO</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
