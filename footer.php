<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KCHAesthetics
 */

?>


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footerLogo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/images/aesthetics-master-logo-white.svg">
					</div>
					<div class="footerNav">
						<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>	
					</div>

				</div>
				<div class="col-md-4 footerAddress">
				<p>ABU DHABI<br />
				PODIUM 2, SHINING TOWERS, KHALIDIYAH,<br />
				ABU DHABI, UNITED ARAB EMIRATES</p>
				
				<p>DUBAI HILLS<br />
				DUBAI HILLS, ALKHAIL ROAD, MARABEA’ EAST EXIT</p>
				
				<p>DUBAI JUMEIRAH<br />
				AL KHARBASH BUILDING 2ND FLOOR,<br />
				BILLQETAIR STREET (37B STREET), <br />
				UMM SUQEIM 1,<br />
				DUBAI, UNITED ARAB EMIRATES</p>
				
				<p>DUBAI MARINA<br />
				THE RESIDENCES AT MARINA GATE I<br />
				FLOOR 1</p>
				</div>
				<div class="col-md-4 footerAddress">
						<p>&copy; <?php bloginfo( 'name' );
						echo ' - ';
						echo date("Y"); ?><br />
						<p>MOH: VR65207<br />
						SITE BY ATTICUS</p>
				</div>

			<div class="site-info">
			</div><!-- .site-info -->
		</div><!--  .container -->
	</footer><!-- #colophon -->
</div><!-- #site-container -->

<?php wp_footer(); ?>

</body>
</html>
