<?php 

//* Template Name: Category Template

//* Add Ambiance grid body class
add_filter( 'body_class', 'ambiance_grid_body_class' );
function ambiance_grid_body_class( $classes ) {

	$classes[] = 'ambiance-grid';
	return $classes;

}

//* Customize the entry meta in the entry header
add_filter( 'genesis_post_info', 'ambiance_post_info_filter' );
function ambiance_post_info_filter( $post_info ) {
	$post_info = '[post_date]';
	return $post_info;
}

//* Remove entry content
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );

//* Remove entry meta in entry footer
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_open', 5 );
remove_action( 'genesis_entry_footer', 'genesis_entry_footer_markup_close', 15 );
remove_action( 'genesis_entry_footer', 'genesis_post_meta' );

//* Remove page navigation
remove_action( 'genesis_entry_content', 'genesis_do_post_content_nav', 12 );



/**
 Code for custom loop */

function

category_loop() {

    //
$cat_args=array(
  'orderby' => 'name',
  'order' => 'ASC'
   );
$categories=get_categories($cat_args);
foreach( $categories as $category) { 
	echo '<article class="entry">';
	echo '<a href="'.get_category_link($category->term_id).'" title="'.$category->name.'"><img src="http://yourdomain.com/wp-content/uploads/' . $category->cat_ID . '.jpg" class="alignleft entry-image post-image"></img></a>';
	echo '<header class="entry-header">';
		echo '<p class=entry-meta></p>';
    	echo '<h2 class="entry-title"><a href="' . get_category_link( $category->term_id ) . '">'.$category->name.'</a></h2>';
    echo '</header>';
    echo '<div class="entry-content"></div>';
    echo '</article>';
} 
	
}


/**
 Replace the standard loop with our custom loop - 
 props to Jonathan Perez of SureFire Web Services for this bit!*/

remove_action(
'genesis_loop',
'genesis_do_loop'

);

add_action(
'genesis_loop',
'category_loop'

);

//* Run the Genesis loop
genesis();
