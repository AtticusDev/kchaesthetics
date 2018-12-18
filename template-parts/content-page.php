<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package KCHAesthetics
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid home-banner" >
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-12 intro-strap">
					<?php
						the_content();
					?>
				</div>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
