<?php
/*
Template Name: Secret du bonheur
*/
?>
<?php get_header(); ?>

        <div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title(); ?></h1>
		        	<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted clearfix l-happiness">
	        		<img class="formatted-img-left" src="<?php the_field( "image1_premiere_regle" ); ?>" alt="Le secret du bonheur" />
    				<h2 class="formatted-title"><span class="f-darkblue">Regle n°1&nbsp;: </span> <?php the_field( "titre_premiere_regle" ); ?></h2>        		
    				<p>
						<?php the_field( "texte1_premiere_regle" ); ?>
					</p>					  				 
    				
    				<div class="l-cols2 clearfix margintop4">
    					<div class="col">
    						<h3 class="formatted-title2"><?php the_field( "sous_titre_premiere_regle" ); ?></h3>        		
    						<p>
								<?php the_field( "texte2_premiere_regle" ); ?>
							</p>
    					</div>
    					<figure class="col text-center">
    						<img class="formatted-img-full" src="<?php the_field( "image2_premiere_regle" ); ?>" alt="La quantité d'eau dans le corps d'un enfant" />
    						<figcaption><i><?php the_field( "commentaire_image2_premiere_regle" ); ?></i></figcaption>
    					</figure>
    				</div><!-- .l-cols2 -->
    				    		
	        		<hr />
	        		<h2 class="formatted-title"><span class="f-darkblue">Regle n°2&nbsp;: </span><?php the_field( "titre_deuxieme_regle" ); ?></h2>     
	        		<p>
						<?php the_field( "sous_titre_deuxieme_regle" ); ?>
					</p>   
	        		<div class="l-cols3 clearfix">
						<p class="col f-orange"><?php the_field( "colonne_haut-gauche_deuxieme_regle" ); ?></p>	        			
	        			<p class="col f-orange"><?php the_field( "colonne_haut-centre_deuxieme_regle" ); ?></p>
	        			<p class="col f-blue"><?php the_field( "colonne_haut-droite_deuxieme_regle" ); ?></p>
	        			<img class="formatted-img-full" src="<?php the_field( "image_deuxieme_regle" ); ?>" alt="Pyramides des repas" />
	        			<p class="col f-green"><?php the_field( "colonne_bas-gauche_deuxieme_regle" ); ?></p>
	        			<p class="col f-green"><?php the_field( "colonne_bas-centre_deuxieme_regle" ); ?></p>
	        			<p class="col f-blue"><?php the_field( "colonne_bas-droite_deuxieme_regle" ); ?></p>
					</div><!-- .l-cols3 -->	
	        		<hr />
	        		<h2 class="formatted-title"><span class="f-darkblue">Regle n°3 : </span><?php the_field( "titre_troisieme_regle" ); ?></h2>	
	        		<div class="l-cols2 clearfix marginbottom1">
	        			<div class="col text-center">
	        				<img src="<?php the_field( "image1_troisieme_regle" ); ?>" alt="" />
	        			</div>
	        			<div class="col">
								<?php the_field( "texte1_troisieme_regle" ); ?>
	        			</div>
	        		</div>
	        		<div class="l-cols2 clearfix ">
	        			<div class="col">
	        				<p>
								<?php the_field( "texte2_troisieme_regle" ); ?>
							</p>	        					        				
	        			</div>
	        			<div class="col">
	        				<p>
								<?php the_field( "texte3_troisieme_regle" ); ?>
							</p>
	        			</div>
	        		</div>
	        		<div class="l-cols2 clearfix">
	        			<div class="col text-center">
	        				<img src="<?php the_field( "image2_troisieme_regle" ); ?>" alt="" />
	        			</div>
						<div class="col text-center">
	        				<img src="<?php the_field( "image3_troisieme_regle" ); ?>" alt="" />
	        			</div>
	        		</div><!-- .l-cols2 -->
	        		<hr />
	        		<h2 class="formatted-title">Conclusion...</h2>	
	        		<span class="happiness-conclusion-blue">
	        			<i class="icon-water"></i><br />
	        			Eau a<br /> gogo
	        		</span>
	        		<span class="happiness-math">+</span>
	        		<span class="happiness-conclusion-orange">
	        			<i class="icon-fruits"></i><br />
	        			Fruits et<br /> legumes
	        		</span>
	        		<span class="happiness-math">+</span>
					<span class="happiness-conclusion-red">
						<i class="icon-sport"></i><br />
						Exercice<br /> physique
					</span>
					<span class="happiness-math">=</span>
					<span class="happiness-result">
						<span>B</span><span>o</span><span>n</span><span>h</span><span>e</span><span>u</span><span>r</span> <span>!</span><span>!</span><span>!</span>
					</span>
	        		<p class="margintop2"><i>Tous ces conseils sont conformes aux recommandations du PNNS (Plan National Nutrition Santé).</i></p>
	        	</div><!-- .main-body -->
				
<?php get_footer(); ?>