<?php
/*
Template Name: Nous trouver
*/
?>
<?php get_header(); ?>

<div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title(); ?></h1>
	        		<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
				<div class="text-center">
	        		<img class="formatted-img-full" src="<?php the_field( "image_contact" ); ?>" alt="où nous trouver" /> 
	        	</div>
	        	<div class="main-body formatted">	        		
	        		<p class="text-center"><?php the_field( "texte_contact" ); ?></p>
	        	</div><!-- .main-body -->

<?php get_footer(); ?>