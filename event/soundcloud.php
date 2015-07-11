<?php if ($eventCategory == 'soundcloud') {

    if ($eventTag == 'like') {

        // Data [Title, Description, Tags, TrackUrl, Username, UserProfileUrl, ImageUrl, EmbedCode, CreatedAt]

        $eventType = "photo";
        $eventIconStatus = "favorite";
        $eventTitle = $content["Title"] . ' by ' . $content["Username"];
        $eventUrl = $content["TrackUrl"];
        $eventContent = $content["ImageUrl"];

    }

}