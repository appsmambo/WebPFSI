		</div> <!-- end #container -->
		<footer role="contentinfo">
			<div id="inner-footer" class="clearfix">
				<nav class="clearfix">
					<?php wp_bootstrap_footer_links(); // Adjust using Menus in Wordpress Admin ?>
				</nav>
				<?php dynamic_sidebar( 'footer' ); ?>
			</div> <!-- end #inner-footer -->
		</footer> <!-- end footer -->
		<!--[if lt IE 7 ]>
			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		<?php wp_footer(); // js scripts are inserted using this function ?>
		<script>
			jQuery(document).ready(function($) {
				jQuery('.sub-menu:first').fadeOut();
				jQuery('.menu-item-has-children', '#menu-principal-1').hover(
					function() {
						jQuery('.sub-menu', this).stop().fadeIn();
					}, function() {
						jQuery('.sub-menu', this).stop().fadeOut();
					}
				);
			});
			jQuery(window).load(function() {
				jQuery('.bx-default-pager').delay(500).prepend('<span class="previo">&lt; Anterior </span>').append('<span class="siguiente"> Siguiente &gt;</span>');
				/*jQuery('.previo').on('click', '#advps_container3', function() {
					jQuery('.bx-prev', '#advps_container3').trigger('click');
				});
				jQuery('.siguiente').on('click', '#advps_container3', function() {
					jQuery('.bx-next', '#advps_container3').trigger('click');
				});*/
			});
		</script>
	</body>
</html>