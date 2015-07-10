<?php if ($eventCategory == 'instapaper') {

    $eventType = "link";

    if ($eventTag == 'like') {

        // Data [Title, Description, URL, CreatedAt]

        $eventIconStatus = "like";
        $eventTitle = $content["Title"];
        $eventUrl = $content["URL"];
        $eventContent = $content["Description"];


    } elseif ($eventTag == 'save') {

        // Data [Title, Description, URL, CreatedAt]

        $eventIconStatus = "bookmark";
        $eventTitle = $content["Title"];
        $eventUrl = $content["URL"];
        $eventContent = $content["Description"];


    } elseif ($eventTag == 'highlight') {

        // Data [Title, Description, URL, CreatedAt]

        $eventIconStatus = "favorite";
        $eventTitle = $content["Title"];
        $eventUrl = $content["URL"];
        $eventContent = $content["Description"];

    }


}