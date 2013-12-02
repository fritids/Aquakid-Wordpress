<?php
/*
Template Name: Eau magique
*/
?>
<?php get_header(); ?>
        
        <div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title(); ?></h1>
		        	<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted clearfix">
	        		<div class="l-cols2 clearfix">
		        		<img class="col formatted-img-full" src="<?php the_field( "illustration" ); ?>" alt="Notre eau magique" />
		        		<div class="col">
			        		<?php the_field( "texte_droite_image" ); ?>
		        		</div><!-- .col -->
	        		</div><!-- .l-cols2 -->
	        			<?php the_field( "texte_sous_image" ); ?>
	        		<hr />
	        		<div class="l-water">
	        			<?php the_field( "tableau_caracteristiques" ); ?>
	        		</div>

<?php get_footer(); ?>