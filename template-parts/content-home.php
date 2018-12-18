<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package KCHAesthetics
 */

?>
<div id="site-container" class="site">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container ml-0 mr-0 pr-0" >
			<div class="row">
					<div class="col-md-12" style="background-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/Banner-image.jpg'); background-size: cover; background-position: center center; height: 500px;">
						<div class="siteName">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="mainLogo"></div></a>
						</div>

						<div class="introText">
						<?php
							the_content();
						?>
						<a href="#" class="btn largeBtn">Discover more</a>

						</div>
					</div>
			</div>
		</div>
		<div class="container ml-0 mr-0 pr-0">
			<div class="row">
				<div class="col-sm-12 col-md-6 consultantPanel">
					<?php
						the_field('consultant_panel');
					?>
				</div>
				<div class="col-sm-12 col-md-6 p-5" style="background-image: url('<?php the_field('consultant_panel_img') ?>'); background-size: cover; background-position: center center;">
				</div>

			</div>
		</div>
		<div class="container ml-0 mr-0 pr-0">
			<div class="row">
					<?php if( have_rows('consultant') ): 
					 while( have_rows('consultant') ): the_row(); 
					// vars
					$title = get_sub_field('consultant_name');
					$image = get_sub_field('consultant_img');
				?>

				<div class="col-sm-12 col-md-3 d-flex align-items-end p-0" style="background-image: url('<?php echo $image; ?>'); background-size: cover; background-position: center center; height: 290px;">
						<div class="docBlockBlue text-center">
							<div class="docName">
								<?php echo $title; ?>
							</div>
						</div>
				</div>

				<?php endwhile;
				endif; ?>
			</div>
		</div>
		<div class="container ml-0 mr-0 pr-0">
			<div class="row">
				<div class="col-md-12 text-center mt-5">
					<h2>Our Services</h2>
				</div>
			</div>
		</div>
		<div class="container ml-0 mr-0 p-5">
			<div class="row justify-content-center">

					<?php if( have_rows('service_panels') ): 
					 while( have_rows('service_panels') ): the_row(); 
					// vars
					$title = get_sub_field('service_name');
					$image = get_sub_field('service_img');
				?>

				<div class="col-sm-12 col-md-4 d-flex align-items-center" style="background-image: url('<?php echo $image; ?>'); background-size: cover; background-position: center center; height: 290px;">
					<div class="serviceTitle">
						<h3><?php echo $title; ?></h3>
					</div>
				</div>

				<?php endwhile;
				endif; ?>
			</div>
		</div>
		<div class="container ml-0 mr-0 pr-0">
			<div class="row">
				<div class="col-sm-12 col-md-6 p-5" style="background-image: url('<?php the_field('news_panel_img') ?>'); background-size: cover; background-position: center center;">
				</div>
				<div class="col-sm-12 col-md-6 consultantPanel">
					<?php
						the_field('news_panel');
					?>
						<a href="#" class="btn largeBtn">Read more</a>
				</div>

			</div>
		</div>








	</article><!-- #post-## -->
