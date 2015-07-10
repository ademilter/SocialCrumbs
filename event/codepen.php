<?php if ($eventCategory == 'codepen') {

    $eventType = "photo";

    if ($eventTag == 'pen') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventIconStatus = "write";
        $eventTitle = $content["EntryTitle"];
        $eventUrl = $content["EntryUrl"];
        $eventContent = $content["EntryImageUrl"];

    }


}