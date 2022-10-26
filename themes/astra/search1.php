<?php
/**
 * The template for displaying search results pages.
 *
 * @link http://labreportacf.local/?elementor_library=search
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


$file = get_field('lab_report_');
$filename = $file['filename'];
$fileurl = $file['url'];
get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<div class="abc">
<?php if ($file);?>
<button> <a href="<?php echo $fileurl;?>" download><?php echo "Download";?></a></button> 
<h1>Download Your Lab report Here! </h1>

</div>





	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_archive_header(); ?>

		<?php astra_content_loop(); ?>		

		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->
	


<?php get_footer(); ?>

