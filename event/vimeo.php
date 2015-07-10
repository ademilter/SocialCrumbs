<?php if ($eventCategory == 'vimeo') {

    $eventType = "link";

    if ($eventTag == 'later') {

        // Data [Title, Caption, Url, OwnerName, OwnerUrl, EmbedCode, UploadedAt]

        $eventIconStatus = "bookmark";
        $eventTitle = $content["Title"];
        $eventUrl = $content["Url"];
        $eventContent = $content["Caption"];


    } elseif ($eventTag == 'like') {

        // Data [Title, Caption, Url, OwnerName, OwnerUrl, EmbedCode, UploadedAt, LikedAt]

        $eventIconStatus = "like";
        $eventTitle = $content["Title"];
        $eventUrl = $content["Url"];
        $eventContent = $content["Caption"];

    }


}