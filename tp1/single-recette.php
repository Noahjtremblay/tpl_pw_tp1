<?php get_header(); ?>

<div class="recette">
        <div class="hero">
        <?php the_post_thumbnail(); ?>
            <div class="wrapper">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="wrapper">
            <div class="intro">
                <div class="intro-content">
                    <?php $chefs = get_field('rel_chef'); ?>
                    <?php if($chefs) : ?>
                        <?php foreach($chefs as $chefs) : ?>
                            <h3>Cette recette à été fait par <?php echo get_the_title($chefs->ID)?></h3>
                        <?php endforeach; ?> 
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
                <!--Existe si favorie-->
                <?php if(get_field('favorite')) : ?>
                    <div class="favorie">
                        <svg class="icon icon--lg">
                            <use xlink:href="#icon-favorie"></use>
                        </svg>
                    </div>
                <?php endif; ?>
            </div>
            <div class="content">
                <div class="ingredient">
                    <?php the_field('ingredient')?>
                </div>

                <div class="preparation">
                    <h2>préparation</h2>
                    <ul>
                        <li>Assaisonnez et cuisez les steaks 3-4 min par côté. Ajoutez le cheddar pour qu’il fonde.</li>
                        <li>Beurrez et grillez les pains.</li>
                        <li>Assemblez avec sauce, laitue, tomate, steak, oignons et cornichons.</li>
                        <li>Servez chaud avec accompagnement.</li>
                    </ul>
                </div>
            </div>

            <?php if (have_rows('galerie')) : ?>
                <div class="swiper" data-component="Carousel" data-slides="1" data-autoplay="true">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php while (have_rows('galerie')) : the_row();?>
                            <div class="swiper-slide">
                                <?php 
                                    $image = get_sub_field('image');
                                    if( !empty( $image ) ): 
                                    ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                <p class="legende"><?php the_sub_field('legend') ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <?php get_footer(); ?>

