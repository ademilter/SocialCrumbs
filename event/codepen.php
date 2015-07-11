<?php if ($eventCategory == 'codepen') {

    if ($eventTag == 'pen') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventType = "link";
        $eventIconStatus = "write";
        $eventTitle = '<span>I created pen;</span>' . $content["EntryTitle"];
        $eventUrl = $content["EntryUrl"];
        $eventContent = $content["EntryImageUrl"];

    }

}