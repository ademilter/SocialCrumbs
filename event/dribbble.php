<?php if ($eventCategory == 'dribbble') {

    $eventType = "photo";

    if ($eventTag == 'like') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventIconStatus = "like";
        $eventTitle = $content["EntryTitle"];
        $eventUrl = $content["EntryUrl"];
        $eventContent = $content["EntryImageUrl"];

    } elseif ($eventTag == 'shot') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventIconStatus = "add";
        $eventTitle = $content["EntryTitle"];
        $eventUrl = $content["EntryUrl"];
        $eventContent = $content["EntryImageUrl"];

    }

}