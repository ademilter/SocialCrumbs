<?php if ($eventCategory == 'dribbble') {

    if ($eventTag == 'like') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventType = "photo";
        $eventIconStatus = "like";
        $eventTitle = $content["EntryTitle"];
        $eventUrl = $content["EntryUrl"];
        $eventContent = $content["EntryImageUrl"];

    } elseif ($eventTag == 'shot') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventType = "photo";
        $eventIconStatus = "add";
        $eventTitle = $content["EntryTitle"];
        $eventUrl = $content["EntryUrl"];
        $eventContent = $content["EntryImageUrl"];

    }

}