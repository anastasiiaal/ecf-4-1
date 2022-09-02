<?php
/**
 ** activation theme
 **/
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function register_new_pt() {

    $labels = array(
        'name' => 'Custom Post Type',
        'all_items' => 'Tous les produits',  // affiché dans le sous menu
        'singular_name' => 'Produit',
        'add_new_item' => 'Ajouter un produit',
        'edit_item' => 'Modifier le produit',
        'menu_name' => 'Custom Post Type'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title','thumbnail', 'excerpt', 'editor' ),
        'menu_position' => 2, 
        'menu_icon' => 'dashicons-welcome-add-page',
        'capability_type' => 'page',
	);

	register_post_type( 'custom_post_type', $args );

}
add_action( 'init', 'register_new_pt' );




function register_new_pt_shortcode(){
  
    $args = array(
        'post_type'      => 'custom_post_type',
        'posts_per_page' => '10',
        'publish_status' => 'published',
    );
  
    $query = new WP_Query($args);
  
    if($query->have_posts()) :

        $result = '';
  
        while($query->have_posts()) :
  
            $query->the_post() ;
        
        
        $result .= '<div style="margin-bottom: 150px">';
        $result .= '<div>' . get_the_post_thumbnail() . '</div>';
        $result .= '<h3> Nom de l\'article : ' . get_the_title() . '</h3>';
        $result .= '<p> <b> Voici le prix : </b> ' . get_the_content() . '</p>'; 
        $result .= '<p> <b> Voici la description: </b> ' . get_the_excerpt() . '</p>'; 
        $result .= '</div>';
  
        endwhile;
  
        // wp_reset_postdata();
  
    endif;    
  
    return $result;            
}
  
add_shortcode( 'new_pt_shortcode', 'register_new_pt_shortcode' ); 