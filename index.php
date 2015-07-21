<?php get_header(); ?>

<div class="container">


    <header>
        <?php

        $cats = array(
            get_cat_ID('codepen'),
            get_cat_ID('delicious'),
            get_cat_ID('dribbble'),
            get_cat_ID('instapaper'),
            get_cat_ID('foursquare'),
            get_cat_ID('twitter'),
            get_cat_ID('soundcloud'),
            get_cat_ID('instagram'),
            get_cat_ID('vimeo'),
            get_cat_ID('youtube'),
            get_cat_ID('lastfm'),
            get_cat_ID('github')
        );

        $queryCategorySelect = array(
            'show_count' => true,
            'show_option_none' => 'All Category',
            'include' => $cats
        );

        wp_dropdown_categories($queryCategorySelect); ?>

    </header>


    <div class="Timeline">

        <div class="grid-sizer"></div>

        <?php

        if (have_posts()) {
        while (have_posts()) {
            the_post();

            $eventType = "";
            $eventTitle = "";
            $eventContent = "";
            $eventUrl = "";
            $eventTimeStamp = sprintf(__('%s ago', 's-report'), human_time_diff(get_post_time('U'), current_time('timestamp')));
            $eventIconStatus = "";

            // get category
            $postCategories = get_the_category();
            $eventCategory = '';
            if (!empty($postCategories[0])) {
                $eventCategory = $postCategories[0]->slug;
            }

            // get tag
            $postTags = get_the_tags();
            $tags = array();
            if (is_array($postTags)) {
                $tags = array_values($postTags);
            }
            $eventTag = '';
            if (!empty($tags)) {
                $eventTag = $tags[0]->slug;
            }

            $content = getDataObject(get_the_content());

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
            eventTemplate($eventType, $eventTitle, $eventContent, $eventUrl, $eventTimeStamp, $eventIconStatus, $eventCategory, $eventTag);

        } ?>
    </div>

    <div class="More">
        <?php
        next_posts_link(__('Older posts', 's-report'));
        //previous_posts_link(__('Newer posts', 's-report'));
        ?>
    </div>

    <?php } ?>

</div>

<?php get_footer(); ?>
