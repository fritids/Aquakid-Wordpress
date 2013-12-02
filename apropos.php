<?php
/*
Template Name: A propos
*/
?>
<?php get_header(); ?>
        
        <div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title(); ?></h1>
		        	<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted clearfix l.about">
	        		<div class="l-cols2 clearfix">
		        		<img class="col formatted-img-full" src="img/mission-aquakid.png" alt="La mission d'Aquakid" />
		        		<div class="col about-mission">
			        		<?php the_field( "notre_mission" ); ?>
		        		</div><!-- .col -->
	        		</div><!-- .l-cols2 -->
	        		<hr />
						<?php the_field( "le_contexte" ); ?>
	        		<hr />
						<?php the_field( "origine_aquakid" ); ?>
	        		<hr />
						<?php the_field( "equipe_aquakid" ); ?>
				</div><!-- .main-body -->
					
<?php get_footer(); ?>
