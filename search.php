<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Moocable
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<header class="page-header">
							<h3 class="page-title"><?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Résultats de recherche pour : %s', 'moocable' ), '<span>' . get_search_query() . '</span>' );
								?></h3>
						</header><!-- .page-header -->
					</div>

				</div>

				<div class="container">
						<div class="grid">
							<?php while ( have_posts() ) : the_post();
								$taxonomyTypes = get_object_taxonomies( $post );
								$fieldTypes = get_field_objects( $post );
								$postTerms = array();
								$postClass = ""; ?>

								<?php if ( count( $taxonomyTypes ) > 0 ) : ?>
									<?php foreach ( $taxonomyTypes as $taxonomyType ) : ?>
										<?php $item = wp_get_post_terms($post->ID, $taxonomyType); ?>
										<?php $item2 = $item[0]; ?>
										<?php array_push($postTerms, $item2->slug); ?>
									<?php endforeach; ?>
								<?php endif; ?>

								<?php if ( count( $fieldTypes ) > 0 ) : ?>
									<?php foreach ( $fieldTypes as $fieldType ) : ?>
										<?php array_push($postTerms, $fieldType["value"]); ?>

									<?php endforeach; ?>
								<?php endif; ?>

								<?php foreach ( $postTerms as $postTerm ) {
									$postClass .= $postTerm . " ";
								} ?>
								<div class="<?php echo $postClass; ?> item courses col-sm-3">
									<div class="course card showcase__item showcase__colour center-block">
										<div class="card-img-top">
											<?php if ( has_post_thumbnail() ) {
												the_post_thumbnail();
											} ?>
										</div>
										<div class="card-block">
											<h4 class="card-title showcase__item__title">
												<a href="<?php the_permalink() ?>">
													<?php the_title() ?>
												</a>
											</h4>
											<div class="card-text showcase__item__description">
												<?php the_excerpt(); ?>
											</div>
										</div>
									</div>
								</div><!-- end item -->

								<?php get_template_part( 'template-parts/content', 'search' ); ?>

							<?php endwhile; ?>

							<?php the_posts_navigation(); ?>

							<?php else : ?>

								<?php get_template_part( 'template-parts/content', 'none' ); ?>

							<?php endif; ?>

						</div> <!-- end isotope-list -->
					</div>
				</div>

		</main><!-- #main -->

	</section><!-- #primary -->
<?php get_footer(); ?>

