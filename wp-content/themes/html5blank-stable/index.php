<?php get_header();
?>
<!-- <===========Main=======> -->
	<main id="main">
		<section id="car_main">

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

			<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
			<div class="carousel-item active">
			<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri() ?>/images/carousel/1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri() ?>/images/carousel/2.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
			<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri() ?>/images/carousel/3.jpg" alt="Third slide">
			</div>
			</div>
			<a class="carousel-control-prev" style="z-index: 99;" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
			</a>

			<a class="carousel-control-next" style="z-index:99;" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
			</a>

			<div class="t_main">
				<span> Việc làm <span>theo giờ<span> </span>

				<button  type="button" id="formButton"><span> Chọn để hiển thị </span> </button>

				<div class="row" id="form1">

					<div class="col-xl">
						<button type="button" class="btn btn-primary btn-block">Tuyển giúp việc theo giờ</button>
					</div>
					<div class="col-xl">
						<button type="button" class="btn btn-secondary btn-block">Tìm việc làm</button>
					</div>
					<div class="col-xl">
						<button type="button" class="btn btn-primary btn-block">Tuyển lao động thời vụ</button>		
					</div>		

				</div>
				</div>

			</div>

		</section>

		<section id="intro">
			<div class="container">
				<div class="row">
					<div class="col-lg img_intro">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/C-IT.jpg">
					</div>
					<div class="col-lg cont_intro">
					<h2>Dự án C-IT</h2>
					<h3>C-IT là gì?</h3>

					<ul>
					  <li><i class="ion-android-checkmark-circle"></i> Là một cam kết từ 3 giá trị cốt lõi Connection (Kết nối) - Innovation (Đổi mới) và Trust (Tin tưởng)</li>
					  <li><i class="ion-android-checkmark-circle"></i> Chúng tôi cung cấp công cụ, thông tin được xác thực của người giúp việc, giúp bạn tuyển người giúp việc chỉ từ 30 phút</li>
					  <li><i class="ion-android-checkmark-circle"></i> Hoặc bạn có thể tăng thêm thu nhập không giới hạn nhờ sự đa dạng công việc trên hệ thống C-IT</li>
					</ul>

					</div>
				</div>
			</div>
		</section>

		<section id="services">

			<div class="container">

				<div class="con_service">
					<h2>Tại sao chọn C-IT?</h2>
				</div>

				<div class="row">

			      <div class="col-md-6">
			        <div class="box media">
			          <div class="icon align-self-center"><i class="fa fa-bar-chart"></i></div>
			          <div class="media-body">
				          <h4 class="title"><a href="">Kiểm duyệt chặt chẽ</a></h4>
				          <p class="description">Toàn bộ những lao động gia nhập vào hệ thống đã được C-IT xác nhận thông tin, với độ tin tưởng cao, nhiệt tình trong công việc</p>	
				      </div>
			        </div>
			      </div>

			      <div class="col-md-6">
			        <div class="box media">
			          <div class="icon align-self-center"><i class="fa fa-map"></i></div>
			          <div class="media-body">
				          <h4 class="title"><a href="">Tiết kiệm chi phí</a></h4>
				          <p class="description">Giảm bớt chi phí thuê lao động cũng như chi phí môi giới tìm giúp việc hay các chi phí trung gian khi phải lao động trong thời gian ngắn</p>
				      </div>
			        </div>
			      </div>

			      <div class="col-md-6">
			        <div class="box media">
			          <div class="icon align-self-center"><i class="fa fa-shopping-bag"></i></div>
			          <div class="media-body">
				          <h4 class="title"><a href="">Ứng viên đa dạng</a></h4>
				          <p class="description">Ứng viên của C-IT không chỉ có sinh viên mà còn bao gồm các lao động muốn kiếm thêm thu nhập ngoài giờ. Hệ thống cung cấp hình ảnh, thông tin chung, đánh giá sao sau mỗi lần làm việc để giúp bạn chọn một người lao động phù hợp nhất</p>
				      </div>
			        </div>
			      </div>

			      <div class="col-md-6">
			        <div class="box media">		
			        	<div class="icon align-self-center"><i class="fa fa-picture-o"></i></div>
			        	<div class="media-body">
			        		<h4 class="title"><a href="">Tìm người nhanh chóng</a></h4>
			          		<p class="description">Thời gian tìm người chỉ từ 10 phút nhanh như pha 1 tách cà phê</p>
			        	</div>
			          	
			        </div>
			      </div>

		    	</div>
		    <div class="">
		    	
		    </div>
			</div>

		</section>
		  
		<section id="video">
			<!-- 	<video id="myvideo" controls="">

				<source src="video/mov_bbb.mp4" type="video/mp4">
					
			</video> -->
		</section>

		<section id="staff">
			<div class="container">
				
				<div class="txt_staff">
					<span>Đội ngũ của chúng tôi</span>
				</div>

				<div class="row">
					<div class="col-sm-3 img_staff">
						<div class="card">
						  <img src="<?php echo get_stylesheet_directory_uri();?>/images/member/md.jpg" style="width: 100%";>
						  <div class="con_imgstaff">
						  	<div class="text_cistaff">
						  		<h5>Nguyễn Thị Mỹ Dung</h5>
						        <p class="title">Designer</p>
						        <p>nguyethimydung@gmail.com</p>
						  	</div>
						    
					        <p><button class="button">Contact</button></p>
						  </div>
						</div>
					</div>

					<div class="col-sm-3 img_staff">
						<div class="card">
						  <img src="<?php echo get_stylesheet_directory_uri();?>/images/member/huy.jpg" style="width: 100%";>
						  <div class="con_imgstaff">
					  	 	<div class="text_cistaff">
						    	<h5>Lê Nguyễn Hoài Huy</h5>
					        	<p class="title">Designer</p>
					        	<p>hoaihuy2011.vn@gmail.com</p>
					    	</div>
					        <p><button class="button">Contact</button></p>
						  </div>
						</div>
					</div>

					<div class="col-sm-3 img_staff">
						<div class="card">
						  <img src="<?php echo get_stylesheet_directory_uri();?>/images/member/t.jpg" style="width: 100%";>
						  <div class="con_imgstaff">
						  	 	<div class="text_cistaff">
						    		<h5>Đào Ngọc Thạnh</h5>
						     		<p class="title">Designer</p>
							        <p>kunh0zdn@gmail.com</p>
						    	</div>
					        <p><button class="button">Contact</button></p> 
						  </div>
						</div>
					</div>

					<div class="col-sm-3  img_staff">
						<div class="card">
  							<img src="<?php echo get_stylesheet_directory_uri();?>/images/member/kn.jpg" style="width: 100%";>
							<div class="con_imgstaff">
								<div class="text_cistaff">
									<h5>Võ Thị Khánh Nhi</h5>
									<p class="title">Designer</p>
									<p>khanhnhivo@gmail.com</p>
								</div>
								<p><button class="button">Contact</button></p>
							</div>
						</div>
					</div>
					
				</div>

			</div>
		</section>

	</main>
<!-- <===========/////End Main=======> -->
<?php get_footer(); ?>