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
                <div class="col-xs-1">
                    <a class="navbar__logo" href="<?php echo home_url(); ?>">
                        <img src="<?php echo $logo[0] ?>"></a>
                </div>
                <div class="col-xs-2">
                    <h4 class="baseline">La plateforme de MOOC</h4>
                </div>
                <div class="col-xs-1">
                </div>
                <div class="col-xs-5">
                    <form role="search"  method="get"  action="<?php echo home_url( '/' ); ?>" class="navbar__search">
                        <input type="text" placeholder="Rechercher..." class="navbar__search__input"  name="s" id="s">
                    </form>
                </div>
                <div class="col-xs-1">
                </div>
                <div class="col-md-2 navbar__user">
                    <div class="navbar__user__image dropdown-toggle" data-toggle="dropdown" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/nina.jpg');"></div>
                    <ul class="dropdown-menu" role="menu">
                    <li><a href="<?php echo wp_logout_url(); ?>">Se déconnecter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div id="content" class="site-content">
