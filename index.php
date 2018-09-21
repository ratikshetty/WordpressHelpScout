<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */
$context = Timber::get_context();
$post = Timber::query_post();
$context['post'] = $post;

//$context['sidebar'] = Timber::get_sidebar('sidebar.php');
//var_dump($post);



$context['categories'] = get_categories();
//$context['categories']=array(   );
//$context['cat1']=$categories;
//foreach($categories as $category) {
//
//    $row = array();
//    $row['link'] =  get_category_link($category->term_id);
//    $row['name'] = $category->name;
//    $row['count']= $category->category_count;
//    $row['id']=$category->term_id;
//    array_push($context['categories'],$row);
//}




$templates = array( 'index.twig' );


if ( is_home() ) {
	array_unshift( $templates, 'home.twig' );
	$context['home']=true;
}

Timber::render( $templates, $context );
