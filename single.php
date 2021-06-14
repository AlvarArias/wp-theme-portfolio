<?php

get_header();

/* echo 'Pagina Single de un post';
while(have_posts()) {

    the_post(); ?>
    
    <h2><?php the_title(); ?></h2>
    
    <?php the_content(); ?>
    
    <?php };
*/

$tec = get_field('technology_used_in_the_project');
$url_live = get_field('html_live');
$url_react = get_field('react_live');
$work_image = get_field('work-image');

    ?> 

     <div class="container-product"> 
        <div class="left-side">
            <img class="img-product" src="<?php echo $work_image['url']; ?>" alt="img-product" >
            <div class="container-int-product">
                <h1><?php the_title(); ?></h1>
                <h3><?php the_excerpt() ?></h3>
                <p><?php the_content(); ?></p>
                <p><?php echo $tec ;?></p>
                
            </div>
            <div class="but-cont-inf">
                <button class="btn-live" onclick="location.href='<?php echo $url_live ?>';">Html live</button>
                <button class="btn-live" onclick="location.href='<?php echo $url_react ?>';">React live</button>
            </div>
            <div class="icon-cont-inf">
                
               
            </div>
                
        </div>

        <div class="right-side">
            <img class="img-perfil-product" src="perfil.jpg" alt="product">
            <div class="container-int-product">
                <h1>Header</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
            </div>
            
            <div class="icon-cont-inf">
                
               
            </div>


        </div>    
    </div>      
<?php

get_footer();

?>