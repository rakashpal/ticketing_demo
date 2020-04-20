<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >


		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?=home_url()?>"><?php bloginfo('name'); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <?php if ( !is_user_logged_in() ) {
 if ( has_nav_menu( 'primary' ) ) {

wp_nav_menu(
	array(
		'container'  => '',
		'items_wrap' => '%3$s',
		'theme_location' => 'primary',
	)
);

}
}else{

	if ( has_nav_menu( 'user' ) ) {

		wp_nav_menu(
			array(
				'container'  => '',
				'items_wrap' => '%3$s',
				'theme_location' => current_user_can('administrator')?'primary':'user',
			)
		);
		
	}
}?>
  </div>
</nav>