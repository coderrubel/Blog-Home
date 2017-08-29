<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <?php while (have_posts()): the_post(); ?>
                <h2><?php the_title(); ?></h2>

                <?php the_post_thumbnail('medium', array('class' => '  feature_img')); ?>


                <?php the_content(); ?>

                <p><span class="glyphicon glyphicon-time"></span>Posted on <?php the_time('F d, Y  H:s a') ?></p>
            <?php endwhile; ?>
            
        </div>
        <div class="col-md-4">
                <?php dynamic_sidebar('rightsidebar'); ?>
            </div>
       
    </div>
</div>
<?php get_footer(); ?>