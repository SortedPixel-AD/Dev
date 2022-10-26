<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

?>

<section class="no-results not-found">
	<div class="page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
			<?php
				printf(
					wp_kses(
						/* translators: 1: link to new post */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'astra' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p><?php echo("No report found, Please check the batch code again!") ; ?></p>
			

		<?php else : ?>

			<p><?php echo("No report found, Please check the batch code again!") ; ?></p>

		<?php endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
