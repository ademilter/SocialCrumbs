<?php if ($eventCategory == 'foursquare') {

    $eventType = "photo";

    if ($eventTag == 'checkin') {

        // Data [Shout, VenueName, VenueUrl, VenueMapImageUrl, CheckinDate]

        $eventIconStatus = "checkin";
        $eventTitle = $content["Shout"] . ' @' . $content["VenueName"];
        $eventUrl = $content["VenueUrl"];
        $eventContent = $content["VenueMapImageUrl"];

    }

}