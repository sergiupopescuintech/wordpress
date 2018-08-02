<?php
/**
 * Template part for displaying a message that posts can not be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pulito Clean Blog Lite
 * @since 1.0 
 * 
 */

?>

<section class="no-results not-found container">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'pulito-clean-blog-lite' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>

			<?php
			/* translators: link to create new post. */
			printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'pulito-clean-blog-lite' ), array(
				'a' => array(
				'href' => array(),
				),
			) ), esc_url( admin_url( 'post-new.php' ) ) );
			?>

			</p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pulito-clean-blog-lite' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'pulito-clean-blog-lite' ); ?></p>
			<?php
				get_search_form();

		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->