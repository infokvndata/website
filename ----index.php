<?php 
  if(isset($_REQUEST['user_email']) && trim($_REQUEST['user_email']) != ''){

      $mailContent = '';	  
	  $mailContent.='<br/><b>Name : </b>'.$_REQUEST['name'];
	  $mailContent.='<br/><b>Email : </b>'.$_REQUEST['user_email'];
	  $mailContent.='<br/><b>Subject : </b>'.$_REQUEST['sub'];
	  $mailContent.='<br/><b>Message : </b>'.$_REQUEST['msg'];
	  
     $to      = 'infokvndata@gmail.com';
     $subject = 'New inquiry from site';
     $message = $mailContent;
     $headers = 'From: infokvndata@gmail.com' . "\r\n" .
    'Reply-To: infokvndata@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
     if(mail($to, $subject, $message, $headers)){
		      		
	 } 
     
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>KVN Infotech</title>
<style>

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.header-title{
	font-size:2.5em;
}
.choose-slide-image{
	 height:450px;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

@media only screen and (max-width: 600px) {
  #home{
	 height:270px !important; 
  }
  .bg-img{
	  background-size: 100% 100% !important; 
  }
  .header-title{
	font-size:1.6em !important;  
	padding-top:40px;	
  }
  .choose-slide-image{
	 height:250px !important; 
  }
}
</style>
	
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div >
			<a class="prev" style="z-index:1111 !important;" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" style="z-index:1111 !important;" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<div class="">
		
		    <div class="bg-img mySlides " style="background-image: url('./img/main_slide1.jpg');background-size: 100%;
    background-repeat: no-repeat;">
				<div class="overlay"></div>
			</div>
			<div class="bg-img mySlides " style="background-image: url('./img/all_device.png');background-size: 100%;
    background-repeat: no-repeat;">
				<div class="overlay"></div>
			</div>
			<!--
			<div class="bg-img mySlides " style="background-image: url('./img/web_laptop.jpg');">
				<div class="overlay"></div>
			</div>
			-->  
			<div class="bg-img mySlides " style="background-image: url('./img/background2.jpg');background-size: 100%;
    background-repeat: no-repeat;">
				<div class="overlay"></div>
			</div>
		</div>
		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand" style="padding-top:17px;">
						<a href="" style="font-size:30px;">
							<!-- <img class="logo" src="img/earth-png.png" alt="logo" style="width:23px;margin-top: -4px;margin-right: 5px;" /> -->
							<div style="float:left;"><i class="fa fa-globe" style="margin-top:-2px;font-size: 23px;margin-right:5px;"></i></div>
							<div style="float:left;margin-top:3px;">KVN Infotech</div>
							<div style="clear:both;"></div>
							<!-- <img class="logo-alt" src="img/logo-alt.png" alt="logo"> -->
							
						</a>
					</div>
					
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#service">Services</a></li>
					<li><a href="#team">Platforms</a></li> 
					<li><a href="#testimonial">Testimonial</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text header-title" style="">If you can think it, we can built it</h1>
							<p class="white-text">Consider | Shape | Influence | Shine</p>
							
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Welcome to Website</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>Fully Customizible</h3>
						<p>Even if you know nothing about website design, no problem we can build everything for you</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Awesome Features</h3>
						<p>We can build your business website and grow your business online with Awesome Features</p>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Fully Responsive</h3>
						<p>Automatically resize, hide, shrink, or enlarge a website in all devices (desktops, tablets, and phones)</p>
					</div> 
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->

 
	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Featured Works</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/featured_work_1.jpg" alt="" style="height:232px;box-shadow:5px 5px 5px #999;" />
					<div class="overlay"></div>
					<div class="work-content">
						<span>Web Development</span>
						<h3>Mobile Responsive</h3>
						<div class="work-link">
							<!-- <a href="#"><i class="fa fa-external-link"></i></a> -->  
							<a class="lightbox" href="./img/featured_work_1_bk.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/featured_work_2.jpg" alt="" style="height:232px;box-shadow:5px 5px 5px #999;" />
					<div class="overlay"></div>
					<div class="work-content">
						<span>Software Development</span>
						<h3>System Analysis</h3>
						<div class="work-link">
							<!-- <a href="#"><i class="fa fa-external-link"></i></a> -->
							<a class="lightbox" href="./img/featured_work_2_bk.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/featured_work_3.jpg" alt="" style="height:232px;box-shadow:5px 5px 5px #999;" />
					<div class="overlay"></div>
					<div class="work-content">
						<span>Email Themes</span>
						<h3>Email Reponsive Template</h3>
						<div class="work-link">
							<!-- <a href="#"><i class="fa fa-external-link"></i></a> -->    
							<a class="lightbox" href="./img/featured_work_3_bk.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/featured_work_4.jpg" alt="" style="box-shadow:5px 5px 5px #999;">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Reports</span>
						<h3>Business Statistics</h3>
						<div class="work-link">
							<!-- <a href="#"><i class="fa fa-external-link"></i></a> -->
							<a class="lightbox" href="./img/featured_work_4_bk.jpg"><i class="fa fa-search"></i></a>  
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/featured_work_5.jpg" alt="" style='width:400px;height:232px;box-shadow:5px 5px 5px #999;'>
					<div class="overlay"></div>
					<div class="work-content">
						<span>Fashion</span>
						<h3>Fashion Theme</h3>
						<div class="work-link">
							<!-- <a href="#"><i class="fa fa-external-link"></i></a> --> 
							<a class="lightbox" href="./img/featured_work_5.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="./img/featured_work_6.jpg" alt="" style='width:400px;height:232px;box-shadow:5px 5px 5px #999;'>
					<div class="overlay"></div>
					<div class="work-content">
						<span>Shopping</span>
						<h3>E Store</h3>
						<div class="work-link">
							<!-- <a href="#"><i class="fa fa-external-link"></i></a> -->
							<a class="lightbox" href="./img/featured_work_6.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">What we offer</h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-diamond"></i>
						<h3>App Development</h3>
						<p>We are a web app design and development and working for brands across the globe.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-rocket"></i>
						<h3>Graphic Design</h3>
						<p>We can create eye catching pixel perfect html design for your websites.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-cogs"></i>
						<h3>Creative Idea</h3>
						<p>We can build shine and shape of the sketch of your idea and thoughts </p> 
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-globe"></i>
						<h3>Web Development</h3>
						<p>Interactive, client-fitting and attractive website for engage and convert your clients</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-pencil"></i>
						<h3>Awesome Support</h3>
						<p>We are trying to give best effectively support 24 * 7 in all our clietns and future clietns also.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-flask"></i>
						<h3>Wordpress Sites</h3>
						<p>WordPress is the easiest way to create your content websites and grow your busness with new clients</p> 
					</div>
				</div>
				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Why Choose Us</h2>
					</div>
					<p>Your business is unique—so are its needs. Get custom digital services from the best professionals that are mapped around your business requirements and goals. Personalized yet affordable!</p>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>we build powerful websites.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>we emphasize simplicity.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>we're affordable & friendly.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>we only charge you when we do work for you.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>we're honest.</p>
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						
						<img class="img-responsive choose-slide-image" src="./img/small_slide_1.jpg" alt="" style="" >
						<img class="img-responsive choose-slide-image" src="./img/small_slide_2.jpg" alt="" style="border:1px solid #6195FF;">
						<img class="img-responsive choose-slide-image" src="./img/small_slide_3.jpg" alt="" style="">
						<img class="img-responsive choose-slide-image" src="./img/small_slide_4.jpg" alt="" style="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-users"></i>
						<h3 class="white-text"><span class="counter">79</span></h3>
						<span class="white-text">Happy clients</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-trophy"></i>
						<h3 class="white-text"><span class="counter">9</span></h3>
						<span class="white-text">Awards won</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-coffee"></i>
						<h3 class="white-text"><span class="counter">154</span>K</h3>
						<span class="white-text">Cups of Coffee</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-file"></i>
						<h3 class="white-text"><span class="counter">36</span></h3>
						<span class="white-text">Projects completed</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->


	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Our Platforms</h2>
				</div>
				<!-- /Section header -->

			    <!-- Platforms -->
				<div class="col-sm-4">
					<div class="pricing platforms-box" style="padding-bottom:20px;">
						<div class="price-head" >
							<span class="price-title platforms-title">Front Side</span>
						</div>
						<ul class="price-content platforms-list">
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;HTML</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;CSS</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;Javascript / jQuery</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;Angular Js</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;React Js</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;Knockout Js</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /Platforms -->
				
				<!-- Platforms -->
				<div class="col-sm-4">
					<div class="pricing platforms-box" style="padding-bottom:20px;">
						<div class="price-head" >
							<span class="price-title platforms-title">Back Side</span>
						</div>
						<ul class="price-content platforms-list">
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;PHP</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;Laravel Framework</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;Codeigniter Framework</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;Yii Framework</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;Python</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;API Integration</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /Platforms -->

				<!-- Platforms -->
				<div class="col-sm-4">
					<div class="pricing platforms-box" style="padding-bottom:20px;">
						<div class="price-head" >
							<span class="price-title platforms-title">Database | Hosting</span>
						</div>
						<ul class="price-content platforms-list">
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;MySQL</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;SQL</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;NoSQL | MongoDB</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;AWS</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;Microsoft Azure</p>
							</li>
							<li>
								<p class="platform-name"><i class="fa fa-arrow-right"></i>&nbsp;Heroku</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- /Platforms -->


			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->
	
	<!-- Testimonial -->
	<div id="testimonial" class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background3.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">
                
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title" style="color:#6195FF;">Testimonial</h2>
				</div>
				<!-- /Section header -->
				
				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/person3.jpg" alt="">
								<h3 class="white-text">Ross Doe</h3>
								<span>SALES MANAGER</span>
							</div>
							<p class="white-text">Fantastic work! I am just impressed by their service quality and working strategy. I hired them for the development of my online store and they have satisfied me to the full by delivering the exceptional solution. They have a great expertise, are dedicated, attentive, talented and care much about the client needs. Highly recommended.</p>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/perso2.jpg" alt="">
								<h3 class="white-text">John Leo</h3>
								<span>DIGITAL MARKETING CONSULTANT</span>
							</div>
							<p class="white-text">I gave to a redesigning job of my existing site. They left no loophole exposed in their redesigning work and created a fresh, eye-tempting design for my site. Really, the new design is very user-friendly and responsive as well! Looking forward to hire them again to design my next upcoming site..</p>
						</div>
						<!-- /testimonial -->
						
						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/client_3.PNG" alt="">
								<h3 class="white-text">Elisa Allen</h3>
								<span>FASHION AND TECH BLOGGER</span>
							</div>
							<p class="white-text">KVN Infotech team was a great experience. Two things in particular about their service is exceptional: their speed of response to emails, they were always available to answer my questions and provide feedback as the project went along. Secondly they demonstrated a clear understanding of the scope and nature of the project and delivered accordingly</p>
						</div>
						<!-- /testimonial -->
						
						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/no_user.PNG" alt="">
								<h3 class="white-text">Matt Reed</h3>
								<span>CEO, low Tech, USA</span>
							</div>
							<p class="white-text">KVN Infotech is a highly skilled team with an eye catching details. We got exactly what we wanted and more. The project management and communication works really well through the online project tools and the dedicated project manager made a great job keeping things together. We are looking forward to the next tasks</p>
						</div>
						<!-- /testimonial -->

					</div>
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Testimonial -->

	

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<!--
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<p>512-421-3940</p>
					</div>
				</div> -->
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-6">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>infokvndata@gmail.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-6">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Address</h3>
						<p>University Road</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2" >
					<form class="contact-form" action="" method="post">
						<input type="text" class="input" placeholder="Name" name="name" required>
						<input type="email" class="input" placeholder="Email" name="user_email" required>
						<input type="text" class="input" placeholder="Subject" name="sub" required>
						<textarea class="input" placeholder="Message" name="msg" required> </textarea>
						<button type="submit" class="main-btn">Send message</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo" style="width:222px;margin:0 auto;">
					  <a href="" style="font-size:30px;">
						  <!-- <img class="logo" src="img/earth-png.png" alt="logo" style="width:23px;margin-top: -4px;margin-right: 5px;" /> -->
							<div style="float:left;"><i class="fa fa-globe" style="margin-top:-2px;font-size: 23px;margin-right:5px;"></i></div>
							<div style="float:left;margin-top:3px;">KVN Infotech</div>
							<div style="clear:both;"></div>
					  </a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<!--
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					-->
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2017. All Rights Reserved.</p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "block";  
 }
</script>

	<!-- jQuery Plugins -->
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
