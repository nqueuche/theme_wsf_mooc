<?php // Register Custom Post Type
function course_post_type() {

$labels = array(
'name'                  => _x( 'Courses', 'Post Type General Name', 'course_domain' ),
'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'course_domain' ),
'menu_name'             => __( 'Cours', 'course_domain' ),
'name_admin_bar'        => __( 'Cours', 'course_domain' ),
'archives'              => __( 'Cours archivés', 'course_domain' ),
'attributes'            => __( 'Attributs des cours', 'course_domain' ),
'parent_item_colon'     => __( 'Parent Item:', 'course_domain' ),
'all_items'             => __( 'Tous les cours', 'course_domain' ),
'add_new_item'          => __( 'Ajouter un cours', 'course_domain' ),
'add_new'               => __( 'Ajouter', 'course_domain' ),
'new_item'              => __( 'Nouveau cours', 'course_domain' ),
'edit_item'             => __( 'Editer le cours', 'course_domain' ),
'update_item'           => __( 'Mettre à jour le cours', 'course_domain' ),
'view_item'             => __( 'View Item', 'course_domain' ),
'view_items'            => __( 'Voir les cours', 'course_domain' ),
'search_items'          => __( 'Chercher un cours', 'course_domain' ),
'not_found'             => __( 'Non trouvé', 'course_domain' ),
'not_found_in_trash'    => __( 'Non trouvé dans la corbeille', 'course_domain' ),
'featured_image'        => __( 'Image à la une', 'course_domain' ),
'set_featured_image'    => __( 'Mettre une image à la une', 'course_domain' ),
'remove_featured_image' => __( 'Remove featured image', 'course_domain' ),
'use_featured_image'    => __( 'Utiliser comme image à la une', 'course_domain' ),
'insert_into_item'      => __( 'Ajouter au cours', 'course_domain' ),
'uploaded_to_this_item' => __( 'Médias ajouté à ce post', 'course_domain' ),
'items_list'            => __( 'Liste des cours', 'course_domain' ),
'items_list_navigation' => __( 'Items list navigation', 'course_domain' ),
'filter_items_list'     => __( 'Filtrer la liste des cours', 'course_domain' ),
);
$rewrite = array(
'slug'                  => 'cours',
'with_front'            => false,
'pages'                 => true,
'feeds'                 => true,
);
$args = array(
'label'                 => __( 'Course', 'course_domain' ),
'description'           => __( 'Course', 'course_domain' ),
'labels'                => $labels,
'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
'taxonomies'            => array( 'annee', 'type_de_cours', 'majeure' ),
'hierarchical'          => false,
'public'                => true,
'show_ui'               => true,
'show_in_menu'          => true,
'menu_position'         => 5,
'menu_icon'             => 'dashicons-awards',
'show_in_admin_bar'     => true,
'show_in_nav_menus'     => true,
'can_export'            => true,
'has_archive'           => true,
'exclude_from_search'   => false,
'publicly_queryable'    => true,
'rewrite'               => $rewrite,
'capability_type'       => 'page',
);
register_post_type( 'course', $args );

}
add_action( 'init', 'course_post_type', 0 );