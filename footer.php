<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

$facebook = get_field('facebook_link', 'option');
?>
	</div><!-- #main .wrapper -->
	
</div><!-- #page -->


<div id="footer-bg"><footer id="colophon" role="contentinfo">

<section class="social">
	<?php if($facebook != '') { ?>
	<li>
		<a name="facebook link" href="<?php echo $facebook; ?>" target="_blank">
			<i class="fa fa-facebook-official" aria-hidden="true"></i>
		</a>
	</li>
	<?php } ?>
</section>

<a href='m&#97;i&#108;t&#111;&#58;&#119;i&#64;mi&#110;i%&#55;3&#116;orag%65carolin&#97;&#46;c%6Fm'>&#119;&#105;&#64;ministo&#114;age&#99;a&#114;ol&#105;na&#46;co&#109;</a> | <a href="http://www.watersincorporated.com/" target="_blank">Waters Incorporated of Charlotte</a> | <a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a>  |  site by <a href="http://www.bellaworksweb.com" target="_blank">Bellaworks</a>
</footer><!-- #colophon --></div>

<?php wp_footer(); ?>


</div>



</body>
</html>