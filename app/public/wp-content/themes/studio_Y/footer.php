<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

	

			<div class="row align-items-center justify-content-center">

				<div class="col-lg-3">
					<div class="circle">
						<div class="image">
							
						</div>
                  		</div>

					<h3>Business Hours</h3>
					<p>
					123 Fake Street, ON, Toronto, Canada
					</p>

					<p>
					Monday - Friday 10AM - 9PM<br>
					Sat, 11AM - 5PM
					</p>

				</div>

				<div class="col-lg-3">
						<div class="side_menu">
						<h3>Quick Info</h3>
							<br>
							<ul>
								<li><a href="#">Studio Class</a></li>
								<li><a href="#">Online Class</a></li>
								<li><a href="#">1:1 Coach</a></li>
								<li><a href="#">Go Up!</a></li>
							</ul>
						</div>
				</div>

				<div class="col-lg-3">
						<div class="side_menu">
								<h3>Customer Support</h3>
								<br>
								<ul>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Refund polish</a></li>
									<li><a href="#">Reservation</a></li>
									<li><a href="#">Go Up!</a></li>
								</ul>
						</div>							
				</div>


				<div class="col-lg-3">
						<div class="about">
								<h3>About us</h3>
								<br>
								<p>
							we opened first store in downtown Toronto and served and deliver donuts to customer since 2015.
							</p>

						</div>							
				</div>
			</div>
		
		
	</div><!-- container end -->
</div><!-- wrapper end -->
<div class="footer__bottom">&copy; Stephfee 2021</div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

