<?php get_header(); ?>

<div class="recette">
        <div class="hero">
            <img src="assets/images/recette01.jpg" alt="" />
            <div class="wrapper">
                <h1>Hamburger</h1>
            </div>
        </div>
        <div class="wrapper">
            <div class="intro">
                <div class="intro-content">
                    <h3 class="chef">Cette recette vous est proposé par "chef"</h3>
                    <p>
                        Découvrez notre hamburger gourmet, composé d'un steak haché juteux cuit à la perfection, surmonté
                        d'une tranche de cheddar fondant. Le tout est enveloppé dans un pain à burger légèrement beurré et
                        grillé, offrant un contraste parfait entre croquant et moelleux. Complétez avec des feuilles de
                        laitue fraîche, des tranches de tomate juteuse, des oignons émincés et des cornichons croquants.
                        Ajoutez votre sauce préférée pour une touche finale savoureuse. Un régal simple et irrésistible pour
                        tous les amateurs de burgers !
                    </p>
                </div>
                <!--Existe si favorie-->
                <div class="favorie">
                    <svg class="icon icon--lg">
                        <use xlink:href="#icon-favorie"></use>
                    </svg>
                </div>
            </div>
            <div class="content">
                <div class="ingredient">
                    <h2>Ingrédient</h2>
                    <ul>
                        <li>Pain à burger (brioche ou classique)</li>
                        <li>Steak haché de bœuf (ou autre viande)</li>
                        <li>Fromage (cheddar, suisse, etc.)</li>
                        <li>Laitue</li>
                        <li>Tomate</li>
                        <li>Oignon</li>
                        <li>Cornichons</li>
                        <li>Sauce (mayonnaise, ketchup, moutarde)</li>
                        <li>Sel et poivre</li>
                    </ul>
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

            <div class="swiper" data-component="Carousel" data-slides="1" data-autoplay="true">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="assets/images/recette01.jpg" alt="" />
                        <p class="legende">Beau burger dit moi</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/recette01.jpg" alt="" />
                        <p class="legende">Beau burger dit moi</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/recette01.jpg" alt="" />
                        <p class="legende">Beau burger dit moi</p>
                    </div>
                </div>
            </div>
        </div>

        <?php get_footer(); ?>

