<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->

<section id="footer">
	<div class="container footer--wrapper">
		<div class="row footer--social">
			<div class="social--item"><a href="">FB</a></div>
			<div class="social--item"><a href="">IG</a></div>
			<div class="social--item"><a href="">IN</a></div>
		</div>
		<div class="row footer--links">
			<div class="footer--item">
				<div class="footer--item__inner">copyright © 2020 Catch<span>Fire</span> Daily</div>
			</div>
			<div class="footer--item">
				<img src="/wp-content/themes/catch-fire/img/footer-flame.svg" alt="">
			</div>
			<div class="footer--item">
				<div class="footer--item__inner">
					<a href="">PRIVACY POLICY</a>
				</div>
			</div>
			<div class="footer--item">
				<div class="footer--item__inner">
					<a href="">TERMS OF SERVICE</a>
				</div>
			</div>
		</div>
		<div class="row made-by">
			<div class="made-title"><a href="">BUILT BY X</a></div>
		</div>
	</div>
</section>

	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>
