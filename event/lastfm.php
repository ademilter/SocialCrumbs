<?php if ($eventCategory == 'lastfm') {

    $eventType = "photo";

    if ($eventTag == 'scrobbled') {

        // Data [Artist, TrackName, TrackUrl, AlbumImageUrl, PlayedDate]

        $eventIconStatus = "listen";
        $eventTitle = $content["Artist"] . ' - ' . $content["TrackName"];
        $eventUrl = $content["TrackUrl"];
        $eventContent = $content["AlbumImageUrl"];

    } elseif ($eventTag == 'like') {

        // Data [Artist, TrackName, TrackUrl, AlbumImageUrl, LovedDate]

        $eventIconStatus = "like";
        $eventTitle = $content["Artist"] . ' - ' . $content["TrackName"];
        $eventUrl = $content["TrackUrl"];
        $eventContent = $content["AlbumImageUrl"];

    }

}