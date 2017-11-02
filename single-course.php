<?php get_header(); ?>
<?php

$taxonomyTypes = get_object_taxonomies( 'course' );
$fieldTypes = get_field_objects();

?>
<div class="container">
    <div class="single">
		<?php if (have_posts()) : ?>
        <div class="box">
            <div class="bg" style="background-color: rgba(0, 0, 0, 0.5);">
                <div class="row">
                    <div class="col-md-11">
                        <h1 class="single__title">
							<?php the_title(); ?>
                        </h1>
                    </div>
                    <div class="col-md-1">
                        <div class="single__icon head"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 single__categories">
						<?php /*if ( count( $taxonomyTypes ) > 0 ) : */?><!--
							<?php /*foreach ( $taxonomyTypes as $taxonomyType ) : */?>
								<?php /*$taxonomyTerms = get_terms( $taxonomyType ) */?>
							<?php /*endforeach; */?>
						<?php /*endif; */?>
	                    <?php /*if ( count( $taxonomyTerms ) > 0 ) : */?>
		                    <?php /*foreach ( $taxonomyTerms as $taxonomyTerm ) : */?>

                                <li>
                                    <div class="item menu__list__item"
                                         data-filter='.<?php /*echo $taxonomyTerm->slug */?>'>
					                    <?php /*echo $taxonomyTerm->name */?>
                                    </div>
                                </li>

		                    <?php /*endforeach; */?>
	                    --><?php /*endif; */?>
                    </div>
                </div>
				<?php while (have_posts()) : the_post(); ?>
                <div class="row">
                    <div class="col-xs-12">
						<?php if( $fieldTypes ) : ?>
                            <ul class="single__list">
								<?php foreach( $fieldTypes as $fieldType ) : ?>

									<?php echo '<div>'; ?>
									<?php echo '<b>' . $fieldType['label'] . '</b>'; ?>
									<?php echo $fieldType['value']; ?>
									<?php echo '</div>'; ?>
								<?php endforeach; ?>
                            </ul>
						<?php endif; ?>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-8">

                        <div class="content">
							<?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="link_course">
                        <div class="col-xs-12 single__button__container">
                            <a href="" class="single__button">Acceder au cours</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


		<?php

		$terms = get_the_terms( $post->ID, 'annee' );
		if ( !empty( $terms ) ){
			$term = array_shift( $terms );
			echo $term->slug;
		}

		?>


    </div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>
