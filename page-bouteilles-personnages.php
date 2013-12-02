<?php
/*
Template Name: Bouteilles et Personnages
*/
?>
<?php get_header(); ?>
        
        <div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title(); ?></h1>
		        	<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted clearfix text-center l-characters">
	        		<img class="formatted-img-full" src="<?php the_field( "image_presentation" ); ?>" alt="les bouteilles Aquakid" />
	        		<hr />
        			<h2 class="formatted-title"><?php the_field( "titre_presentation" ); ?></h2>  
        			<p class="formatted-subtitle"><?php the_field( "sous-titre_presentation" ); ?></p>
					<?php query_posts( 'post_type=personnage&order=ASC' ) ?>
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); ?>
								<article class="character">
									<h3 class="character-name"><?php the_field( "nom_personnage" ); ?></h3>
									<img class="character-bottle" src="<?php the_field( "image_bouteille" ); ?>" alt="la bouteille de <?php the_field( "nom_personnage" ); ?>" />
									<img class="character-picture" src="<?php the_field( "image_personnage" ); ?>" alt="<?php the_field( "nom_personnage" ); ?>" />
									<div class="character-container character-<?php the_field( "nom_personnage" ); ?>">
										<p class="character-description"><?php the_field( "texte_personnage" ); ?></p>
									</div>
								</article>
								<?php the_field( "separation" ); ?>
							<?php endwhile; ?>
						<?php endif; ?>	
        			<div class="margintop2"></div>        	
	        	</div><!-- .main-body -->
	        	
<?php get_footer(); ?>