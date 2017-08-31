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
	<div class="prefooter">
		<div class="container">
			<h1>FUND A CHILD'S <span>FUTURE</span></h1>
			<a href="#" class="button">DONATE</a>
		</div>
	</div>
	<footer id="colophon" class="site-footer">
		<div class="container">
				<div class="hhp_signup">
					<h2>LEND A HAND <span>THE HELPING HAND PROJECT</span></h2>
					<a href="/donate" class="button">GET A DEVICE</a>
				</div>
				<div class="top-footer">
						<div class="site-info">
							<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://helpinghandproject.dev/wp-content/themes/thehelpinghand/images/helpinghand_footerlogo.png"></a>
						</div>
						<div class="footer_contact">
							<p><strong>The Helping Hand Project</strong><p>
							1234 Hill Street<br>
							Chapel Hill, NC 27516<br>
							<a href="mailto:contact@hhp.com" target="_top">contact@hhp.com</a><br>
							Phone: 704-123-4567<br>
							<div class="social-icons">
								<i class="fa fa-facebook" aria-hidden="true"></i><i class="fa fa-twitter" aria-hidden="true"></i><i class="fa fa-youtube" aria-hidden="true"></i>
							</div>
					</div>
					<div class="left-footer-info">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					</div>
					<div class="right-footer-info">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
					</div>
				</div>
			<div class="bottom-footer">
				<p>© 2017 HELPING HAND PROJECT. ALL RIGHTS RESERVED</p>
				<div class="social-icons">
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
