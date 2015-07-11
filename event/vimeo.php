<?php if ($eventCategory == 'vimeo') {

    if ($eventTag == 'like') {

        // Data [Title, Caption, Url, OwnerName, OwnerUrl, EmbedCode, UploadedAt, LikedAt]

        $eventType = "link";
        $eventIconStatus = "like";
        $eventTitle = '<span>I liked video;</span>' . $content["Title"];
        $eventUrl = $content["Url"];
        $eventContent = $content["Caption"];

    }

}