<?php /* Template Name: Liste de recettes */ ?>

<?php get_header(); ?>

    <div class="liste-recettes">
        <div class="hero">
        <?php the_post_thumbnail(); ?>
            <div class="wrapper">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="intro">
            <div class="wrapper">
                <?php the_content(); ?>
            </div>
        </div>

        <?php

            // Affiche toutes les recettes
               $arg = array(
                    'post_type' => 'recette',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,                    
                );
                $query = new Wp_Query($arg);
            ?>

        <div class="cards">
            <div class="wrapper">
                
                <?php  if ($query->have_posts()) : ?>
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="card">
                            <div class="card_media">
                                <?php 
                                        $image = get_field('thumbnail');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?></div>

                                            <?php $categories = array(); ?>
                                            <?php foreach(get_the_category() as $category) : ?>
                                                <?php array_push($categories, $category->name); ?>
                                            <?php endforeach; ?>

                                            <div class="card_content">
                                                <?php if($categories) : ?>
                                                    <h4 class="categorie"><?php echo implode(', ', $categories); ?></h4>
                                                <?php endif; ?>
                                                <h3><?php the_title(); ?></h3>
                                    <p><?php the_field('catchphrase'); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endwhile ?>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
    <?php get_footer(); ?>

</body>

</html>