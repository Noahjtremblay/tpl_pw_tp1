<?php get_header(); ?>

    <div class="hero">
    <?php the_post_thumbnail(); ?>
        <div class="wrapper">
            <h1><?php the_title(); ?></h1>

            
            
            <a href="<?php the_permalink(11)?>" class="btn">Voir toutes les recettes</a>
        </div>
    </div>
    <div class="content">
        <div class="wrapper">
            <?php the_content(); ?>
        </div>
    </div>

<?php get_footer(); ?>