<?php if ($eventCategory == 'instapaper') {

    $eventType = "link";

    if ($eventTag == 'like') {

        // Data [Title, Description, URL, CreatedAt]

        $eventIconStatus = "like";
        $eventTitle = '<span>I liked;</span>' . $content["Title"];
        $eventUrl = $content["URL"];
        $eventContent = $content["Description"];

    } elseif ($eventTag == 'save') {

        // Data [Title, Description, URL, CreatedAt]

        $eventIconStatus = "bookmark";
        $eventTitle = '<span>I bookmark it;</span>' . $content["Title"];
        $eventUrl = $content["URL"];
        $eventContent = $content["Description"];

    } elseif ($eventTag == 'highlight') {

        // Data [Title, Description, URL, CreatedAt]

        $eventIconStatus = "favorite";
        $eventTitle = '<span>I highlight it;</span>' . $content["Title"];
        $eventUrl = $content["URL"];
        $eventContent = $content["Description"];

    }

}