<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php
    	/*
    	 * Print the <title> tag based on what is being viewed.
    	 */
    	global $page, $paged;
    
    	wp_title( '|', true, 'right' );
    
    	// Add the blog name.
    	bloginfo( 'name' );
    
    	// Add the blog description for the home/front page.
    	$site_description = get_bloginfo( 'description', 'display' );
    	if ( $site_description && ( is_home() || is_front_page() ) )
    		echo " | $site_description";
    
    	// Add a page number if necessary:
    	if ( $paged >= 2 || $page >= 2 )
    		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
    
    	?></title>
    <meta name="description" content="La joyeuse bande d'AQUAKID ne va pas tarder à débarquer dans ton quartier. Alors ouvre l'oeil et prépare toi pour la fiesta !">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=no">

    <link rel="shortcut icon" href="http://www.aquakid.com/wordpress/wp-content/themes/aquakid/img/favicon.ico">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <script src="http://www.aquakid.com/wordpress/wp-content/themes/aquakid/js/vendor/modernizr-2.6.2.custom.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">Vous utilisez un navigateur <strong>trop vieux</strong>. Nous vous recommandons de le <a href="http://browsehappy.com/">mettre à jour</a> pour pouvoir visualiser le site correctement.</p>
<![endif]-->

<header class="l-header">
    <div class="header-backgroundcolor">
        <a class="header-logo" href="http://www.aquakid.com/wordpress/">Aquakid - L'eau officielle des enfants</a>
    </div>
    <nav class="l-nav l-constrained clearfix">
        <a href="http://www.aquakid.com/wordpress/a-propos-de-nous/" class="nav-link nav-link-about <?php echo is_page( 'à propos de nous' ) ? ' is-active ': '' ?>">
            <i class="icon-cat"></i>
            À propos<br /> de nous
        </a>
        <a href="http://www.aquakid.com/wordpress/bouteilles-et-personnages/" class="nav-link nav-link-bottles <?php echo is_page( 'Bouteilles et personnages' ) ? ' is-active ': '' ?>">
            <i class="icon-monkey"></i>
            Bouteilles et<br /> personnages
        </a>
        <a href="http://www.aquakid.com/wordpress/notre-eau-magique/" class="nav-link nav-link-water <?php echo is_page( 'Notre eau magique' ) ? ' is-active ': '' ?>">
            <i class="icon-lion"></i>
            Notre eau<br /> magique
        </a>
        <a href="http://www.aquakid.com/wordpress/le-secret-du-bonheur/" class="nav-link nav-link-happiness <?php echo is_page( 'Le secret du bonheur' ) ? ' is-active ': '' ?>">
            <i class="icon-duck"></i>
            Le secret<br /> du bonheur
        </a>
        <a href="http://www.aquakid.com/wordpress/ou-nous-trouver/" class="nav-link nav-link-findus <?php echo is_page( 'Où nous trouver' ) ? ' is-active ': '' ?>">
            <i class="icon-chick"></i>
            Où nous<br /> trouver
        </a>
    </nav>
</header>