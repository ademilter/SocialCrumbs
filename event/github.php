<?php if ($eventCategory == 'github') {

    $eventType = "link";

    if ($eventTag == 'repository') {

        // Data [RepositoryName, RepositoryDescription, RepositoryURL, CloneURL, OwnerUsername, OwnerAvatarURL, CreatedAt]

        $eventIconStatus = "add";
        $eventTitle = $content["EntryTitle"];
        $eventUrl = $content["RepositoryURL"];
        $eventContent = $content["RepositoryDescription"];

    } elseif ($eventTag == 'starred') {

        // Data [EntryTitle, EntryUrl, EntryAuthor, EntryContent, EntryImageUrl, EntryPublished, FeedTitle, FeedUrl]

        $eventIconStatus = "favorite";
        $eventTitle = $content["EntryTitle"];
        $eventUrl = $content["EntryUrl"];
        $eventContent = $content["EntryContent"];

    }

}