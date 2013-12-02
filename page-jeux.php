<?php
/*
Template Name: Jeux
*/
?>
<?php get_header(); ?>

<div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title() ?></h1>
		        	<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted clearfix l-happiness">
	        		<div class="l-cols2 clearfix">
					<?php query_posts( 'post_type=dessin&order=ASC' ) ?>
						<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
	        			<div class="col text-center">
	        				<a href="<?php the_field( "pdf_image" ); ?>" TARGET="_blank" class="transition" >
	        					<img src="<?php the_field( "image_colorier" ); ?>" alt="coloriage aquakid Bobun" />
	        				</a>
	        				<h3 class="character-name"><?php the_field( "nom_personnage" ); ?></h3>
							</div>
						<?php endwhile; ?>
						<?php endif; ?>	
	        		</div><!-- .l-cols2 -->
	        	</div><!-- .main-body -->

<?php get_footer(); ?>	        	