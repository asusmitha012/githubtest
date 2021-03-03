<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>Automoboli Lamborghini - Official Website</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../.css/slick.css">

	<style>
		*{
			margin: 0;
			box-sizing: border-box;
		}
		body{
			font-family: Roboto,Helvetica,Neue,Arial;
			/*background: black;*/
		}
		header{
			position: fixed;
			left: 0;
			right: 0;
			z-index: 1030;
		}
		header nav{
			position: relative;
			z-index: 3;
			padding:1.6rem 6rem;
			height: 100px;
			background-color: black;

		}
		.container img{
			
			height: 100px;
		}
		.footer-sticky{
		 	position: absolute;
  			bottom: 1px;
  			width: 100%;
  			height: 1rem; 
  			background-color: black;
  			color: white;   
  			text-align: center; 
  			font-size: .8rem; 
  			position: fixed;
  			left: 0;
  			right: 0;
  			z-index: 1030;     
		}
		
		ul{
			list-style-type: none;
			overflow: auto;
		}
		li{
			display: inline;
			float: left;
		}
		li a{
			text-decoration: none;
			display: block;
			color:white;
			padding: 10px 10px;
		}
		li a:hover {
			text-decoration: underline;
			color: white; 
		}
		.menu{
			position: relative;
			left:200px;
		}
		.container{
			align-items: center;
			display: flex;

		}
		.icon{
			
			position: relative;
			left:210px;
		}
		.icon button{
			border: 0;
			background-color: transparent;
			cursor: pointer;
			outline:none;
		}
		.sub-menu1{
			display: none;
		}

				.btn{
      	border: 0;
      	background-color: transparent;
      	color: white;
      	cursor: pointer;
     	outline:none;
     	font-size: 15px;
    	}
    	.btn:hover{
      	text-decoration: underline;
    	}
    	.dropdown-menu {
 		 display: none;
  		position: fixed;
  		left: 0;
 		background-color: black;
 		color: grey;
  		width: 100%;
  		margin-top: 0px;
  		/*z-index: 1;*/
		}
		
		.dropdown-menu a {
 	 	color: grey;
  		padding: 12px 250px;
  		text-decoration: none;
  		display: block;
  		font-size: 13px;
		}
		.footer {
			width: 100%;
			padding-left: 20px;
			padding-right: 20px;
			background-color: #181818;
			color: white;
		    /*line-height: 0px;*/
			
		}
		.footer p{
			margin-bottom:0px;
			color: white;
			padding-bottom: 50px;
			margin-left: 40px;
			 
		}
		.footer li{
			margin-bottom: 150px;
			padding-right: 30px;
			font-size: 1.1rem;
		}
		.footer ul{
			padding-top: 50px;
			padding-bottom: 50px;
			height: 120px;
			overflow: hidden;

		}
		.text{
			position: absolute;
			top:500px;
		}
		.text h1{
			font-size:100px;
			letter-spacing:-3.48px;
			line-height: 85px;
			font-family: roboto,helvetica;
			font-weight: 700;
			position:absolute;
			bottom: 70px;
			left:100px;
			color: white;
		}
		#single-item button{
			color:transparent;
			outline: 0;
			border: 0;
			background: transparent;
		}
		.banner button{
			color:transparent;
			outline: 0;
			border: 0;
			background: transparent;
		}
		
		.dropdown-menu a:hover {background-color:transparent;text-decoration: none;}

		.dropdown:hover .dropdown-menu {display: block;padding-top: 25px;};
		/*.footer-icons a{
			float: right;
			margin-bottom: 50px;  
		}*/
		
		
	</style>
</head>
<body>
	<header>
		<nav class="container">

			<!-- <div class="logo"> -->
				<img src="../img/logo.png" style="width:55px;height:63px;" >
			<!-- </div> -->
				<ul>
					<li> 
						<div class="dropdown">
						<button type="button" class="btn" data-toggle="dropdown">
      					MODELS
    					</button>
    					<div class="dropdown-menu">
      					<a class="dropdown-item" href="#">AVENTADOR</a>
      					<a class="dropdown-item" href="#">HURACAN</a>
      					<a class="dropdown-item" href="#">URUS</a>
      					<a class="dropdown-item" href="#">LIMITED SERIES</a>
    					</div>
    					</div>
					</li>
					<li>
						<div class="dropdown">
						<button type="button" class="btn" data-toggle="dropdown">
      					OWNERSHIP
    					</button>
    					<div class="dropdown-menu">
      					<a class="dropdown-item" href="#">LAMBORGHINI UNICA</a>
      					<a class="dropdown-item" href="#">CONNECTIVITY</a>
      					<a class="dropdown-item" href="#">AD PERSONAM</a>
      					<a class="dropdown-item" href="#">FINANCIAL SERVICES</a>
      					<a class="dropdown-item" href="#">ACCESSORI ORIGINALI</a>
      					<a class="dropdown-item" href="#">SPARE PARTS</a>
      					<a class="dropdown-item" href="#">ASSISTANCE AND MAINTENANCE</a>
      					<a class="dropdown-item" href="#">CLASSICS</a>
      					<a class="dropdown-item" href="#">CLUB</a>
    					</div>
    					</div>
					</li>
					<li>
						<div class="dropdown">
						<button type="button" class="btn" data-toggle="dropdown">
      					MOTORSPORT
    					</button>
    					<div class="dropdown-menu">
      					<a class="dropdown-item" href="#">SUPER TROFEO</a>
      					<a class="dropdown-item" href="#">GT3</a>
      					<a class="dropdown-item" href="#">MOTORSPORT MODEL</a>
      					<a class="dropdown-item" href="#">DRIVERS</a>
      					<a class="dropdown-item" href="#">MOTORSPORT NEWS</a>
      					<a class="dropdown-item" href="#">EXPERIENCE</a>
      					<a class="dropdown-item" href="#">ESPORTS</a>
      					<a class="dropdown-item" href="#">SPORTCAR</a>
    					</div>
    					</div>
    				</li>
    				<li>
    					<div class="dropdown">
						<button type="button" class="btn" data-toggle="dropdown">
      					PRE-OWNED
    					</button>
    				</div>
					</li>
				</ul>
				<ul class="menu">
					<li> 
						<a href="#">DEALERSHIPS</a>
					</li>
					<li>
						<a href="#">MUSEUM</a>
					</li>
					<li>
						<a href="#">STORE</a>
					</li>
				</ul>
			<div class="icon">
				<button><i class="fa fa-comments-o" aria-hidden="true" style="font-size : 21px;color:white;padding-right: 15px;"></i></button>
				<button><i class="fa fa-search" aria-hidden="true" style="font-size : 21px;color:white;padding-right: 15px"></i></button>
				<button><i class="fa fa-bars" aria-hidden="true" style="font-size : 21px;color:white;"></i></button>
			</div>
		</nav>
	</header>
					<div id="single-item">
					
					  	<div class="item">
						    <img src="../img/c1.jpg" width="100%" height="900px">
						    <div class="text"><h1 style="position: absolute;bottom: 10px;font-size:70px;">Real Emotions Shape the Future</h1>
						    </div>
						</div>
						<div class="item">
						    <img src="../img/c2.jpg" width="100%" height="900px">
						    <div class="text">
						    <h3 style="font-style: bold;font-weight: 900;position:relative;bottom: 400px;left:100px;color: white;">Urus Graphite Capsule</h3>
						    <h1>Unlock any road</h1>
						    </div>
						</div>
						<div class="item">
						    <img src="../img/c3.jpg" width="100%" height="900px">
						    <div class="text"><h3 style="font-style: bold;font-weight: 900;position:relative;bottom: 400px;left:100px;color: white;">Huracan Evo Fluo Capsule</h3>
						    <h1>Every Day Amplified</h1>
							</div>
						</div>
					</div>
					<div class="banner">
						<div class="banner-img">
							<img src="../img/c4.jpg"style="height:900px;width: 100%">
						</div>
						<div class="banner-img">
							<img src="../img/c5.jpg"style="height:900px;width: 100%">
						</div>
						<div class="banner-img">
							<img src="../img/c6.jpg"style="height:900px;width: 100%">
						</div>
					</div>
					<div class="main">
						<h3 style="margin-top: 1rem;font-size: 3rem;font-weight: 700;font-stretch: normal;font-style: normal;line-height: 1.1;letter-spacing: .064rem;text-transform: uppercase;padding-left:100px;padding-top:70px">news</h3>
						<h2 style="font-size: 9rem;font-weight: 700;font-stretch: normal;font-style: normal;line-height: .9;letter-spacing: -.348rem;text-align: left;color: #202020;margin-top: 2rem;text-transform: uppercase;padding-left:100px">lamborghini world</h2>
						<img src="../img/c7.jpg" style="width: 100%;height: 100%;min-height: 26rem;background-position: 50%;background-size: cover;padding-right: 100px;padding-left: 100px;padding-top: 50px;padding-bottom: 50px;">
						<p style="padding-left: 95px;"><b>26 FEBRUARY 2021</b></p><br>
						<p style="padding-left: 100px;">URUS</p><br>
						<h2 style="padding-left: 97px;font-size: 40px;"><b>CHAMPION AARON DUROGATI TAKES<br>LAMBORGHINI URUS PARAGLIDING</b></h2><br>
						<p style="padding-left: 97px;color:grey;font-weight: 500px;">Sometimes an extreme experience opens you to new perspectives: that’s why we put together the <br><br>paragliding champion Aaron Durogati and Urus.</p>
						<div class="footer">
							<ul>
								<li>
								COMPANY
								</li>
								<li>
								CAREERS
								</li>
								<li>
								CONTACT US
								</li>
								<li>
								MEDIA CENTER
								</li>
								<li>
								PRIVACY & LEGAL
								</li>
								<li>
								SITEMAP
								</li>
								<li>
								NEWSLETTER
								</li>
							</ul>
							<p>Copyright © 2021 Automobili Lamborghini S.p.A. a sole shareholder company part of Audi Group.
								<br><br>All rights reserved. VAT no. IT 00591801204</p>
						</div>
						
					</div>

	
	<div class="footer-sticky">
		
		<p>Fuel consumption and emission values of all vehicles promoted on this page -Fuel consumption and emission: 19,2 - 12,7 I/100km ; CO2-emissions combined: 460 g/km - 325 g/km (WLTP)</p>
	</div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../.jquery/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('#single-item').slick(
  {
  	slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  });
  $('.banner').slick(
  {
  	slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  });

});

</script>
</body>
</html>
