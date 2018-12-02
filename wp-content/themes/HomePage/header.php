 <!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <title>Homepage_Final</title> -->
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/fonts/fonts.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick.css">
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/slick/slick-theme.css">
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/repon.css"> 
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/css.css">
			



</head>

<body>
	<header id="header">
		<div class="container-fluid">
			<div class="container">
							<div class="row">

		 		<div class=" col-md-3 col-lg-3 col-xs-2">
		 			<div class="logo">
		 				<img src="<?php bloginfo('template_url'); ?>/images/logo-com.png">
		 			</div>
		 			
		 		</div>

		 		<div class="col-md-9 col-lg-8 col-xs-10 text-right">
					<nav class="navbar">
					  <div id="menu_content"  class="top">
					  		<div id="mySidenav" class="sidenav">

					  			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

							    <ul class="nav navbar-nav">

							      <li class="active"><a href="#">Home</a></li>
							      <li><a href="#">Category</a></li>
							      <li><a href="#">About Us</a></li>
							      <li><a href="#">Contact</a></li>
							     

							     <a class="card-a" href="#cart"><img class="cart-img" src="<?php bloginfo('template_url'); ?>/images/carttop.png"><span class="badge">3</span></a>

								<a class="info-a" href="#info"><p>(927)232-2283<img class="mobile" src="<?php bloginfo('template_url'); ?>/images/Mobile.png"> </p></a>
							    </ul>
							    
		   
			    		    </div>
			    		    <span  class="text"  style="font-size:30px;cursor:pointer;" onclick="openNav()">
			    		    	&#9776; Menu
			    		    </span>
					  </div>
					</nav>
				</div>

			</div>

			</div>
		</div>
		
	</header>