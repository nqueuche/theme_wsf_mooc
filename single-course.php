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

                    </div>
                </div>
				<?php while (have_posts()) : the_post(); ?>
                <div class="row">
                    <div class="col-xs-12">
                            <ul class="single__list">
	                            <li><span class="glyphicon glyphicon-time" aria-hidden="true"></span><b> Durée du cours : </b><?php echo get_field('duree'); ?></li><br>
	                            <li><span class="glyphicon glyphicon-comment" aria-hidden="true"></span><b> Langue : </b><?php echo get_field('langue'); ?></li><br>
	                            <li><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><b> Plateforme : </b><?php echo get_field('plateforme'); ?></li><br>
	                            <li><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span><b> Certification : </b><?php echo get_field('certification'); ?></li>
                            </ul>
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
                            <a href="<?php echo get_field('lien'); ?>" class="single__button">Acceder au cours</a>
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
