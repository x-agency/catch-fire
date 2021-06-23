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

<?php
	$social = get_field('social_media', 'option');
?>
<section id="footer">
	<div class="container footer--wrapper">
		<div class="row footer--social">
			<div class="social--item"><a href="<?php echo $social['fb']; ?>">FB</a></div>
			<div class="social--item"><a href="<?php echo $social['insta']; ?>">IG</a></div>
			<div class="social--item"><a href="<?php echo $social['linked']; ?>">IN</a></div>
		</div>
		<div class="row footer--links">
			<div class="footer--item">
				<div class="footer--item__inner">copyright © 2021 Catch<span>Fire</span> Daily</div>
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

<!-- MENU -->
<div class="modal fade menu" id="menuModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-body">
			<div class="modal-nav">
				<div class="logo">
					<img src="/wp-content/themes/catch-fire/img/nav-flame.svg" alt="">
				</div>
				<div id="navbarNav">
					<?php
						wp_nav_menu( array(
						'menu'              => 'main',
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => '',
						'container_id'      => '',
						'menu_class'        => 'navbar-nav',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
						);
					?>
           		</div>
			</div>
			<div class="modal-bottom">
				<div class="social-link-wrapper">
					<div class="social-link">
						<a href="">FB</a>
					</div>
					<div class="social-link">
						<a href="">IG</a>
					</div>
					<div class="social-link">
						<a href="">IN</a>
					</div>
				</div>
				<div class="copyright">copyright © 2021 catchfire daily</div>
			</div>
      </div>
    </div>
  </div>
</div>

	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>
