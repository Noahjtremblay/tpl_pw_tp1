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

        <div class="cards">
            <div class="wrapper">
                <a href="recette.html">
                    <div class="card">
                        <div class="card_media"><img src="assets/images/recette01.jpg" alt="" /></div>
                        <div class="card_content">
                            <h4 class="categorie">Plat principale</h4>
                            <h3>hamburger</h3>
                            <p>Hamburger gourmet, viande juteuse, garnitures fraîches.</p>
                        </div>
                    </div>
                </a>
                <a href="recette.html">
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