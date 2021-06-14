<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
   <!-- <body>
        <h1 class="header">Header fiction</h1>
    --> 

<header id="home"> 
        <div id="mySidenav" class="sidenav">
            <?php 
            wp_nav_menu( array(
            'theme_location' => 'left_menu_header'
            ));
            ?>

        </div>

        <div class="container-header"> 
            <div id="my-email" class="container">
                <i class="far fa-envelope fa-lg"></i>  
                <p>alvararias@gmail.com</p>      
            </div>   
                <div onclick="openNav()">
                <i class="fas fa-chevron-circle-down fa-"></i>
                </div>
                
                
            </div>
            
           <div id="my-headline">
            <h1 class="w3-animate-fading"> Alvar Arias</h1>
            <h2 class="w3-animate-fading">Web Developer</h2>
            <h2 class="w3-animate-right">Apps development</h2>
     
           </div>

        </header>