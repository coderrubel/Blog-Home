<?php get_header(); ?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">


            <?php while (have_posts()): the_post(); ?>
                <h2>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php the_author(); ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span>Posted on <?php the_time('F d, Y  H:s a') ?></p>

                <?php 
                $readmore ='<p><a class="btn btn-primary" href="'. get_the_permalink() . '">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></p>'; 
                echo wp_trim_words(get_the_content(),'20',$readmore); 
               
?>
                <hr>

            <?php endwhile; ?>

            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

        </div>
    
        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
            <?php dynamic_sidebar('rightsidebar'); ?>
        </div>
    </div>
        <!-- Side Widget Well -->
        <div class="well">
            <h4>Side Widget Well</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
        </div>

    </div>

</div>
<!-- /.row -->

<hr>

<!-- Footer -->
<?php get_footer(); ?>