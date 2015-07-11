<?php if ($eventCategory == 'github') {

    if ($eventTag == 'starred') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventType = "link";
        $eventIconStatus = "favorite";
        $eventTitle = '<span>I starred;</span>' . $content["EntryUrl"];
        $eventUrl = $content["EntryUrl"];
        $eventContent = $content["EntryContent"];

    }

}