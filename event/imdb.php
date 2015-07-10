<?php if ($eventCategory == 'imdb') {


    if ($eventTag == 'checkin') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventIconStatus = "watch";
        $eventTitle = sprintf(__('Watched a new movie', 's-report'));

        ob_start(); ?>
        <p><?php echo $content["EntryTitle"] ?></p>

        <?php
        $eventContent = ob_get_clean();


    } elseif ($eventTag == 'watchlist') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventIconStatus = "add";
        $eventTitle = sprintf(__('Added a new movie to a watchlist', 's-report'));

        ob_start(); ?>
        <p><?php echo $content["EntryTitle"] ?></p>

        <?php
        $eventContent = ob_get_clean();

    }


}