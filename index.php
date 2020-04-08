<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Kaba.com</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Boat house Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smart phone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/JiSlider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<?php
include("Koneksi.php");
?>

<body>
	<!-- header -->
	<div class="banner-top">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="agileinfo-phone">
						<p><i class="fa fa-volume-control-phone" aria-hidden="true"></i> +62 822 8366 9007</p>
					</div>
					<div class="agileinfo-phone agileinfo-map">
						<p><i class="fa fa-map-marker" aria-hidden="true"></i> Jln. Parak Karakah 21,Padang.</p>
					</div>
					<div class="search-grid">
						<form action="#" method="post">
							<input type="text" name="subscribe" placeholder="Subscribe" class="big-dog" name="Subscribe" required="">
							<button class="btn1"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>

		<div class="w3_navigation">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="?page=home">Kaba.com</a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="menu menu--iris">
							<ul class="nav navbar-nav menu__list">
								<li class="menu__item"><a href="?page=Home" class="menu__link">Home</a></li>
								<li class="menu__item"><a href="?page=Berita" class="menu__link">News</a></li>
								<li class="menu__item"><a href="?page=Gallery" class="menu__link">Gallery</a></li>
								<li class="dropdown menu__item">
									<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown">Writer<b class="caret"></b></a>
									<ul class="dropdown-menu agile_short_dropdown">


										<li><a href="?page=Team">Team Penulis</a></li>
										<li><a href="?page=Offer">Paper</a></li>


									</ul>
								</li>
								<li class="menu__item"><a href="?page=Contact" class="menu__link">Contact </a></li>
							</ul>
						</nav>
					</div>
				</nav>

			</div>
		</div>
		<!-- //header -->

		<!-- banner -->
		<?php
		include("Conten.php");
		?>
		<!-- //banner -->

		<!--about-->
		<!-- //testimonials -->

		<!-- footer -->
		<div class="footer">
			<div class="container">
				<div class="agile_footer_copy">
					<div class="w3agile_footer_grids">
						<div class="col-md-4 w3agile_footer_grid">
							<h3>Tentang Perusahaan</h3>
							<p>Perusahaan kami bergerak dalam bidang IT<span>Kami ingin menciptakan generasi dengan kemampuan dalam bidang IT</span></p>
						</div>
						<div class="col-md-4 w3agile_footer_grid">
							<h3>Info Kontak</h3>
							<ul>
								<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Jln. Parak karakah No.25 Lubuk Begalung, <span>Padang.</span></li>
								<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">EgovaRivaGustino@gmail.com</a></li>
								<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0822-8366-9007</li>
							</ul>
						</div>
						<div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
							<h3>Menu</h3>
							<ul>
								<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="index.html">Home</a></li>
								<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="gallery.html">Gallery</a></li>
								<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="about.html">About</a></li>
								<li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="contact.html">Contact</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="w3_agileits_copy_right_social">
					<div class="col-md-6 agileits_w3layouts_copy_right">
						<p>&copy; 2018 Boat house. All rights reserved | Design by <a target="_blank" href="http://www.Google.com/">Egova</a></p>
					</div>
					<div class="col-md-6 w3_agile_copy_right">
						<ul class="agileinfo_social_icons">
							<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //footer -->


		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		<!-- js -->
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/JiSlider.js"></script>
		<script>
			$(window).load(function() {
				$('#JiSlider').JiSlider({
					color: '#fff',
					start: 3,
					reverse: true
				}).addClass('ff')
			})
		</script>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36251023-1']);
			_gaq.push(['_setDomainName', 'jqueryscript.net']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<script src="js/jarallax.js"></script>
		<script src="js/SmoothScroll.min.js"></script>
		<script type="text/javascript">
			/* init Jarallax */
			$('.jarallax').jarallax({
				speed: 0.5,
				imgWidth: 1366,
				imgHeight: 768
			})
		</script>

		<!-- start-smoth-scrolling -->
		<!-- //for bootstrap working -->
		<!-- stats -->
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
		<!-- //stats -->
		<!-- start-smooth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
		</script>
		<!-- start-smooth-scrolling -->
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/

				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script>
		<!-- //here ends scrolling icon -->

		<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 1,
					animationSpeed: 1000,
					autoPlay: false,
					autoPlaySpeed: 3000,
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint: 480,
							visibleItems: 1
						},
						landscape: {
							changePoint: 640,
							visibleItems: 1
						},
						tablet: {
							changePoint: 768,
							visibleItems: 1
						}
					}
				});

			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>


</body>

</html>