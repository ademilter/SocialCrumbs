<?php if ($eventCategory == 'lastfm') {

    $eventType = "link";

    if ($eventTag == 'scrobbled') {

        // Data [Artist, TrackName, TrackUrl, AlbumImageUrl, PlayedDate]

        $eventIconStatus = "listen";
        $eventTitle = '<span>I listen song;</span>' . $content["Artist"] . ' - ' . $content["TrackName"];
        $eventUrl = $content["TrackUrl"];
        $eventContent = $content["AlbumImageUrl"];

    } elseif ($eventTag == 'like') {

        // Data [Artist, TrackName, TrackUrl, AlbumImageUrl, LovedDate]

        $eventIconStatus = "like";
        $eventTitle = '<span>I liked song;</span>' . $content["Artist"] . ' - ' . $content["TrackName"];
        $eventUrl = $content["TrackUrl"];
        $eventContent = $content["AlbumImageUrl"];

    }

}