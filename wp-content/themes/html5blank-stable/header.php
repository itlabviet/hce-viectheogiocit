<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>
	</title>

	<link href="<?php echo get_stylesheet_directory_uri() ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

	<!-- font -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

  	<link href="<?php echo get_stylesheet_directory_uri() ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  	<!-- Slick slide -->
  	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/lib/slick/slick.css">
  	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/lib/slick/slick-theme.css">
  	<!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/bootstrap.min.css">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/images/icon.jpg" rel="icon">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/css.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/css/respon.css">

	<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

</head>
		
<body <?php body_class(); ?>>
<!-- <===========Header=======> -->
	<header id="header">
		<!-- Top header -->
		<section id="top_header">
			<div class="container-fluid utility_fluid ">
				<div class="utility">
						<div class="h_social">
							<a href="facebook">
								<span><i class="fab fa-facebook"></i></span> 
							</a>
							<a href="twitter">
								<span><i class="fab fa-twitter"></i></span> 
							</a>
							<a href="youtube">
								<span><i class="fab fa-youtube"></i></span> 
							</a>
							<a href="linkedin">
								<span><i class="fab fa-linkedin-in"></i></span> 
							</a>
						</div>

					<div class="h_phone">
						<!-- icon,SĐT -->
						<i class="fas fa-phone"></i>
						<span>
							<a href="tel: 1300 446 771" class="phoneAU">1300 446 771</a>
						</span>
						<a href="https://www.smilemarketing.com/contact-us/" class="btn btn-contact">Contact Us</a>
					</div>
				</div>

			</div>
		</section>
		<section id="menu_fix">
			<div class="container-fluid">
				<div class="container">
					<nav class="navbar fixed-top navbar-expand-lg navbar-light">

					  <a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/C-IT.jpg" width="100" height="60" alt=""></a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>

					  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					    <ul class="navbar-nav mr-auto">
					      <!-- <li class="nav-item active">
					        <a class="nav-link" href="#">Trang chủ <span class="sr-only">(current)</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Thông tin</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Dịch vụ</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Đánh giá</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Liên hệ</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Đăng ký</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Đăng nhập</a>
					      </li> -->
					    <?php  
							$menu_items = wp_get_nav_menu_items("Main menu");
							// thiếu active menu
							foreach ($menu_items as $menu) {
							?>
							<li class="nav-item" <?php echo "active" ?> >
					        	<a class="nav-link" href="<?php echo $menu->url ?>"><?php echo $menu->title ?><span class="sr-only">(current)</span></a>
					      	</li>	
						<?php } ?> 

					     <!--  <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Dropdown
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item" href="#">Action</a>
					          <a class="dropdown-item" href="#">Another action</a>
					          <div class="dropdown-divider"></div>
					          <a class="dropdown-item" href="#">Something else here</a>
					        </div>
					      </li> -->
					      <!-- 
					      <li class="nav-item">
					        <a class="nav-link disabled" href="#">Disabled</a>
					      </li> -->
					    </ul>

					    <form class="form-inline my-2 my-lg-0">
					      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					    </form>
					  </div>
					</nav>
				</div>
			</div>
		</section>
<!-- <===========End Header=======> -->
	</header>