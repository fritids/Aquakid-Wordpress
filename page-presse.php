<?php
/*
Template Name: Presse
*/
?>
<?php get_header(); ?>

<div class="l-constrained">
    <section class="l-main">
    	<div class="main-header">
    		<h1 class="main-title"><?php the_title() ?></h1>
        	<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
    	</div><!-- .main-header -->
    	<div class="text-center">
    		<img class="formatted-img-full marginbottom2" src="<?php the_field( "image_centrale" ); ?>" alt="coloriage aquakid Bobun" />
    	</div>
    	<div class="main-body clearfix l-happiness">
    		<div class="l-cols3 clearfix">
				<?php query_posts( 'post_type=articledepresse&order=ASC' ) ?>
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<article class="col text-center">
					<h3 class="press-article"><?php the_title() ?></h3>
					<h4 class="formatted-title4"><?php the_field( "date_parution" ); ?></h4>
					<a href="<?php the_field( "image_complete" ); ?>" target="_blank" class="transition" >
						<img src="<?php the_field( "image_presse" ); ?>" alt="Juan - le directeur artistique d'Aquakid" />
					</a>
					<?php if( get_field( "lien_site" ) ): ?>
					<p><a href="<?php the_field( "lien_site" ) ?>" target="_blank">Visiter le site</a></p>
					<?php endif ?>
				</article>
				<?php endwhile; ?>
				<?php endif; ?>
    		</div><!-- .l-cols2 -->
    	</div><!-- .main-body -->
	        	
<?php get_footer(); ?>