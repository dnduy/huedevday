<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package huedevday
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <link href="<?php bloginfo( 'template_directory' ); ?>/css/scrolling-nav.css" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130275455-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130275455-1');
</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'huedevday' ); ?></a>
<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="brand">
					<h1 class="brand-title">MOBILE DAY 2018- CUỘC THI LẬP TRÌNH ỨNG DỤNG/TRÒ CHƠI TRÊN MOBILE</h1>
				</div>

			</div>
			<div class="col-md-6">
					<!-- <nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'huedevday' ); ?></button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav>  -->
					<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #e3f2fd;" id="mainNav">
      <div class="container">
      	<div class="brand">
					<h1 class="brand-title">  <a class="navbar-brand js-scroll-trigger" href="#header"> MOBILE DAY 2018- CUỘC THI LẬP TRÌNH ỨNG DỤNG/TRÒ CHƠI TRÊN MOBILE </a>  </h1>
				</div>
        <!-- Start Bootstrap</a> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#noidung">NỘI DUNG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#thele">THỂ LỆ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#giaithuong">GIẢI THƯỞNG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#news">TIN TỨC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#taitro">ĐƠN VỊ TỔ CHỨC</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
		</div>

		<div class="site-branding col-md-5" >
			<div class="text-header">
				<img src="<?php bloginfo( 'template_directory' ); ?>/images/header-text.png" alt="">
			</div>
			<button class="dangky btn btn-primary" type="button " data-toggle="modal" data-target="#exampleModalCenter">
				ĐĂNG KÝ NGAY
			</button>
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
			    <div class="modal-content">
			      <div class="modal-header">

			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">

						<h5 class="text-center">ĐĂNG KÝ DỰ THI <br> LẬP TRÌNH ỨNG DỤNG / TRÒ CHƠI TRÊN MOBILE - MOBILE DAY 2018</h5>
			         <!--  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeBULkcr5lAj3NxizIKzUH0S3MjZF9VT5EA0y_zL_9eo6lvyQ/viewform?embedded=true" width="800" height="1454" frameborder="0" marginheight="0" marginwidth="0">Đang tải...</iframe> -->

			          </span>
			        </button>
			      </div>
			      <div class="modal-body">
			         <?php echo do_shortcode( '[contact-form-7 id="15" title="Chưa có tiêu đề"]' ); ?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
			      </div>
			    </div>
			  </div>
			</div>


		</div><!-- .site-branding -->
		<div class="col-md-7">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/banner-icon.png" alt="">
		</div>


		</div>

	</div>

	</div>


	<div id="content" class="site-content">
