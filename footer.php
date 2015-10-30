<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Distinction
 * @since Distinction 1.0
 */
?>
	</div><!-- #main -->

</div><!-- #wrapper -->

<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
            <div id="footer-meta">
<!-- hide site info -->            
<div style="display:block;float:left">
<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" /></a>Content licensed under <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons by-sa 3.0 License</a>.
<a class="wp" href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">
        Powered by WordPress.    </a>
<a class="wpn" href="http://wpninjas.net" title="The WP Ninjas" rel="generator">
        Theme by The WP Ninjas.    </a></div>

                <?php wp_loginout(); ?>
                
            </div><!-- #footer-meta -->

		</div><!-- #colophon -->
        
	</div><!-- #footer -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>