<?php

add_theme_support( 'post-thumbnails' );
	
add_image_size( 'single-feature', 414, 310, true );

function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
add_action( 'init', 'wpb_custom_new_menu' );

add_shortcode('wpbsearch', 'get_search_form');
function wpbsearchform( $form ) {
   
  $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
  <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
  <input type="text" value="' . get_search_query() . '" name="s" id="s" />
  <input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" />
  </div>
  </form>';
 
  return $form;
}
 
add_shortcode('wpbsearch', 'wpbsearchform');


function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


// excerpt
function excerpt( $limit ) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
return $excerpt;
}
function content($limit) {
$content = explode(' ', get_the_content(), $limit);
if (count($content)>=$limit) {
array_pop($content);
$content = implode(" ",$content).'...';
} else {
$content = implode(" ",$content);
}
$content = preg_replace('/[.+]/','', $content);
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}