<footer>
        <div class="wrapper">
            <p class="copyright"><?php the_field('copyright','options') ?></p>
            <?php if (have_rows('social_media','options')) : ?>
                <nav>
                    <ul>
                        <?php while (have_rows('social_media','options')) : the_row();?>
                            <a target="_blank" href="<?php the_sub_field('link','options') ?>" <?php the_sub_field('name','options') ?>>
                                <li><svg class="icon icon--lg">
                                        <use xlink:href="#icon-<?php the_sub_field('name','options') ?>"></use>
                                    </svg></li>
                            </a> 
                        <?php endwhile; ?>
                    </ul>
                </nav>
            <?php endif; ?>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>