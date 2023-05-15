<?php get_header(); ?>

<div>
<?php  

        if(have_posts()):
            while(have_posts()): the_post(); ?>
        
            <?php get_template_part('content','blogs') ?>
            <hr>
            
            <?php 
           endwhile; ?>

           <?php next_posts_link('next page >>');?>&nbsp;
           <?php previous_posts_link('<< old page');?>

        <?php endif;?>
           
           

</div>

<?php get_footer(); ?>