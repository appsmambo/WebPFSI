		</div> <!-- end #container -->
		<footer role="contentinfo">
			<div id="inner-footer" class="clearfix">
				<div id="widget-footer" class="clearfix row">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1')) : ?>
					<?php endif; ?>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2')) : ?>
					<?php endif; ?>
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3')) : ?>
					<?php endif; ?>
				</div>
				<nav class="clearfix">
					<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
				</nav>
				<p>
					Calle Antequera No 777 - Oficina 1301 San Isidro - Lima 27, Perú Teléfonos: 511+ 221-1028 511+ 422-8487 511+ 440-340
					<br>
					<a href="mailto:administracion@pfsi.us">
						administracion@pfsi.us
					</a>
				</p>
			</div> <!-- end #inner-footer -->
		</footer> <!-- end footer -->
		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script>
			jQuery(document).ready(function($) {
				$('.sub-menu:first').fadeOut();
				$('.menu-item-has-children', '#menu-principal-1').hover(
					function() {
						$('.sub-menu', this).stop().fadeIn();
					}, function() {
						$('.sub-menu', this).stop().fadeOut();
					}
				);
			});
		</script>
	</body>
</html>