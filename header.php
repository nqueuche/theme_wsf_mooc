<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moocable
 */

$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div class="navbar">
        <div class="row">
            <div class="container">
                <div class="col-md-1">
                    <a class="navbar__logo" href="<?php echo home_url(); ?>">
                        <img alt="Brand" src="<?php echo $logo[0] ?>"></a>
                </div>
                <div class="col-md-4 col-md-offset-5">
                    <form action="<?php echo home_url( '/' ); ?>" method="get" class="navbar__search">
                        <input type="text" placeholder="<?php _e("Search","moocable"); ?>" value="<?php the_search_query(); ?>" class="navbar__search__input">
                        <span class="input-group-btn">
                            <button type="submit" class="navbar__search__submit"><?php _e("Search","moocable"); ?></button>
                        </span>
                    </form>
                </div>
                <div class="col-md-2 navbar__user">
                    <div class="navbar__user__image" style="background-image:url('assets/images/nina.jpg');">&nbsp;</div>
                </div>
            </div>
        </div>
    </div>



    <div id="content" class="site-content">
