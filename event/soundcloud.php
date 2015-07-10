<?php if ($eventCategory == 'soundcloud') {

    $eventType = "photo";

    if ($eventTag == 'like') {

        // Data [Title, Description, Tags, TrackUrl, Username, UserProfileUrl, ImageUrl, EmbedCode, CreatedAt]

        $eventIconStatus = "favorite";
        $eventTitle = $content["Title"];
        $eventUrl = $content["TrackUrl"];
        $eventContent = $content["ImageUrl"];


    }


}