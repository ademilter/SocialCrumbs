<?php if ($eventCategory == 'youtube') {

    if ($eventTag == 'like') {

        // Data [Title, Description, Url, EmbedCode, LikedAt]

        $eventType = "link";
        $eventIconStatus = "like";
        $eventTitle = '<span>I liked video;</span>' . $content["Title"];
        $eventUrl = $content["Url"];
        $eventContent = $content["Description"];

    }

}