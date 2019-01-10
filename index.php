<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package huedevday
 */

get_header();
?>
<div id="noidung">
	<div class="container">
		<!-- <div class="row">
			 <div class="col-md-6">
				<div class="brand">
					<h1 class="brand-title">MOBILE DAY 2018- CUỘC THI LẬP TRÌNH ỨNG DỤNG/TRÒ CHƠI TRÊN MOBILE</h1>
				</div>

			</div>
			<div class="col-md-6">
					<nav id="site-navigation" class="main-navigation">

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
					</nav>
			</div>
		</div> -->
		<div class="row text-center">
			<div class="col-md-12">
				<h2 class="text-center">NỘI DUNG</h2>
			</div>
			<div class="col-md-3">
				<div class="noidung-img">
					<img src="<?php bloginfo('template_directory');?>/images/icon_idea.png" alt="">
				</div>
				<div class="noidung-content">
					<h3 class="text-center">TRANH TÀI Ý TƯỞNG</h3>
					<P>
						Ý tưởng càng độc đáo, sáng tạo, càng ứng dụng cao, thí sinh càng có cơ hội thắng giải thưởng lớn.
					</P>
				</div>
			</div>
			<div class="col-md-3">
				<div class="noidung-img">
					<img src="<?php bloginfo('template_directory');?>/images/icon_phanthuong.png" alt="">
				</div>
				<div class="noidung-content text">
					<h3 class="text-center">PHẦN THƯỞNG HẤP DẪN</h3>
					<P>
						Phần thưởng cực kì hấp dẫn giúp thí sinh có cơ hội phát triển bản thân.
					</P>
				</div>
			</div>
			<div class="col-md-3">
				<div class="noidung-img">
					<img src="<?php bloginfo('template_directory');?>/images/icon_3.png" alt="">
				</div>
				<div class="noidung-content">
					<h3 class="text-center">CHIA SẺ ĐAM MÊ</h3>
					<P>
						Chia sẻ và theo đuổi đam mê, thành công sẽ theo đuổi bạn.
					</P>
				</div>
			</div>
			<div class="col-md-3">
				<div class="noidung-img">
					<img src="<?php bloginfo('template_directory');?>/images/ion-job.png" alt="">
				</div>
				<div class="noidung-content">
					<h3 class="text-center">CƠ HỘI NGHỀ NGHIỆP</h3>
					<P>
						Được tiếp xúc với các công ty, các chuyên gia hàng đầu trong lĩnh vực lập trình. Có cơ hội ghi dấu với các nhà tuyển dụng.
					</P>
				</div>
			</div>
			<div class="col-md-12">
				<div>
					<button class="dangky btn btn-primary" type="button " data-toggle="modal" data-target="#exampleModalCenter">
				ĐĂNG KÝ NGAY
			</button>
				</div>
			</div>
		</div>
	</div>
</div> <!-- #noidung -->
<div id="thele" class="text-center">
	<div class="container">
		<!-- <div class="row">

			<div class="col-md-6">
				<div class="brand">
					<h1 class="brand-title">MOBILE DAY 2018- CUỘC THI LẬP TRÌNH ỨNG DỤNG/TRÒ CHƠI TRÊN MOBILE</h1>
				</div>

			</div>
			<div class="col-md-6">
					<nav id="site-navigation" class="main-navigation">

			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
					</nav>
			</div>



		</div> -->
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">THỂ LỆ CUỘC THI</h2>
			</div>

		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="left-thele">
					<div class="img-thele">
						<img src="<?php bloginfo('template_directory');?>/images/box3_1.png" alt="">
					</div>
				</div>
				<div>
					<p>
						<a href="" class="thele-dk"  data-toggle="modal" data-target="#exampleModalCenter">Đăng ký ngay</a>
						  để có cơ hội nhân được <br> những <b> giải thưởng hấp dẫn></b>!!!
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="right-thele">
					<div class="img-thele">
						<img src="<?php bloginfo('template_directory');?>/images/box3_2.png" alt="">
					</div>
				</div>
			</div>
		</div>

	</div>
<div id="timeline">
	<div class="container">
		<div class="row">
			<div class="timeline col-md-8">
				<div class="timeline-header text-left">
					<p>Chương trình cuộc thi</p>
				</div>
				<div class="timeline-conent row">
					<div class="top-timeline text-center col-12">
						<p>Thông báo kết quả vòng 1: <b> 16/01/2019 </b> </p>
					</div>
					<div class="bottom-timeline col-12">
						<div class="row">
							<div class="col-md-6">
								<div class="first-timeline">
								<p>
									Nhận đơn đăng ký: <strong>26/11/2018 - 12/01/2019</strong>
								</p></div>
							</div>
							<div class="col-md-6">
								<div class="third-timeline">
								<p>
									Vòng chung kết:<strong>19/01/2019</strong>
								</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 text-center readmore ">
				<a  target="_blank"  href="http://huedevday.org/wp-content/uploads/2018/11/thele.pdf">Chi tiết xem tại <img src="<?php bloginfo('template_directory'); ?>/images/adobe-reader.png" alt=""> </a>
			</div>
		</div>

	</div>
</div>

</div>  <!-- #thele -->

<div id="giaithuong">
	<div class="container">
		<!-- <div class="row">
			<div class="col-12">
				<div class="brand">
					<h1 class="brand-title">MOBILE DAY 2018- CUỘC THI LẬP TRÌNH ỨNG DỤNG/TRÒ CHƠI TRÊN MOBILE</h1>
				</div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">GIẢI THƯỞNG</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="giaithuong-img">
					<img src="<?php bloginfo('template_directory');?>/images/thele_01.png" alt="">
				</div>
			</div>
			<div class="col-md-7">
				<div class="row">
					<div class="col-12">
						<div class="cup cup1">
							<p>
								<strong>
									01 GIẢI NHẤT
								</strong>
								trị giá
								<strong>10,000,000đ</strong>
							</p>
							<div class="giaithuong-dangky">
								<a href="" data-toggle="modal" data-target="#exampleModalCenter">
									<img src="<?php bloginfo('template_directory');?>/images/dangky.png" alt="">
								</a>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="cup cup2">
							<p>
								<strong>
									01 GIẢI NHÌ
								</strong>
								trị giá
								<strong>5,000,000đ</strong>
							</p>
						</div>
					</div>
					<div class="col-12">
						<div class="cup cup3">
							<p>
								<strong>
									01 GIẢI BA
								</strong>
								trị giá
								<strong>2,000,000đ</strong>
							</p>
						</div>
					</div>
					<div class="col-12">
						<div class="cup cup4">
							<p>
								<strong>
									03 GIẢI KHUYẾN KHÍCH
								</strong>
								<br>
								trị giá
								<strong>1,000,000đ</strong>
							</p>
						</div>
					</div>

				</div>
				<div class="row">
					<div class="col-12">
						<p class="thele-info text-right"><strong>Đặc biệt:</strong> Các thí sinh đạt giải sẽ được công ty GOSU và công ty <strong>CNTT</strong> mời về làm việc với các đãi ngộ cực kì hấp dẫn.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
</div> <!-- #giaithuong -->

<div id="news">
	<div class="container">
		<!-- <div class="row">
			<div class="col-12">
				<div class="brand">
					<h1 class="brand-title">MOBILE DAY 2018- CUỘC THI LẬP TRÌNH ỨNG DỤNG/TRÒ CHƠI TRÊN MOBILE</h1>
				</div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">TIN TỨC HOẠT ĐỘNG</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="news">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php bloginfo('template_directory') ;?>/images/news.jpg" alt="Second slide">
      <div class="news-des">
      	<p class="text-center">Hội thảo ngày 08/12/2018: hội thảo Huedevday 2018 - Lĩnh vực CNTT </p>

      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php bloginfo('template_directory') ;?>/images/news.jpg" alt="Second slide">
<div class="news-des">
      	<p class="text-center">Hội thảo ngày 08/12/2018: hội thảo Huedevday 2018 - Lĩnh vực CNTT </p>
      </div>
    </div>
    <div class="carousel-item">
<img class="d-block w-100" src="<?php bloginfo('template_directory') ;?>/images/news.jpg" alt="Second slide">
    <div class="news-des">
      	<p class="text-center">Hội thảo ngày 08/12/2018: hội thảo Huedevday 2018 - Lĩnh vực CNTT </p>

      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- #news -->

<div id="taitro">
	<div class="container">
		<!-- <div class="row">
			<div class="col-12">
				<div class="brand">
					<h1 class="brand-title">MOBILE DAY 2018- CUỘC THI LẬP TRÌNH ỨNG DỤNG/TRÒ CHƠI TRÊN MOBILE</h1>
				</div>
			</div>
		</div> -->
		<div class="row text-center">
			<div class="col-md-12">
				<h2 class="text-center">ĐƠN VỊ TỔ CHỨC</h2>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-12">
				<div class="">
					<h3>Nhà tài trợ chính</h3>
					<img src="<?php bloginfo('template_directory') ;?>/images/logo_gosu.png" alt="">
				</div>
			</div>
		</div>
		<div class="row text-center ">
			<div class="col-md-12">
				<div class="">
					<h4>Các nhà đồng tài trợ</h4>
					<div class="row">
						<div class="col-md-4">
							<img class="taitro-phu" src="<?php bloginfo('template_directory') ;?>/images/framgia-logo-black-1.png" alt="">
						</div>
						<div class="col-md-4">
							<img  class="taitro-phu" src="<?php bloginfo('template_directory') ;?>/images/logo-pkh.png" alt="">
						</div>
						<div class="col-md-4">
							<img src="<?php bloginfo('template_directory') ;?>/images/logo_ghit.png" alt="">
						</div>
						<div class="col-md-4">
							<img src="<?php bloginfo('template_directory') ;?>/images/logo_duo.png" alt="">
						</div>
						<div class="col-md-4">
							<img src="<?php bloginfo('template_directory') ;?>/images/logo_gamelof.png" alt="">
						</div>
						<div class="col-md-4">
							<img class="taitro-phu" src="<?php bloginfo('template_directory') ;?>/images/UKPisoftware_3Update.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row text-center">
			<div class="col-md-12">
				<div class="">
					<h4>Đồng hành truyền thông</h4>
					<div class="row">
						<div class="col-4">
							<img src="<?php bloginfo('template_directory') ;?>/images/trt.png" alt="">
						</div>
						<div class="col-4">
							<img src="<?php bloginfo('template_directory') ;?>/images/vtv8.png" alt="">
						</div>
					<div class="col-4">
							<img src="<?php bloginfo('template_directory') ;?>/images/baotthue.png" alt="">
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- #taitro -->

<?php
// get_sidebar();
get_footer();
