<?php if ($eventCategory == 'instagram') {

    $eventType = "photo";

    if ($eventTag == 'share-photo') {

        // Data [Caption, Url, SourceUrl, CreatedAt, EmbedCodee]

        $eventIconStatus = "add";
        $eventTitle = $content["Caption"];
        $eventUrl = $content["Url"];
        $eventContent = $content["SourceUrl"];

    } elseif ($eventTag == 'share-video') {

        // Data [Caption, URL, VideoSourceURL, ImageThumbnailURL, CreatedAt, EmbedCode]

        $eventIconStatus = "add";
        $eventTitle = $content["Caption"];
        $eventUrl = $content["Url"];
        $eventContent = $content["ImageThumbnailURL"];

    } elseif ($eventTag == 'like-photo') {

        // Data [Caption, Url, SourceUrl, Username, CreatedAt, EmbedCode]

        $eventIconStatus = "like";
        $eventTitle = $content["Caption"];
        $eventUrl = $content["Url"];
        $eventContent = $content["SourceUrl"];

    } elseif ($eventTag == 'like-video') {

        // Data [Caption, URL, VideoSourceURL, ImageThumbnailURL, Username, CreatedAt, EmbedCode]

        $eventIconStatus = "like";
        $eventTitle = $content["Caption"];
        $eventUrl = $content["Url"];
        $eventContent = $content["ImageThumbnailURL"];

    }

}