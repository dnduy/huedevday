 <?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package huedevday
 */

?>

	</div><!-- #content -->
<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/LOGOcdcnMOI.png" alt="">
					</div>
					<div class="col-8">
						<strong>THÔNG TIN LIÊN HỆ</strong>
						<p>Trường Cao đẳng Công nghiệp Huế <br>
Trưởng ban tổ chức <br>
Số điện thoại: 091 4846000 - 0908570408</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<p>Website chính thức: http://huedevday.org/ <br>
Email: mobileday2018@hueic.edu.vn   </p>
			</div>
				<!-- <footer id="colophon" class="site-footer hidden-lg-down hidden-lg-up hidden-md-down ">
					<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'huedevday' ) ); ?>">
							<?php

							printf( esc_html__( 'Proudly powered by %s', 'huedevday' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php

							printf( esc_html__( 'Theme: %1$s by %2$s.', 'huedevday' ), 'huedevday', '<a href="http://dnduy.com">dnduy</a>' );
							?>
					</div>
				</footer>  -->
		</div>
	</div>
</div>

</div><!-- #page -->
<script src="<?php bloginfo('template_directory'); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php bloginfo('template_directory'); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="<?php bloginfo('template_directory'); ?>/js/scrolling-nav.js"></script>

<?php wp_footer(); ?>

</body>
</html>
