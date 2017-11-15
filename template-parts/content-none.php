<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moocable
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h3 class="page-title"><?php esc_html_e( 'Aucun contenu ne correspond à votre recherche', 'moocable' ); ?></h3>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( "Votre recherche n'a pas pu aboutir. Veuillez reessayer avec des mots-clés différents." , 'moocable' ); ?></p>
			<?php
		else : ?>

			<p><?php esc_html_e( 'On dirait que vous ne trouvez pas ce que vous cherchez. Peut-être un recherche pourrait vous aider.', 'moocable' ); ?></p>
			<?php
		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
