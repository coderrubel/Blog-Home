<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            
             <?php while (have_posts()): the_post(); ?>
            <h2><?php the_title(); ?></h2>
       
            <div class="feature_img"><?php the_post_thumbnail(); ?> </div>  
           
            <p class="lead">
                by <a href="index.php"><?php the_author(); ?></a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span>Posted on <?php the_time('F d, Y  H:s a') ?></p>
            <?php the_content(); ?>
            <?php endwhile; ?>
            
        </div>
    </div>
</div>
<?php get_footer(); ?>