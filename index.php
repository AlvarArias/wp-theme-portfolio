<?php get_header();?>

 <div id="my-menu">
            <h2 style="text-align: center;padding-top:20px;margin-top:0px;">My work</h2>
            <div class="main-works" style="padding-bottom: 50px;">
                <div class="container-int"><a href="http://localhost:8080/my_dev_website/?page_id=12">
                    <img id="my-web" class="img-work" src="<?php echo get_theme_file_uri('/Img/perfil-copy.jpg')?>"  alt="photo" style="padding: 5px 5px 5px 5px;">
                    <h3 style="text-align: center;">About me</h3>

                </a>  
                    
                </div> 
                <div class="container-int"><a href="http://localhost:8080/my_dev_website/?page_id=26">
                    <img id="my-photo-apps" class="img-work" src="<?php echo get_theme_file_uri('Img/apps.jpg')?>"  alt="photo" style="padding: 5px 5px 5px 5px;">
                    <h3 style="text-align: center;">My work</h3>
                </a>  
                    
                </div> 

            
                <div class="container-int"><a href="http://localhost:8080/my_dev_website/?page_id=28">
                    <img id="my-photo-wp" class="img-work" src="<?php echo get_theme_file_uri('Img/WordPress.png')?>"  alt="photo" style="padding: 5px 5px 5px 5px">
                    <h3 style="text-align: center;">Contact</h3>

                </a>  
                    
                </div> 
                
            </div>
       </div> 
        

    <div id="about-me">
        <div class="text-about">
            <h2 style="margin-top:0px;">About me</h2>
            <p>I moved from Chile to Sweden and studied software development to improve mi skills because i like new challenges</p>
            <p>I studied also in Chile and I live in the beatiful Skåne land.</p>
            <p>Alvar Arias</p>
        </div>
    </div>   

    <div style="text-align:center;padding-top: 20px;padding-bottom: 20px;">

        <div>
        <iframe src="https://player.vimeo.com/video/373863914" width="640" height="362"  allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        <p><!--<a href="https://vimeo.com/373863914">Developers Meeting</a> from <a href="https://vimeo.com/alvararias">Alvar Arias</a>--></p>
    </div>

    </div>
   <div id="my-work">
    <h2 style="margin-top:20px;text-align: center;">My Work</h2>
    </div>

 <div id="my-work-web" class="my-work" style="margin-bottom: 20px;">

<?php

$home_page_post = new WP_Query(array(
    'post_per_page' => 2,
    'post_type' => 'work',
));

while( $home_page_post -> have_posts()) {

    $home_page_post -> the_post(); ?>
    
        <div class="container-int">
            <div>
            <a href="<?php the_permalink();?>">
            <i class="fab fa-github fa-3x" ></i>
            </a>
            <h3 style="text-align: center;"><?php the_title(); ?></h3>
            <p style="text-align: center;"><?php the_excerpt(); ?></p>
            </div>   
        </div>
  
   

    <?php };?>

 </div>

<?php get_footer();

?>


