<?php get_header(); ?>

    <div class="container">
        <div class="Timeline">

            <div class="grid-sizer"></div>

            <?php

            if ( have_posts() ) {
                while (have_posts()) {
                    the_post();

                    get_template_part( 'content', get_post_format() );

                }
                ?>
            </div>

            <nav class="TimelineNav">
                <?php next_posts_link(__('Older posts', 's-report')); ?>
                <?php previous_posts_link(__('Newer posts', 's-report'));
                ?>
            </nav>

            <?php
        }

        ?>
    </div>

<?php get_footer(); ?>