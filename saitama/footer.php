<?php
/**
 * The template for displaying the footer.
 *
 * @package  saitama
 * @license  GNU General Public License v2.0
 * @since    saitama 1.0
 */
?>
<?php $options = get_option('saitama_theme_options');?>

	<div class="footer-v1">
		<div class="footer">
			<div class="container">
				<div class="row">

					<div class="col-md-3 md-margin-bottom-40 widget-area">
						<?php
if (is_active_sidebar('footer-1')) {
    dynamic_sidebar('footer-1');
}
?>
					</div><!-- .col-md-3 -->

					<div class="col-md-3 md-margin-bottom-40 widget-area">
						<?php
if (is_active_sidebar('footer-2')) {
    dynamic_sidebar('footer-2');
}
?>
					</div><!-- .col-md-3 -->

					<div class="col-md-3 md-margin-bottom-40  widget-area">
						<?php
if (is_active_sidebar('footer-3')) {
    dynamic_sidebar('footer-3');
}
?>
					</div><!-- .col-md-3 -->

					<div class="col-md-3 md-margin-bottom-40 widget-area">
						<?php
if (is_active_sidebar('footer-4')) {
    dynamic_sidebar('footer-4');
}
?>
					</div><!-- .col-md-3 -->

				</div><!-- .row -->
			</div><!-- .container -->
		</div><!-- .footer -->

		<?php saitama_footerCopyRight();?>

	</div><!-- .footer-v1 -->

</div><!-- .wrapper -->

<?php wp_footer();?>

</body>
</html>
