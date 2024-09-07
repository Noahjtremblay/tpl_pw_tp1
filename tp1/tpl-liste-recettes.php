<?php /* Template Name: Liste de recettes */ ?>

<?php get_header(); ?>

    <div class="liste-recettes">
        <div class="hero">
            <img src="assets/images/hero02.jpg" alt="" />
            <div class="wrapper">
                <h1>Les recettes</h1>
            </div>
        </div>
        <div class="intro">
            <div class="wrapper">
                <h2>Liberer vos papilles gustative!</h2>
                <p>
                    Découvrez une multitude d'idées culinaires, allant des plats traditionnels aux créations modernes,
                    parfaites pour toutes les occasions. Chaque recette est soigneusement sélectionnée pour sa simplicité et
                    ses saveurs authentiques, vous garantissant un succès à chaque tentative.
                </p>
            </div>
        </div>

        <?php

            // Affiche les jeux de la catégorie plates-formes
                /*$arg = array(
                    'post_type' => 'jeu',
                    'post_status' => 'publish',
                    'posts_per_page' => '2',
                    'category_name' => 'plates-formes',
                    
                );
                $query = new Wp_Query($arg);
            ?>*/

            // Affiche les jeux d'action OU de simulation qui ont une note de 4 et moins
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
                                            <div class="card_content">
                                                <?php $categories = get_category();?>
                                                <h4 class="categorie"><?php the_category($categories);?></h4>
                                                <h3><?php the_title(); ?></h3>
                                    <p><?php the_field('catchphrase'); ?></p>
                                </div>
                            </div>
                        </a>
                    <?php endwhile ?>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>

                <!--<a href="recette.html">
                    <div class="card">
                        <div class="card_media"><img src="assets/images/recette02.jpg" alt="" /></div>
                        <div class="card_content">
                            <h4 class="categorie">Plat principale</h4>
                            <h3>Pate Terre et mer</h3>
                            <p>Pâtes aux fruits de mer, sauce légère.</p>
                        </div>
                    </div>
                </a>
                <a href="recette.html">
                    <div class="card">
                        <div class="card_media"><img src="assets/images/recette03.jpg" alt="" /></div>
                        <div class="card_content">
                            <h4 class="categorie">Plat principale</h4>
                            <h3>Salade</h3>
                            <p>Salade fraîche aux légumes croquants.</p>
                        </div>
                    </div>
                </a>
                <a href="recette.html">
                    <div class="card">
                        <div class="card_media"><img src="assets/images/recette04.jpg" alt="" /></div>
                        <div class="card_content">
                            <h4 class="categorie">Plat principale</h4>
                            <h3>Poulet</h3>
                            <p>Poulet grillé sain, légumes croquants.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>

</body>

</html>