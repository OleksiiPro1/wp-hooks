<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oleksii
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>     
<?php wp_body_open(); ?>

<?php  
// wp_nav_menu(
// 	array(
// 		'theme_location' => 'header_nav',
// 		'menu_class' => 'myclass',
// 	)
// );

// get_search_form();

// $name = 'test string "yes"';

?>

<!-- <input name="author" value="
<?php 
// echo esc_attr($name); 
?>" /> -->

<!-- <br> -->
<?php 
// echo esc_html('<strong>12345</strong>'); 
?> 
<!-- <br> -->
<?php 
// echo '<strong>12345</strong>'; 
?>
<!-- <br> -->
Header

 <?php 
 // esc_html__('Hello123', 'oleksii');
//  _e('Hello456', 'oleksii');
   ?>

   <hr>

   <?php
do_action('head_test_function_from_the_header');


$name = 'Alex';
$name = apply_filters('head_test_filter', $name);

echo $name;













