<?php get_header(); ?>

	<div class="l-constrained">
		<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		
        <section class="l-main">
        	<div class="main-header">
        		<h1 class="main-title"><?php the_title() ?></h1>
        		<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
        	</div><!-- .main-header -->
        	<div class="main-body formatted">
				<?php the_content() ?>
        	</div><!-- .main-body -->
        
        <?php endwhile; ?>
        <?php endif; ?>
				
<?php get_footer(); ?>