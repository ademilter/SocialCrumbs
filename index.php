<?php get_header(); ?>

    <div class="container">
        <div class="Timeline">

            <div class="grid-sizer"></div>

            <?php

            if ( have_posts() ) {
                while (have_posts()) {
                    the_post();

                    $eventType = "";
                    $eventTitle = "";
                    $eventContent = "";
                    $eventUrl = "";
                    $eventTimeStamp = sprintf(__('%s ago', 's-report'), human_time_diff(get_post_time('U'), current_time('timestamp')));
                    // connect, purchase, link, calendar, like, favorite, bookmark, watch, listen, add, write, checkin
                    $eventIconStatus = "";
                    $postCategories = get_the_category();
                    $eventCategory = $postCategories[0]->slug;
                    $postTags = get_the_tags();
                    $tags = array_values($postTags);
                    $eventTag = $tags[0]->slug;
                    $content = tokenText(get_the_content());

                    // Event Recipes
                    include "event/codepen.php";
                    include "event/delicious.php";
                    include "event/dribbble.php";
                    include "event/foursquare.php";
                    include "event/github.php";
                    include "event/instagram.php";
                    include "event/instapaper.php";
                    include "event/lastfm.php";
                    include "event/soundcloud.php";
                    include "event/twitter.php";
                    include "event/vimeo.php";
                    include "event/youtube.php";

                    // Event Template
                    eventTemplateSidebar($eventType, $eventTitle, $eventContent, $eventUrl, $eventTimeStamp, $eventIconStatus, $eventCategory, $eventTag);

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