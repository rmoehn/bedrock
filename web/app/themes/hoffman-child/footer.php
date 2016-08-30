<?php if ( is_active_sidebar( 'footer-a' ) || is_active_sidebar( 'footer-b') || is_active_sidebar( 'footer-c' ) ) : ?>

<!-- All copied from Hoffman except author/license part. -->

	<div class="footer">

		<div class="section-inner">

			<?php if ( is_active_sidebar( 'footer-a' ) ) : ?>

				<div class="column column-1 one-third">

					<div class="widgets">

						<?php dynamic_sidebar( 'footer-a' ); ?>

					</div>

				</div>

			<?php endif; ?> <!-- /footer-a -->

			<?php if ( is_active_sidebar( 'footer-b' ) ) : ?>

				<div class="column column-2 one-third">

					<div class="widgets">

						<?php dynamic_sidebar( 'footer-b' ); ?>

					</div> <!-- /widgets -->

				</div>

			<?php endif; ?> <!-- /footer-b -->

			<?php if ( is_active_sidebar( 'footer-c' ) ) : ?>

				<div class="column column-3 one-third">

					<div class="widgets">

						<?php dynamic_sidebar( 'footer-c' ); ?>

					</div> <!-- /widgets -->

				</div>

			<?php endif; ?> <!-- /footer-c -->

			<div class="clear"></div>

		</div> <!-- /footer-inner -->

	</div> <!-- /footer -->

<?php endif; ?>

<div class="credits">

	<div class="section-inner">

		<?php get_template_part( 'menu', 'social' ); ?>

		<div class="fleft">

			<ul class="credits-menu">


				<?php if ( has_nav_menu( 'primary' ) ) {

					wp_nav_menu( array(

						'container' => '',
						'items_wrap' => '%3$s',
						'theme_location' => 'primary',
						'depth' => '1'

					) ); } else {

					wp_list_pages( array(

						'container' => '',
						'title_li' => ''

					));

				} ?>

				<div class="clear"></div>

			 </ul>

            <p>&copy; <?php echo date("Y") ?> Richard Möhn.<br />This work is
licensed under a <a rel="license"
href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution
4.0 International License</a>.
<a rel="license"
href="http://creativecommons.org/licenses/by/4.0/"><br />
<img alt="Creative Commons
License" style="border-width:0"
src="https://i.creativecommons.org/l/by/4.0/80x15.png" /></a></p>

			<p><?php _e( 'Theme by', 'hoffman' ); ?> <a href="http://www.andersnoren.se">Anders Nor&eacute;n</a>.</p>

		</div> <!-- /fleft -->

		<div class="clear"></div>

	</div>

</div> <!-- /credits -->

<?php wp_footer(); ?>

</body>
</html>
