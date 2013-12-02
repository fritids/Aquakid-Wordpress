<?php
/*
Template Name: A propos
*/
?>
<?php get_header(); ?>
        
       <div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title() ?></h1>
		        	<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted clearfix l.about">
	        		<div class="l-cols2 clearfix">
		        		<img class="col formatted-img-full" src="<?php the_field( "bloc1_image" ); ?>" alt="La mission d'Aquakid" />
		        		<div class="col about-mission">
			        		<h2 class="formatted-title"><?php the_field( "bloc1_titre" ); ?></h2>        		
			        		<ul>
			        			<?php the_field( "bloc1_texte" ); ?>
			        		</ul>
		        		</div><!-- .col -->
	        		</div><!-- .l-cols2 -->
	        		<hr />
	        		<h2 class="formatted-title"><?php the_field( "bloc2_titre" ); ?></h2>       
	        		<ul class="l-cols3 clearfix formatted-warning">
	        			<li class="col"><?php the_field( "bloc2_colonne_gauche" ); ?></li>
	        			<li class="col"><?php the_field( "bloc2_colonne_centrale" ); ?></li>
	        			<li class="col"><?php the_field( "bloc2_colonne_droite" ); ?></li>
	        		</ul>		
	        		<p><small><i>(Plus d'informations sur la rubrique <a href="faq.html">FAQ</a>)</i></small></p>
	        		<hr />
	        		<img class="formatted-img-right" src="<?php the_field( "bloc3_image" ); ?>" alt="L'origine d'Aquakid" />
	        		<h2 class="formatted-title"><?php the_field( "bloc3_titre" ); ?></h2>
	        		<?php the_field( "bloc3_texte" ); ?>
	        		<hr />
	        		<h2 class="formatted-title"><?php the_field( "bloc4_titre" ); ?></h2>
	        		<p><?php the_field( "bloc4_texte" ); ?></p>
	        		<article class="team team-juan">
	        			<img src="<?php the_field( "bloc4_image_gauche" ); ?>" alt="Juan - le directeur artistique d'Aquakid" />
	        			<h3 class="team-name"><?php the_field( "bloc4_titre_image_gauche" ); ?></h3>
	        			<h4 class="team-function"><?php the_field( "bloc4_texte_image_gauche" ); ?></h4>
	        		</article>
	        		<article class="team team-patricio">
	        			<img src="<?php the_field( "bloc4_image_centrale" ); ?>" alt="Patricio - le papa franco-argentin" /> 
	        			<h3 class="team-name"><?php the_field( "bloc4_titre_image_centrale" ); ?></h3>
	        			<h4 class="team-function"><?php the_field( "bloc4_texte_image_centrale" ); ?></h4>
	        		</article>
	        		<article class="team team-ombeline">
	        			<img src="<?php the_field( "bloc4_image_droite" ); ?>" alt="ombeline - la maman franco-bourguignonne" /> 
	        			<h3 class="team-name"><?php the_field( "bloc4_titre_image_droite" ); ?></h3>
	        			<h4 class="team-function"><?php the_field( "bloc4_texte_image_droite" ); ?></h4>
	        		</article>
	        	</div><!-- .main-body -->
					
<?php get_footer(); ?>
