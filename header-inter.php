<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
    <title>Perfect World Adventure</title>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>

    <div class="container">
        <header class="inter">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_url');?>/img/small-logo.png" alt="" class="small-logo"></a>

                  <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_class'=> 'navbar-nav mr-auto mt-2 mt-lg-0' ) ); ?>


                 <?php get_search_form(); ?>
                  
                  
                </div>
              </nav>
        </header>
    </div>