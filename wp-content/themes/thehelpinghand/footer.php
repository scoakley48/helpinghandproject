<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tribe_Studio_South_Beach
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
				<div class="top-footer">
						<div class="site-info">
							<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://tribestudiosouthbeach.dev/wp-content/themes/tribe/images/tribe_footer.png"></a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
						</div><!-- .site-info -->
						<div class="footer_contact">
							<h4>GET IN TOUCH</h4>
							<p>+1 (704) 123 4567</p>
							<p><a href="mailto:info@tribestudiosouthbeach.com" target="_top">info@tribestudiosouthbeach.com</a></p>
							<p>1234 W. Broadway Ave, South Beach, FL 12345</p>
					</div>
				</div>
			<div class="bottom-footer">
				<p>TRIBE STUDIO © 2017 ALL RIGHTS RESERVED</p>
				<div class="social-icons">
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
