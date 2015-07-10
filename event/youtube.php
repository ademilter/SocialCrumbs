<?php if ($eventCategory == 'youtube') {

    $eventType = "link";

    if ($eventTag == 'later') {

        // Data [Title, Description, Url, EmbedCode, CreatedAt]

        $eventIconStatus = "bookmark";
        $eventTitle = $content["Title"];
        $eventUrl = $content["Url"];
        $eventContent = $content["Description"];

    } elseif ($eventTag == 'like') {

        // Data [Title, Description, Url, EmbedCode, LikedAt]

        $eventIconStatus = "thumbs-up";
        $eventTitle = $content["Title"];
        $eventUrl = $content["Url"];
        $eventContent = $content["Description"];

    }

}