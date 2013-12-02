<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
        
        <div class="l-constrained">
	        <section class="l-main">
	        	<div class="main-header">
	        		<h1 class="main-title"><?php the_title(); ?></h1>
		        	<h2 class="main-subtitle"><?php the_field( "sous_titre" ); ?></h2>
	        	</div><!-- .main-header -->
	        	<div class="main-body formatted l-contact">
					<div class="l-cols2 clearfix">
	        			<div class="col text-right">
	        				<?php the_field( "reseaux_sociaux" ); ?>
	        			</div>
	        			<div class="col contact-address">
	        				<?php the_field( "informations_contact" ); ?>
	        			</div>
	        		</div>
	        		<p class="text-center"><?php the_field( "commentaire" ); ?></p>
	        		<hr />
	        		<form class="form" id="contact-form" action="">
	        			<label for="contact-lastname">Nom*</label>
	        			<input type="text" placeholder="Nom*" name="lastname" id="contact-lastname" required />
	        			<label for="contact-firstname">Prénom*</label>
	        			<input type="text" placeholder="Prénom*" name="firstname" id="contact-firstname" required />
	        			<label for="contact-email">Adresse mail*</label>
	        			<input type="email" placeholder="Adresse mail*" name="email" id="contact-email" required novalidate />
	        			<label for="contact-message">Message*</label>
	        			<textarea placeholder="Message*" name="message" id="contact-message" required></textarea>
	        			<div id="captcha"></div>
	        			<div class="form-btn">
		        			<input type="submit" class="btn-green" value="Envoi !" />
	        			</div>
	        			<p id="form-success" class="alert-success text-center" style="display: none;">Votre message nous a bien été envoyé. Merci&nbsp;!</p>
	        		</form>	        	
	        	</div><!-- .main-body -->

<?php get_footer(); ?>