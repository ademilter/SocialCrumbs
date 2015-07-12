<?php
get_header();
?>

    <div class="container">
        <div class="Timeline">

            <div class="grid-sizer"></div>

            <?php

            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    $format = get_post_format();
                    get_template_part( 'content', $format );

                }
                ?>
            </div>

            <nav class="TimelineNav">
                <?php
                next_posts_link( __( 'Older posts', 's-report' ) );
                previous_posts_link( __( 'Newer posts', 's-report' ) );
                ?>
            </nav>

            <?php
        }

        ?>
    </div>

<<<<<<< HEAD
<?php get_footer(); ?>
=======
<?php
get_footer();
>>>>>>> pr/12
