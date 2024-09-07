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
    <?php if(get_field('favorite_title')) : ?>
        <div class="favoris">
            <div class="wrapper">
                <h2><?php the_field('favorite_title')?></h2>
                <div class="cards">
                    <div class="wrapper">
                        <a href="">
                            <div class="card">
                                <div class="card_media"><img src="assets/images/recette01.jpg" alt="" /></div>
                                <div class="card_content">
                                    <h4>Plat principale</h4>
                                    <h3>Tilapia aux épices</h3>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="card">
                                <div class="card_media"><img src="assets/images/recette01.jpg" alt="" /></div>
                                <div class="card_content">
                                    <h4>Plat principale</h4>
                                    <h3>Tilapia aux épices</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

<?php get_footer(); ?>