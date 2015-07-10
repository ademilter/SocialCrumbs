<?php if ($eventCategory == 'codepen') {


    if ($eventTag == 'pen') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventIconStatus = "write";
        $eventTitle = sprintf(__('Faved a product from <strong>%s</strong>\'s shop', 's-report'), $content["EntryAuthor"]);

        ob_start(); ?>
        <img src="<?php echo $content["EntryImageUrl"] ?>" alt="<?php echo $content["EntryTitle"] ?>"/>
        <figcaption><?php echo $content["EntryTitle"] . " - " . $content["EntryAuthor"] ?></figcaption>

        <?php
        $eventContent = ob_get_clean();

    }


}