<!Doctype html>
<html>
    <head>
	<title>RD3 Home</title>
	<!-- Compiled and minified CSS -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="google-site-verification" content="ZsfafCwwmv_kInxb4918GIIwsPo6SvWMiN057_P3634" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,500,600,700|Roboto+Mono|Montserrat:300|Poppins:400,500|Raleway:200,400,500|Roboto+Mono" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/assets/css/style.css' ?>">

	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

	</script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script>
		$(document).ready(function(){
        $('.modal').modal({
          onOpenEnd: function(el) {
    	$(el).find('.tabs').tabs({ swipeable: true });
    }
        });
			var mouse = $(".icon-scroll")
			$('select').formSelect();
			$('.sidenav').sidenav();
			$('.carousel.carousel-slider').carousel({
    fullWidth: true,
				indicators:true
  });



			// move next carousel
   $('.moveNextCarousel').click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $('.carousel').carousel('next');
   });

   // move prev carousel
   $('.movePrevCarousel').click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $('.carousel').carousel('prev');
   });
			$(window).scroll(function(){
				if ($(this).scrollTop()>40){
					mouse.hide();
				}
				else{
					mouse.show();
				}
			})


		});

		</script>

<?php wp_head() ?>

</head>

	<body class=""><div class='body-inner'>
	<!----INTRO--->
	<header class="full">

		<nav class="white">
			<div class="nav-wrapper">
				<a href="#" class="brand-logo "><img src="wp-content/themes/rd3studios/assets/images/social/logo.svg"></a>
				<a href="#" data-target='mobile-demo' class='sidenav-trigger'><i class="material-icons menu-bta">menu</i></a>
				<ul id='nav-mobile' class="right menu hide-on-med-and-down">
					<li><a href="#service-section">Services</a></li>
					<li><a href="#process-section">Our Process</a></li>
					<li><a href="#">Works</a></li>
					<li><a href="#">Clients</a></li>
					<li><a class="btn trans-button" href="#contact-section">Hire-us</a></li>
				</ul>
			</div>
		</nav>
		<!---MOBILE COLLAPSE-->
		<ul class="sidenav" id="mobile-demo">
			<li><a class='sidenav-close'href="#service-section">Services</a></li>
			<li><a class='sidenav-close' href="#process-section">Our Process</a></li>
			<li><a href="#">Works</a></li>
			<li><a href="#">Clients</a></li>
			<li><a class='sidenav-close'href="#contact-section">Contact</a></li>
		</ul>
		<div class="content row container ">
			<div class="col m12 s12">
				<div class="intro-header">
					<h2>Digital Design and Development Studio</h2>
				</div>
				<div class="intro-subheader">
					<h3>We deliver the best digital experience
						from <span id="c">concept</span> to <span id='p'>product</span>.</h3>
				</div>
				<div class="intro-subsubheader">
					<h4>Challenging the status quo is what we are good at.</h4>
				</div>
				<div class="cta col s12 m12">
					<button class='btn ' onClick="document.getElementById('contact-section').scrollIntoView();"> Start a project</button>
				</div>
			</div>
		</div>
		<div class='icon-scroll hide-on-med-and-down'><img src="wp-content/themes/rd3studios/assets/images/social/scroll.svg"></div>
	</header>
