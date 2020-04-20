<?php


get_header();
?>
<div class="container">
<div class="row">
<div class="col-md-10 offset-md-1">
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();?>
			<h1><?php the_title()?></h1>
			<div><?php the_content()?></div>
		<?php }
	}

	?>
	</div>
</div>
</div><!-- #site-content -->

<?php get_footer(); ?>
