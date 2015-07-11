<?php if ($eventCategory == 'delicious') {

    if ($eventTag == 'add') {

        // Data [Url, Title, Tags, Notes, Time]

        $eventType = "link";
        $eventIconStatus = "link";
        $eventTitle = '<span>I bookmark it;</span>' . $content["Title"];
        $eventUrl = $content["Url"];
        $eventContent = $content["Notes"];

    }

}