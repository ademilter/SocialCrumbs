<?php if ($eventCategory == 'foursquare') {

    if ($eventTag == 'checkin') {

        // Data [Shout, VenueName, VenueUrl, VenueMapImageUrl, CheckinDate]

        $eventType = "photo";
        $eventIconStatus = "checkin";
        $eventTitle = $content["Shout"] . ' @' . $content["VenueName"];
        $eventUrl = $content["VenueUrl"];
        $eventContent = $content["VenueMapImageUrl"];

    }

}