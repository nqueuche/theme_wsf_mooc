<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="alert alert-danger" role="alert">
            <span class="sr-only"><?php the_field( 'banner_text', 'option' ); ?></span>
			<?php the_field( 'banner_text', 'option' ); ?>
        </div>
    </div>
</div>

<div class="container">
    <ul id="filters" class="list-inline">
        <li><a href="#" data-filter="*" class="item selected">Everything</a></li>
		<?php
		$terms = get_terms( "category" ); // get all categories, but you can use any taxonomy
		$count = count( $terms ); //How many are they?
		if ( $count > 0 ) {  //If there are more than 0 terms
			foreach ( $terms as $term ) {  //for each term:
				echo "<li><a href='#' data-filter='." . $term->slug . "'>" . $term->name . "</a></li>\n";
				//create a list item with the current term slug for sorting, and name for label
			}
		}
		?>
    </ul>
</div>

<div class="container">
	<?php $the_query = new WP_Query( array(
		'post_type' => 'course',
		'posts_per_page=50'
	) ); //Check the WP_Query docs to see how you can limit which posts to display ?>
	<?php if ( $the_query->have_posts() ) : ?>
        <div class="grid">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();
				$termsArray  = get_the_term_list( $post->ID );  //Get the terms for this particular item
                var_dump($termsArray);
				$termsString = ""; //initialize the string that will contain the terms
				foreach ( $termsArray as $term ) { // for each term
					$termsString .= $term->slug . ' '; //create a string that has all the slugs
				}
				?>
                <div class="<?php echo $termsString; ?> col-sm-3 courses"> <?php // 'item' is used as an identifier (see Setp 5, line 6) ?>
                    <div class="course card center-block">
                        <div class="card-img-top">
							<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail();
							} ?>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">
                                <a href="<?php the_permalink() ?>">
									<?php the_title() ?>
                                </a>
                            </h4>
                            <p class="card-text">
								<?php the_excerpt(); ?>
                            </p>
                        </div>

                    </div>
                </div> <!-- end item -->
			<?php endwhile; ?>
        </div> <!-- end isotope-list -->
	<?php endif; ?>
</div>


<?php get_footer(); ?>



