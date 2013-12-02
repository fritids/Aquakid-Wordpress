<?php
/*
Template Name: FAQ/Mentions
*/
?>
<?php get_header(); ?>

		<div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title() ?></h1>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted">
					<?php the_field( "contenu_faq_mentions" ); ?>
	        	</div><!-- .main-body -->
				
<?php get_footer(); ?>