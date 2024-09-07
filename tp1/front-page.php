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

    <?php

            // Affiche 2 jeux de la catégorie favorie
                $arg = array(
                    'post_type' => 'recette',
                    'post_status' => 'publish',
                    'posts_per_page' => '2',
                    'category_name' => 'plates-formes',
                    
                );
                $query = new Wp_Query($arg);
    ?>

    <?php if(get_field('favorite_title')) : ?>
        <div class="favoris">
            <div class="wrapper">
                <h2><?php the_field('favorite_title')?></h2>
                <div class="cards">
                    <div class="wrapper">
                        <?php  if ($query->have_posts()) : ?>
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <a href="<?php the_permalink(); ?>">
                                    < class="card">
                                        <div class="card_media"><?php 
                                $image = get_field('thumbnail');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?></div>
                                        <div class="card_content">
                                            <?php $categories = array(); ?>
                                            <?php foreach(get_the_category() as $category) : ?>
                                                <?php array_push($categories, $category->name); ?>
                                            <?php endforeach; ?>

                                                
                                            <?php if($categories) : ?>
                                                <h4 class="categorie"><?php echo implode(', ', $categories); ?></h4>
                                            <?php endif; ?>
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                    
                                </a>
                            <?php endwhile ?>
                        <?php endif ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>